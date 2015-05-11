<?php 

namespace Controller;
    //affiche les erreurs
ini_set('error_reporting', E_ALL);

session_start();
 
use Model\User;
 
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
        $stringVal = new Validator\stringValidator();
            if( isset( $request['request']['name']) && isset ($request['request']['password']) ) { 
                $user = array(
                            'name' => $request['request']['name'],
                            'password' => $request['request']['password']
                            )
                ;
                if($stringVal->strBetween($user['name'], '6', '12' )) {
                    if($stringVal->strBetween($user['password'], '6', '12' )){

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
                return [
                'view' => 'user/notify.html.twig',
                'user' => $user['name'],
                'methode' => 'logUser',
                'message' => 'Logged in :)'
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
}
