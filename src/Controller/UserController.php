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
                    $_SESSION['path']=$userinfo['path_avatar'];
                    return [
                    'view' => 'index.html.twig',
                    'email_address' => $user['email_address'],
                    'methode' => 'loggedUser',
                    'message' => 'Vous etes connecté',
                    'path' => $userinfo['path_avatar'],
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

                    case isset($request['request']['codepost']) : 
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
                                    'message' => "Utilisateur enregistré", 
                                ];
                                }else{return [
                                    'view' => 'index.html.twig',
                                    'message' => "L'adresse email est déja utilisé", 
                                ];
                                }
                            }else{return [
                            'view' => 'index.html.twig',
                            'message' => "Vous n'avez pas accepté les conditions générale d'utilisation" 
                            ];
                            }
                        }else{return [
                            'view' => 'index.html.twig',
                            'message' => "Vous n'avez pas entrer de mot de passe" 
                        ];
                        }
                    }else{return [
                        'view' => 'index.html.twig',
                        'message' => "Vous n'avez pas entrer d'adresse mail correct" 
                    ];
                    }
                }else{return [
                        'view' => 'index.html.twig',
                        'message' => "Vous n'avez pas entrer de code postal" 
                ];
                }
    }

    public function addUserInfo($request) {
        //$stringVal = new stringValidator();
            if(isset($request['request']['confirmswitch'])) {
                $this->addAvatar($request);
            }

            $url_path = "http://".$_SERVER['HTTP_HOST'];
            $exist = false;
            if(isset($_SESSION['username'])){
                if(!empty(glob ($_SERVER["DOCUMENT_ROOT"].'/newproject/web/images/avatar/'.$_SESSION['username'].'.*'))){
                    $exist = true;
                }else{$exist=false;}
            }
            if( isset( $request['request']['email']) ) { 
                $user = array(
                            'email_address' => '',
                            'gender' => '',
                            'city' => '',
                            'country' => '',
                            'phone_number' => '',
                            'address' => '',
                            'age' => '',
                            )
                ;
                switch (true) {
                    case (isset($request['request']['email']) && (preg_match('/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i', $request['request']['email']))): 
                        $user['email_address'] = $request['request']['email'];
                        
                    case isset($request['request']['city']) :
                        $user['city'] = $request['request']['city'];

                    case isset($request['request']['address']) : 
                        $user['address'] = $request['request']['address'];

                    case isset($request['request']['country']) : 
                        $user['country'] = $request['request']['country'];

                    case (isset($request['request']['phone_number']) && (preg_match('/^(1\s*[-\/\.]?)?(\((\d{3})\)|(\d{3}))\s*[-\/\.]?\s*(\d{3})\s*[-\/\.]?\s*(\d{4})\s*(([xX]|[eE][xX][tT])\.?\s*(\d+))*$', $request['request']['phone'] ))) : 
                        $user['phone_number'] = $request['request']['phone_number'];    
                        
                    case isset($request['request']['age']) : 
                        $user['age'] = $request['request']['age'];

                } 
                if(isset($request['request']['malefemaleswitch'])){
                    $user['gender'] = 'male';
                }
                elseif(!array_key_exists('malefemaleswitch', $request['request'])){
                    $user['gender'] = 'female';
                }
                $conn = AbstractBaseController::createConn();
                $userModel = new User($conn); // new Model for accessing db

                if(isset($_SESSION['username'])){
                    $userExist = $userModel->chkUserByName($_SESSION['username']); //cheqk if user logged still exist in db for updatee info
 
                    if( $userExist == '1'){ //then we can update info
                        $userinfo = $userModel->getInfo($_SESSION['username']);
                        $_SESSION['path']=$userinfo['path_avatar'];
                        foreach ($user as $key => $value) {
                            if($value!==''){
                                $userAdd = $userModel->addinfo($key, $value, $_SESSION['username']); 
                            }
                        }
               
                        return [
                        'view' => 'user/notify.html.twig',
                        //'user' => $user['name'],
                        'methode' => 'addUserInfo',
                        'path' => $userinfo['path_avatar'],
                        'message' => 'infos updated',
                        'confirm' => $exist,
                    ];
                    }else{return [
                        'view' => 'user/notify.html.twig',
                        //'user' => $user['name'],
                        'methode' => 'addUserInfo',
                        //'message' => 'User : '.$user['name'].' already exist Table users'
                        ];
                        }
                    }else{return [
                        'view' => 'user/notify.html.twig',
                        //'user' => $user['name'],
                        'methode' => 'addUserInfo',
                        'message' => 'Not logged in, cant add info' 
                        ];
                    }
            
            }else{
             return [
                    'view' => 'user/form_addUserInfo.html.twig',
                    'confirm' => $exist,
                    'methode' => 'addUserInfo'
                ];
            }
        }

    public function deleteUser($request) {
        //check request content else show input view
        if(isset($request['request']['name']) ) { 

            $user =  $request['request']['name'];
            $conn = AbstractBaseController::createConn();
            $userModel = new User($conn); // new Model for accessing db
            $userExist = $userModel->chkUserByName($user); //chk in db if user exist
            if( $userExist >= 1){ 
                $userDel= $userModel->delUser($user); // if exist delete it
                return [
                    'view' => 'user/notify.html.twig',
                    'user' => $user,
                    'methode' => 'delUser',
                    'message' => 'User : '.$user.' deleted Table users'
                ];
            }else{ return [
                'view' => 'user/notify.html.twig',
                'user' => $user,
                'methode' => 'delUser',
                'message' => 'Username : '.$user.' dont exist Table users'
                
                ];
            }
        }else {return ['view' => 'user/form_delUser.html.twig']; // 
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

                $userinfo = $userModel->getInfo($user['email_address']);
                $_SESSION['path']=$userinfo['path_avatar'];
                return [
                'view' => 'index.html.twig',
                'email_address' => $user['email_address'],
                'methode' => 'loggedUser',
                'message' => 'Vous etes connecté',
                'path' => $userinfo['path_avatar'],
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
        
        if(isset($_SESSION['username'])){
            $url_path = "http://".$_SERVER['HTTP_HOST'];
                if(!empty(glob ($_SERVER["DOCUMENT_ROOT"].'/newproject/web/images/avatar/'.$_SESSION['username'].'.*'))){
                    $exist = true;
                }else{$exist=false;} 

            if (isset($_FILES['avatar'])) {
                $fichier = $_FILES['avatar']['name'];


                if((pathinfo($fichier, PATHINFO_EXTENSION) == 'jpeg') or (pathinfo($fichier, PATHINFO_EXTENSION) == 'bmp') or (pathinfo($fichier, PATHINFO_EXTENSION) == 'jpg') or (pathinfo($fichier, PATHINFO_EXTENSION) == 'png')or (pathinfo($fichier, PATHINFO_EXTENSION) == 'JPG')or (pathinfo($fichier, PATHINFO_EXTENSION) == 'JPEG')or (pathinfo($fichier, PATHINFO_EXTENSION) == 'PNG')or (pathinfo($fichier, PATHINFO_EXTENSION) == 'BMP')){
                    if( (isset($request['request']['confirmswitch'])) or ($exist == false )  )  {
                            if($exist == true){
                                $existAvatar = glob ($_SERVER["DOCUMENT_ROOT"].'/newproject/web/images/avatar/'.$_SESSION['username'].'.*');
                                foreach ($existAvatar as $key => $value) {
                                    unlink($existAvatar[$key]);
                                }
                            }
                            $upload = move_uploaded_file($_FILES['avatar']['tmp_name'], $_SERVER["DOCUMENT_ROOT"]."/newproject/web/images/avatar/".$_SESSION['username'].'.'.pathinfo($fichier, PATHINFO_EXTENSION));  
                                $conn = AbstractBaseController::createConn();
                                $userModel = new User($conn); // new Model for accessing db
                                $avatarAdd = $userModel->addinfo('path_avatar', 'images/avatar/'.$_SESSION['username'].'.'.pathinfo($fichier, PATHINFO_EXTENSION), $_SESSION['username']); 
                                $userinfo = $userModel->getInfo($_SESSION['username']);
                                $_SESSION['path']=$userinfo['path_avatar'];
                                return [
                                    'view' => 'user/notify.html.twig',
                                    'methode' => 'addAvatar',
                                    'message' => 'Avatar uploaded ! ( may need a refresh to be displayed )',
                                    'path' => $userinfo['path_avatar'],
                                    'confirm' => $exist,
                                    ];
                        } else{return [
                        'view' => 'user/notify.html.twig',
                        'upload' => 'false',
                        'methode' => 'addAvatar',
                        'message' => 'nothing uploaded',
                        'confirm' => $exist,
                        ];

                } 
                }else{return [
                        'view' => 'user/notify.html.twig',
                        'upload' => 'false',
                        'methode' => 'addAvatar',
                        'message' => 'Bad extension/Not an image',
                        'confirm' => $exist,
                        ];

                }
            }else{
            return ['view' => 'user/form_addAvatar.html.twig',
            'methode' => 'addAvatar',
            'confirm' => $exist,
            ];
        }
        }else{
                return [
                    'view' => 'user/notify.html.twig',
                    'upload' => 'false',
                    'methode' => 'addAvatar',
                    'message' => 'Not logged in :"/'
                    ];
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
                    'message' => '',
                    ];
                }else {return [
                'view' => 'index.html.twig',
                'methode' => 'showUser',
                'message' => "L'email ".$user['email_address']." n'existe pas/plus dans la base",
                ];
            }//return other view for email not registerd
         }
    }


}
