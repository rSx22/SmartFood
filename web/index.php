<?php

/**
 * This is you FrontController, the only point of access to your webapp
 */
 
 require __DIR__ . '/../vendor/autoload.php';
 
 use Symfony\Component\Yaml\Parser;


$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->add('Model\\', __DIR__.'/src/Model');


 $yaml = new Parser();

 $routes = $yaml->parse(file_get_contents('../app/config/routing.yml'));


 if(isset($_GET['p'])){
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

/**
 * Use Twig !
 */


}

$loader = new Twig_Loader_Filesystem('../src/View/user');
$twig = new Twig_Environment($loader, array(
    'cache' => '../app/cache/twig',
    'debug' => true,
));	
$twig->addExtension(new Twig_Extension_Debug());

if(isset($response['view'])){
	$template = $twig->loadTemplate($response['view']);
	unset($response['view']);
	if(isset($_SESSION['username'])){
		$response['session'] = $_SESSION['username'];
		echo $template->render($response);
	}else{
		echo $template->render($response);
	}
}else{
	$template = $twig->loadTemplate('index.html.twig');
	if( isset( $response )){
		echo $template->render($response);
	}else{echo $template->render(array());}
}
