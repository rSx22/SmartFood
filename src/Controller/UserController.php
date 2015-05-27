<?php 

namespace Controller;
 
use Model\User;
use Controller\Validator;
 
class UserController extends AbstractBaseController {

    public function listUsersAction($request) {
        //create connection from parent AbstractBaseController
        $conn = AbstractBaseController::createConn();


        $userModel = new User($conn); // new Model for accessing db
        $users = $userModel->getAllUsers();
        //you can return a Response object
        return [
            'view' => 'user/listUser.html.twig', // should be Twig : 'WebSite/View/user/listUser.html.twig'
            'users' => $users
        ]; //return views and views parameter
    }

    public function showUserAction($request) {
        if( isset( $request['request']['email_address']) ){
            if(isset ($request['request']['password']) && (preg_match('/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i', $request['request']['email_address'])) ) { //if POST
                //handle form with DBAL
                //...
                $user = array(
                        'email_address' => $request['request']['email_address'],
                        'password' => $request['request']['password']
                        )
                ;
                $conn = AbstractBaseController::createConn();
                $userModel = new User($conn); // new Model for accessing db

                $userExist = $userModel->chkUserByMailAndPassword($user['email_address'], $user['password']);
                if( $userExist == '1'){
                    $_SESSION['email_address'] = $user['email_address'];

                    $userinfo = $userModel->getInfo($user['email_address']);
                    $_SESSION['path_avatar']=$userinfo['path_avatar'];
                    return [
                    'view' => 'index.html.twig',
                    'methode' => 'loggedUser',
                    'message' => 'Vous etes connecté',
                    ];
                }else {return [
                'view' => 'index.html.twig',
                'methode' => 'loggedUser',
                'message' => "L'email ".$user['email_address']." n'existe pas ou le mot de passe est mauvais",
                ];
            }//return other view for email not registerd
            }else {return [
                'view' => 'index.html.twig',
                'methode' => 'loggedUser',
                'message' => "L'email n'a pas un bon format ou le mot de passe est manquant",
                ];
            }//return other view for input
     }else {return [
            'view' => 'index.html.twig',
            'methode' => 'logUser',
            ];
        }//return other view for input   
    }

    /**
     * Add User and redirect on listUser after
     */
    public function addUser($request) {
                $user = array(
                            'postal_code' => '',
                            'email_address' => '',
                            'password' => '',
                            )
                ;
                switch (true) {
                    case ((isset($request['request']['email'])) && (preg_match('/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i', $request['request']['email']))): 
                        $user['email_address'] = $request['request']['email'];

                    case ((isset($request['request']['codepost'])) && (preg_match('#^[0-9]{5}$#', $request['request']['codepost']))): 
                        $user['postal_code'] = $request['request']['codepost'];

                    case ( ( isset( $request['request']['password'] ) ) &&  ( isset( $request['request']['password_check'] ))):
                        if($request['request']['password'] ==  $request['request']['password_check']){
                            $user['password'] = $request['request']['password'];
                        }

                }
                if(isset($request['request']['confirmswitch'])){
                    $confirm = true;
                }else{$confirm=false;
                }
                if(!empty($user['postal_code'])){
                    if(!empty($user['email_address'])){
                        if(!empty($user['password'])){
                            if($confirm==true){
                                $conn = AbstractBaseController::createConn();
                                $userModel = new User($conn); // new Model for accessing db
                                $userExist = $userModel->chkUserByMail($user['email_address']); 

                                if( $userExist == '0'){ //then we can create it
                                    $_SESSION['email_address'] = $user['email_address'];
                                    $userAdd = $userModel->addUser($user['email_address'], $user['password'], $user['postal_code']); 
                                    
                                    return [
                                        'view' => 'index.html.twig',
                                        'methode' => 'addUserStep2',
                                        'message' => "Utilisateur enregistré",
                                ];
                                }else{return [
                                    'view' => 'index.html.twig',
                                    'message' => "L'adresse email est déja utilisé", 
                                ];
                                }
                            }else{return [
                            'view' => 'index.html.twig',
                            'message' => "Veuillez accepté les conditions générales d'utilisation et l'utilisation de cookies" 
                            ];
                            }
                        }else{return [
                            'view' => 'index.html.twig',
                            'message' => "Vous n'avez pas entré de mot de passe ou la vérification est différente" 
                        ];
                        }
                    }else{return [
                        'view' => 'index.html.twig',
                        'message' => "Vous n'avez pas entrer d'adresse mail correct" 
                    ];
                    }
                }else{return [
                        'view' => 'index.html.twig',
                        'message' => "Vous n'avez pas entré de code postal correct" 
                ];
                }
    }
    public function addUserStep2($request) {
        if(isset($_SESSION['email_address'])){
            if(!isset($request['request']['name'])){
                return [
                    'view' => 'index.html.twig',
                    'methode' => 'addUserStep2',
                    'message' => "Veuillez rentrer votre nom"
                ];
            }
            elseif(!isset($request['request']['phone_number'])){
                return [
                    'view' => 'index.html.twig',
                    'methode' => 'addUserStep2',
                    'message' => "Veuillez rentrer votre numéro de téléphone"
                ];
            }
            elseif(!isset($request['request']['address'])){
                return [
                    'view' => 'index.html.twig',
                    'methode' => 'addUserStep2',
                    'message' => "Veuillez rentrer votre addresse"
                ];
            }

            elseif(isset($request['request']['name']) && isset($request['request']['phone_number']) && isset($request['request']['address'])){
                $conn = AbstractBaseController::createConn();
                $userModel = new User($conn); // new Model for accessing db
                $userExist = $userModel->chkUserByMail($_SESSION['email_address']); //cheqk if user logged still exist in db for updatee info
                $userStep2 = $userModel->addUserStep2($request['request']['name'], $request['request']['phone_number'], $request['request']['address'], $_SESSION['email_address']);

            }
            return [
                'view' => 'index.html.twig',
                'methode' => 'addUserStep2',
                'message' => "Inscription complète",
            ];
        }else{
            return [
                'view' => 'index.html.twig',
                'methode' => 'addUser',
                'message' => "Vous n'etes pas enregistré",
            ];
        }
    }

    public function addUserInfo($request) {
    if(isset($_SESSION['email_address'])){

        $conn = AbstractBaseController::createConn();
        $userModel = new User($conn); // new Model for accessing db
        $userExist = $userModel->chkUserByMail($_SESSION['email_address']); //cheqk if user logged still exist in db for updatee info
        $userinfo = $userModel->getInfoByMail($_SESSION['email_address']);

        $exist = false;
        if(isset(glob ($_SERVER["DOCUMENT_ROOT"].'/newproject/web/images/avatar/'.$userinfo['id'].'.*')['0'])){
            $exist = true;
        }else{$exist=false;}
        if( $userExist == '1'){ //then we can update info
            if( !empty( $request['request']) ) {

                if(isset($request['request']['confirmswitch']) OR ($exist == false) ) {
                    $upload_avatar = $this->addAvatar($request);
                }else{$upload_avatar ='';}
                $user = array(
                    'address' => '',
                    'gender' => '',
                    'city' => '',
                    'phone_number' => '',
                    'age' => '',
                );

                switch (true) {

                    case ((isset($request['request']['city'])) && (preg_match('/[a-zéèêëàâîïôöûü-]+/i', $request['request']['city']))) :
                        $user['city'] = $request['request']['city'];

                    case ((isset($request['request']['address'])) && (strlen(utf8_decode($request['request']['address'])) < 25 )) :
                        $user['address'] = $request['request']['address'];

                    case (isset($request['request']['phone_number']) && (preg_match('/^(1\s*[-\/\.]?)?(\((\d{3})\)|(\d{3}))\s*[-\/\.]?\s*(\d{3})\s*[-\/\.]?\s*(\d{4})\s*(([xX]|[eE][xX][tT])\.?\s*(\d+))*$/', $request['request']['phone_number'] ))) :
                        $user['phone_number'] = $request['request']['phone_number'];

                    case (isset($request['request']['age'])):
                        if ($request['request']['age'] > 0 && $request['request']['age'] < 120 )  {
                            $user['age'] = $request['request']['age'];
                        }

                    default:break;
                }
                if(isset($request['request']['malefemaleswitch'])){
                    $user['gender'] = 'Homme';
                }else{$user['gender'] = 'Femme';}

                foreach ($user as $key => $value) {
                    if($value!==''){
                        $userAdd = $userModel->addinfo($key, $value, $_SESSION['email_address']);
                    }
                }
                if(isset(glob ($_SERVER["DOCUMENT_ROOT"].'/newproject/web/images/avatar/'.$userinfo['id'].'.*')['0'])){
                    $exist = true;
                }
                return [
                    'view' => 'index.html.twig',
                    'methode' => 'addUserInfo',
                    'message' => "Informations mises à jour.".' '.$upload_avatar,
                    'exist' => $exist,
                    'user' => $user,
                ];
            }else{return [
                'view' => 'index.html.twig',
                'methode' => 'addUserInfo',
                'exist' => $exist,
                'user' => $userinfo,

            ];
            }
        }
    }else{
        return [
            'view' => 'index.html.twig',
            'methode' => 'loggedUser',
            'message' => "Vous n'etes pas enregistré",
        ];
    }
}

    public function deleteUser($request) {
        //check request content else show input view
        if(isset($_SESSION['email_address']) ) { 

            $user =  $_SESSION['email_address'];
            $conn = AbstractBaseController::createConn();
            $userModel = new User($conn); // new Model for accessing db
            $userExist = $userModel->chkUserByMail($user); //chk in db if user exist
            if( $userExist >= 1){ 
                $userDel= $userModel->delUser($user); // if exist delete it
                $this->logOut();
                return [
                    'view' => 'index.html.twig',
                    'methode' => 'delUser',
                    'message' => $user.' a été supprimé',
                ];
            }else{ return [
                'view' => 'index.html.twig',
                'methode' => 'delUser',
                'message' => $user.' a déja été supprimé',
                
                ];
            }
        }else {return [
                'view' => 'index.html.twig',
                'methode' => 'delUser',
                'message' => 'Veuillez vous connecter',
                
                ]; // 
        }
    }

    /**
     * Log User (Session) , add session in $request first (index.php)
     */
    public function logUser($request) {
        if( isset( $request['request']['email_address']) ){
        if(isset ($request['request']['password']) && (preg_match('/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i', $request['request']['email_address'])) ) { //if POST
            //handle form with DBAL
            //...
            $user = array(
                    'email_address' => $request['request']['email_address'],
                    'password' => $request['request']['password']
                    )
            ;
            $conn = AbstractBaseController::createConn();
            $userModel = new User($conn); // new Model for accessing db

            $userExist = $userModel->chkUserByMailAndPassword($user['email_address'], $user['password']);
            if( $userExist == '1'){
                $_SESSION['email_address'] = $user['email_address'];

                $userinfo = $userModel->getInfoByMail($user['email_address']);
                $_SESSION['path_avatar']=$userinfo['path_avatar'];
                return [
                'view' => 'index.html.twig',
                'email_address' => $user['email_address'],
                'methode' => 'showUser',
                'message' => 'Vous etes connecté',
                'path_avatar' => $userinfo['path_avatar'],
                ];
            }else {return [
            'view' => 'index.html.twig',
            'methode' => 'loggedUser',
            'message' => "L'email ".$user['email_address']." n'existe pas ou le mot de passe est mauvais",
            ];
        }//return other view for email not registerd
        }else {return [
            'view' => 'index.html.twig',
            'methode' => 'loggedUser',
            'message' => "L'email n'a pas un bon format ou le mot de passe est manquant",
            ];
        }//return other view for input
     }else {return [
            'view' => 'index.html.twig',
            'methode' => 'logUser',
            ];
        }//return other view for input   
    }


    public function logOut() {

        $_SESSION = array(); //vide le tableau session

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }//

        // Finalement, on détruit la session.
        @session_destroy(); //  <--------------->
        return ['view' => 'index.html.twig',
                'message' => 'Vous avez été deconnecté',
                'methode' => 'loggedUser',
                ];
    }


    public function addAvatar($request)
    {
        if (!empty($_FILES['avatar']['name'])) {
            $fichier = $_FILES['avatar']['name'];
            $conn = AbstractBaseController::createConn();
            $userModel = new User($conn); // new Model for accessing db
            $userinfo = $userModel->getInfoByMail($_SESSION['email_address']);
            if((pathinfo($fichier, PATHINFO_EXTENSION) == 'jpeg') or (pathinfo($fichier, PATHINFO_EXTENSION) == 'bmp') or (pathinfo($fichier, PATHINFO_EXTENSION) == 'jpg') or (pathinfo($fichier, PATHINFO_EXTENSION) == 'png')or (pathinfo($fichier, PATHINFO_EXTENSION) == 'JPG')or (pathinfo($fichier, PATHINFO_EXTENSION) == 'JPEG')or (pathinfo($fichier, PATHINFO_EXTENSION) == 'PNG')or (pathinfo($fichier, PATHINFO_EXTENSION) == 'BMP')){
                        $existAvatar = glob ($_SERVER["DOCUMENT_ROOT"].'/newproject/web/images/avatar/'.$userinfo['id'].'.*');
                        foreach ($existAvatar as $key => $value) {
                            unlink($existAvatar[$key]);
                        }
                    
                        $upload = move_uploaded_file($_FILES['avatar']['tmp_name'], $_SERVER["DOCUMENT_ROOT"]."/newproject/web/images/avatar/".$userinfo['id'].'.'.pathinfo($fichier, PATHINFO_EXTENSION));      
                        $avatarAdd = $userModel->addInfo('path_avatar', 'images/avatar/'.$userinfo['id'].'.'.pathinfo($fichier, PATHINFO_EXTENSION), $_SESSION['email_address']); 
                        $_SESSION['path_avatar']= 'images/avatar/'.$userinfo['id'].'.'.pathinfo($fichier, PATHINFO_EXTENSION);
                        return 'Votre image de profil va être mise à jour';
                
            }else{return "Le format d'image est incorrect";
            }
        }  
    }


    public function showProfile($request)
    {   
         if( isset( $_SESSION['email_address']) ){
                //handle form with DBAL
                //...
                $user = array(
                        'email_address' =>  $_SESSION['email_address'],
                        )
                ;
                $conn = AbstractBaseController::createConn();
                $userModel = new User($conn); // new Model for accessing db

                $userExist = $userModel->chkUserByMail($user['email_address']);
                if( $userExist == '1'){

                    $userinfo = $userModel->getInfoByMail($user['email_address']);
                    $_SESSION['path']=$userinfo['path_avatar'];
                    return [
                    'view' => 'index.html.twig',
                    'user' => $userinfo,
                    'methode' => 'showUser',
                    ];
                }else {return [
                'view' => 'index.html.twig',
                'methode' => 'addUser',
                'message' => "L'email ".$user['email_address']." n'existe pas/plus dans la base",
                ];
            }//return other view for email not registerd
         }
    }

    public function dump(){
        var_dump($_SESSION,$_SESSION['card']);die;
    }

}
