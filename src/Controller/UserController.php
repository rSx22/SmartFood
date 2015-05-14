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
        if ( isset($request['request']['id']) ){ //chk for id from post else input's view
            $id = $request['request']['id'];
            $conn = AbstractBaseController::createConn();
            $userModel = new User($conn); // new Model for accessing db
            $user = $userModel->getUserById($id);
            if( isset($user['name'])){
                return  [
                            'view' => 'user/notify.html.twig',
                            'user' => $user['name'],
                            'methode' => 'showUser',
                            'message' => 'User : '.$user['name'].' registered with id : '.$id.' Table users'
                        ];
            }else{ return  [
                            'view' => 'user/notify.html.twig',
                            'user' => $user['name'],
                            'methode' => 'showUser',
                            'message' => 'No User registered with id : '.$id.' Table users'
                        ];
                }
        }else{return ['view' => 'user/form_showUser.html.twig'];}
    }

    /**
     * Add User and redirect on listUser after
     */
    public function addUser($request) {
            if( isset( $request['request']['name']) && isset ($request['request']['password']) ) { 
                $user = array(
                            'name' => $request['request']['name'],
                            'password' => $request['request']['password']
                            )
                ;
                if(Validator\stringValidator::strBetween($user['name'], '6', '12' )) {
                    if(Validator\stringValidator::strBetween($user['password'], '6', '12' )){

                        $conn = AbstractBaseController::createConn();
                        $userModel = new User($conn); // new Model for accessing db
                        $userExist = $userModel->chkUserByName($user['name']); 

                        if( $userExist == '0'){ //then we can create it
                            
                            $userAdd = $userModel->addUser($user['name'], $user['password']); 
                            
                            return [
                            'view' => 'user/notify.html.twig',
                            'user' => $user['name'],
                            'methode' => 'addUser',
                            'message' => 'User : '.$user['name'].' registered Table users'
                        ];
                        }else{return [
                            'view' => 'user/notify.html.twig',
                            'user' => $user['name'],
                            'methode' => 'addUser',
                            'message' => 'User : '.$user['name'].' already exist Table users'
                            ];
                            }
                        }else{return [
                            'view' => 'user/notify.html.twig',
                            'user' => $user['name'],
                            'methode' => 'addUser',
                            'message' => 'Password too short (6 char. min.) or too long (12 char. max.) Table users'
                        ];

                        }
                    }else{ return [
                        'view' => 'user/notify.html.twig',
                        'user' => $user['name'],
                        'methode' => 'addUser',
                        'message' => 'User : '.$user['name'].' too short (6 char. min.) or too long (12 char. max.) Table users'
                    ];
                    }
                }else{ return [
                        'view' => 'user/form_addUser.html.twig'
                    ];
                }
            }
    public function addUserInfo($request) {
        //$stringVal = new stringValidator();
            if(isset($request['request']['confirmswitch'])) {
                $this->addAvatar($request);
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
                        //'message' => 'User : '.$user['name'].' registered Table users'
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
            
            }else{if(isset($_SESSION['username'])){
            if((file_exists($_SERVER["DOCUMENT_ROOT"].'/newproject/web/images/avatar/'.$_SESSION['username'].".jpg")) ){
            $exist = true;
        }}else{$exist = false;}
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
        if( isset( $request['request']['name']) && isset ($request['request']['password']) ) { //if POST
            //handle form with DBAL
            //...

            $conn = AbstractBaseController::createConn();
            $userModel = new User($conn); // new Model for accessing db
            $user = array(
                        'name' => $request['request']['name'],
                        'password' => $request['request']['password']
                        )
            ;
            $userExist = $userModel->chkUserByNameAndPassword($user['name'], $user['password']);

            if( $userExist == '1'){
                $_SESSION['username'] = $user['name'];

                $userinfo = $userModel->getInfo($user['name']);
                $_SESSION['path']=$userinfo['path_avatar'];
                return [
                'view' => 'user/notify.html.twig',
                'user' => $user['name'],
                'methode' => 'logUser',
                'message' => 'Logged in :)',
                'path' => $userinfo['path_avatar'],
                ];
            }else {return [
                'view' => 'user/notify.html.twig',
                'user' => $user['name'],
                'methode' => 'logUser',
                'message' => 'Username '.$user['name'].' dont exist or password is wrong Table users'
                ];
                }//return other view for wrong logging 
        }else {return ['view' => 'user/form_logUser.html.twig'];}
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
        return ['view' => 'user/form_logUser.html.twig'];
    }


    function addAvatar($request)
    {
        if (isset($_FILES['avatar'])) {
            if(isset($_SESSION['username'])){
                $fichier = $_FILES['avatar']['name'];
                if((pathinfo($fichier, PATHINFO_EXTENSION) == 'jpeg') or (pathinfo($fichier, PATHINFO_EXTENSION) == 'bmp') or (pathinfo($fichier, PATHINFO_EXTENSION) == 'jpg') or (pathinfo($fichier, PATHINFO_EXTENSION) == 'png')){
                    if((isset($request['request']['confirmswitch'])) or !file_exists($_SERVER["DOCUMENT_ROOT"].'/newproject/web/images/avatar/'.$_SESSION['username'].".jpg")  ) {
                            $upload = move_uploaded_file($_FILES['avatar']['tmp_name'], $_SERVER["DOCUMENT_ROOT"]."/newproject/web/images/avatar/".$_SESSION['username'].'.'.pathinfo($fichier, PATHINFO_EXTENSION));
                            }
                        if (!empty($fichier['error']) ){     
                                switch ($fichier['error']){     
                                   case 'UPLOAD_ERR_INI_SIZE':   
                                   return [
                                        'view' => 'user/notify.html.twig',
                                        'upload' => 'false',
                                        'methode' => 'addAvatar',
                                        'message' => 'File too big for server'
                                        ];     
                                   break;     
                                   case 'UPLOAD_ERR_FORM_SIZE': // UPLOAD_ERR_FORM_SIZE     
                                   return [
                                        'view' => 'user/notify.html.twig',
                                        'upload' => 'false',
                                        'methode' => 'addAvatar',
                                        'message' => 'File too big for an avatar !' // size bigge than limit in form
                                        ];
                                   break;     
                                   case 'UPLOAD_ERR_PARTIAL': // UPLOAD_ERR_PARTIAL     
                                   return [
                                        'view' => 'user/notify.html.twig',
                                        'upload' => 'false',
                                        'methode' => 'addAvatar',
                                        'message' => 'Avatar upload failed while uploading '
                                        ];    
                                   break;     
                                   case 'UPLOAD_ERR_NO_FILE': // UPLOAD_ERR_NO_FILE     
                                   return [
                                        'view' => 'user/notify.html.twig',
                                        'upload' => 'false',
                                        'methode' => 'addAvatar',
                                        'message' => 'Avatar cant be empty of null size'
                                        ];
                                   break;     
                                }    
                        }else {    
                                $conn = AbstractBaseController::createConn();
                                $userModel = new User($conn); // new Model for accessing db
                                $avatarAdd = $userModel->addinfo('path_avatar', 'images/avatar/'.$_SESSION['username'].'.'.pathinfo($fichier, PATHINFO_EXTENSION), $_SESSION['username']); 
                                $userinfo = $userModel->getInfo($_SESSION['username']);
                                $_SESSION['path']=$userinfo['path_avatar'];
                                return [
                                    'view' => 'user/notify.html.twig',
                                    'upload' => 'false',
                                    'methode' => 'addAvatar',
                                    'message' => 'Avatar uploaded !',
                                    'path' => $userinfo['path_avatar'],
                                    ];
                        }  
                    
                }else{return [
                        'view' => 'user/notify.html.twig',
                        'upload' => 'false',
                        'methode' => 'addAvatar',
                        'message' => 'Bad extension/Not an image'
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
        }else{if(isset($_SESSION['username'])){
            if((file_exists($_SERVER["DOCUMENT_ROOT"].'/newproject/web/images/avatar/'.$_SESSION['username'].".jpg")) ){
            $exist = true;
        }else{$exist=false;}}else{$exist = false;}
            return ['view' => 'user/form_addAvatar.html.twig',
            'methode' => 'addAvatar',
            'confirm' => $exist,];
        }
    }


    function upload($path)
    {

    }


}
