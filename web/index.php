<?php

/**
 * This is you FrontController, the only point of access to your webapp
 */
 
 require __DIR__ . '/../vendor/autoload.php';

ini_set('error_reporting', E_ALL);

session_start();
 
 use Symfony\Component\Yaml\Parser;
 use Controller\Validator;




 $yaml = new Parser();

 $routes = $yaml->parse(file_get_contents('../app/config/routing.yml'));


if(isset($_GET['p'])){

	//$arrayVal = new Validator\arrayValidator();

	if ( Validator\arrayValidator::keyExist($routes,$_GET['p']) ){
		$current_route = $routes[$_GET['p']]['controller'];
		 $route_table = explode(":", $current_route );

		/**
		 * Use Yaml components for load a config routing, $routes is in yaml app/config/routing.yml :
		 *
		 * Url will be /index.php?p=route_name
		 *
		 *
		 */

		//ControllerClassName, end name is ...Controller
		$controller_class = $route_table[0];

		//ActionName, end name is ...Action
		$action_name = $route_table[1];

		$controller = new $controller_class();

		//$Request can by an object
		$request['request'] = &$_POST;
		$request['query'] = &$_GET;
		//...

		//$response can be an object
		$response = $controller->$action_name($request);
	}
}

$reponse['url_path'] = "http://".$_SERVER['HTTP_HOST']; //assign url_path to response for view to know relativ path of the page, for link as example

$loader = new Twig_Loader_Filesystem('../src/View/');	//load view folder (from root)
$twig = new Twig_Environment($loader, array(			
    'cache' => '../app/cache/twig',						//params for twig cache folder
    'debug' => true,									//and debug on (' {{dump(ma_var)}} ') in twig
));	
$twig->addExtension(new Twig_Extension_Debug());		//for debug to work

if(isset($response['view'])){							//if i've got a response from controller then i show view asked from it
	$template = $twig->loadTemplate($response['view']); // load view
	unset($response['view']);							//unset unused view
	if(isset($_SESSION['email_address'])){					//for user to see his profil name and profil picture if session is set
		$response['email_address'] = $_SESSION['email_address'] ;
		if(strlen($_SESSION['email_address']) > 16){
			$response['email_address_shortened'] = substr($_SESSION['email_address'], 0, 16 ).'...';
		}
		if(isset($_SESSION['path_avatar'])){
			$response['path'] = $_SESSION['path_avatar'];
		}
	}
	echo $template->render($response); 					//attach response array of var of the controller to the view, then used in view as {{array.var}}
	
}else{
	$template = $twig->loadTemplate('index.html.twig');	//else i got not response from controller then ->index
	if(isset($_SESSION['email_address'])){					//for user to see his profil name and profil picture if session is set
		$response['email_address'] = $_SESSION['email_address'] ;
		if(strlen($_SESSION['email_address']) > 16){
			$response['email_address_shortened'] = substr($_SESSION['email_address'], 0, 16 ).'...';
		}
		if(isset($_SESSION['path_avatar'])){
			$response['path'] = $_SESSION['path_avatar'];
		}
	}
	if( isset( $response )){
		echo $template->render($response);
	}else{echo $template->render(array());}
}
