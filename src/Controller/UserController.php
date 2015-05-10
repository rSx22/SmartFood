<?php 

namespace Controller;
    //affiche les erreurs
ini_set('error_reporting', E_ALL);

session_start();

use Doctrine\DBAL\Query;
use Controller\validator;
/**
 * Class UserController
 *
 * Controller of all User actions
 *
 * @package Website\Controller
 */
class UserController extends AbstractBaseController {

    public function listUserAction($request) {
        //create connection from parent AbstractBaseController
        $conn = AbstractBaseController::createConn();

        $queryBuilder = $conn->createQueryBuilder(); // call query builder
        $queryBuilder
            ->select('name')
            ->from('users', 'u')
        ;//mysql function by querybuilder 2.5 in project -> no insert() method

        $dbex = $conn->query($queryBuilder);
        $users = $dbex->fetchAll();

        //you can return a Response object
        return [
            'view' => 'listUser.html.twig', // should be Twig : 'WebSite/View/user/listUser.html.twig'
            'users' => $users
        ]; //return views and views parameter
    }

    public function showUserAction($request) {
        if ( isset($request['request']['id']) ){ //chk for id from post else input's view
            $id = $request['request']['id'];
            $conn = AbstractBaseController::createConn();
            $queryBuilder = $conn->createQueryBuilder();



            $queryBuilder
                ->select('name')
                ->from('users', 'alias')
                ->where('id = ?')
            ;
            $dbex = $conn->prepare($queryBuilder);
            $dbex->bindValue(1, $id); // bin value ? => $id
            $dbex->execute();
            $user = $dbex->fetch();
            if( isset($user['name'])){
                return  [
                            'view' => 'notify.html.twig',
                            'user' => $user['name'],
                            'methode' => 'showUser',
                            'message' => 'User : '.$user['name'].' registered with id : '.$request['request']['id'].' Table users'
                        ];
            }
        }else{return ['view' => 'form_showUser.html.twig'];}
    }

    /**
     * Add User and redirect on listUser after
     */
    public function addUser($request) {
        $stringVal = new validator\stringValidator();
            if( isset( $request['request']['name']) && isset ($request['request']['password']) ) { 
                $user = array(
                            'name' => $request['request']['name'],
                            'password' => $request['request']['password']
                            )
                ;
                if($stringVal->strBetween($user['name'], '6', '12' )) {
                    if($stringVal->strBetween($user['password'], '6', '12' )){
                        $conn = AbstractBaseController::createConn();
                        $queryBuilder = $conn->createQueryBuilder();

                        $qb = 'SELECT EXISTS(SELECT * FROM users WHERE name =  ?) as userExist'; //Check in db with name  return 0/1.
                        $dbex = $conn->prepare($qb);
                        $dbex->bindValue(1, $user['name']);
                        $dbex->execute();
                        $resultQuery = $dbex->fetch();
                        if( $resultQuery['userExist'] == '0'){ //then we can create it
                            $query = 'INSERT INTO `users` (`name`, `password`) VALUES (?,?)';
                            $dbexec = $conn->prepare($query);
                            $dbexec->bindValue(1, $user['name']);
                            $dbexec->bindValue(2, $user['password']);
                            $dbexec->execute(); 
                            return [
                            'view' => 'notify.html.twig',
                            'user' => $user['name'],
                            'methode' => 'addUser',
                            'message' => 'User : '.$user['name'].' registered Table users'
                        ];
                        }else{return [
                            'view' => 'notify.html.twig',
                            'user' => $user['name'],
                            'methode' => 'addUser',
                            'message' => 'User : '.$user['name'].' already exist Table users'
                            ];
                            }
                        }else{return [
                            'view' => 'notify.html.twig',
                            'user' => $user['name'],
                            'methode' => 'addUser',
                            'message' => 'Password too short (6 char. min.) or too long (12 char. max.) Table users'
                        ];

                        }
                    }else{ return [
                        'view' => 'notify.html.twig',
                        'user' => $user['name'],
                        'methode' => 'addUser',
                        'message' => 'User : '.$user['name'].' too short (6 char. min.) or too long (12 char. max.) Table users'
                    ];
                    }
                }else{ return [
                        'view' => 'form_addUser.html.twig'
                    ];
                }
            }
        


    /**
     * Delete User and redirect on listUser after
     */
    public function deleteUser($request) {
        //check request content else show input view
        if(isset($request['request']['name']) ) { 
            $user =  $request['request']['name'];
            $conn = AbstractBaseController::createConn();
            $queryBuilder = $conn->createQueryBuilder();
            $qb = 'SELECT EXISTS(SELECT * FROM users WHERE name =  ?) as userExist'; //Check in db with name  return 0/1.
            $dbex = $conn->prepare($qb);
            $dbex->bindValue(1, $user); // bind value ? => $user
            $dbex->execute();
            $resultQuery = $dbex->fetch(); //fetch 0/1 if user already exist
            if( $resultQuery['userExist'] >= 1){ 
                $qb = 'DELETE FROM `users` WHERE name = ?';
                $dbex = $conn->prepare($qb);
                $dbex->bindValue(1, $user);
                $dbex->execute();
                return [
                    'view' => 'notify.html.twig',
                    'user' => $user,
                    'methode' => 'delUser',
                    'message' => 'User : '.$user.' deleted Table users'
                ];
            }else{ return [
                'view' => 'notify.html.twig',
                'user' => $user,
                'methode' => 'delUser',
                'message' => 'Username : '.$user.' dont exist Table users'
                
                ];
            }
        }else {return ['view' => 'form_delUser.html.twig']; // 
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
            $queryBuilder = $conn->createQueryBuilder();
            $user = array(
                        'name' => $request['request']['name'],
                        'password' => $request['request']['password']
                        )
            ;


            $qb = 'SELECT EXISTS(SELECT * FROM users WHERE name =  ? AND password = ?) as userExist'; //Check in db with name and password, return 0/1.
            $dbex = $conn->prepare($qb);
            $dbex->bindValue(1, $user['name']);
            $dbex->bindValue(2, $user['password']);
            $dbex->execute();
            $resultQuery = $dbex->fetch();
            if( $resultQuery['userExist'] == 1){
                $_SESSION['username'] = $user['name'];
                return [
                'view' => 'notify.html.twig',
                'user' => $user['name'],
                'methode' => 'logUser',
                'message' => 'Logged in :)'
                ];
            }else {return [
                'view' => 'notify.html.twig',
                'user' => $user['name'],
                'methode' => 'logUser',
                'message' => 'Username '.$user['name'].' dont exist Table users'
                ];
                }//return other view for wrong logging 
        }else {return ['view' => 'form_logUser.html.twig'];}
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
        return ['view' => 'form_logUser.html.twig'];
    }
}
