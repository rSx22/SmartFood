<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 23/04/2015
 * Time: 23:45
 */

namespace Controller;

use Doctrine\DBAL\Query;
/**
 * Class UserController
 *
 * Controller of all User actions
 *
 * @package Website\Controller
 */
class UserController extends AbstractBaseController {

    public function listUserAction($request) {
        //Use Doctrine DBAL here

        $conn = AbstractBaseController::createConn();
        $queryBuilder = $conn->createQueryBuilder();


        $queryBuilder
            ->select('name')
            ->from('users', 'u')
        ;

        $dbex = $conn->query($queryBuilder);
        $users = $dbex->fetchAll();

        //you can return a Response object
        return [
            'view' => 'listUser.html.twig', // should be Twig : 'WebSite/View/user/listUser.html.twig'
            'users' => $users
        ];
    }



    public function showUserAction($request) {
        //Use Doctrine DBAL here
        if ( isset($request['request']['id']) ){
            $id = $request['request']['id'];
            $conn = AbstractBaseController::createConn();
            $queryBuilder = $conn->createQueryBuilder();



            $queryBuilder
                ->select('name')
                ->from('users', 'alias')
                ->where('id = ?')
            ;
            $dbex = $conn->prepare($queryBuilder);
            $dbex->bindValue(1, $id);
            $dbex->execute();
            $user = $dbex->fetch();

            //you can return a Response object
            return [
                'view' => 'showUser.html.twig', // should be Twig : 'WebSite/View/user/listUser.html.twig'
                'user' => array(
                                'id' =>$id,
                                'name' =>$user['name']  
                                )
            ];
        }else{return ['view' => 'form_showUser.html.twig'];}
    }

    /**
     * Add User and redirect on listUser after
     */
    public function addUser($request) {
        //Use Doctrine DBAL here

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
                   'view' => 'addUser.html.twig',// => create the file
                    'user' => $user
                ];
            }else{return ['view' => 'errorUserExist.html.twig',
                      'user' => $user['name']
                      ];
            }

            //Redirect to show
            //you should return a RedirectResponse object
            //return [
            //    'redirect_to' => 'http://.......',// => manage it in index.php !! URL should be generate by Routing functions thanks to routing config

            //];
        

            //you should return a Response object
           
        }else {return ['view' => 'form_addUser.html.twig'];
        }
    }


    /**
     * Delete User and redirect on listUser after
     */
    public function deleteUser($request) {
        //Use Doctrine DBAL here

        if( isset( $request['request']['name']) ) { //if POST
            //handle form with DBAL
            //...
            $conn = AbstractBaseController::createConn();
            $queryBuilder = $conn->createQueryBuilder();

            $user =  $request['request']['name'];

            $qb = 'SELECT EXISTS(SELECT * FROM users WHERE name =  ?) as userExist'; //Check in db with name  return 0/1.
            $dbex = $conn->prepare($qb);
            $dbex->bindValue(1, $user);
            $dbex->execute();
            $resultQuery = $dbex->fetch();
            if( $resultQuery['userExist'] < 'O'){ 

                $qb = 'DELETE FROM `users` WHERE name = ?';
                $dbex = $conn->prepare($qb);
                $dbex->bindValue(1, $user);
                $dbex->execute();
                return [
                    'view' => 'delUser.html.twig',
                    'user' => $user
                ];
            }else{ return [
                    'view' => 'errorUserNotExist.html.twig',
                    'user' => $user
                ];
            }

            //Redirect to show
            //you should return a RedirectResponse object
            //return [
            //    'redirect_to' => 'http://.......',// => manage it in index.php !! URL should be generate by Routing functions thanks to routing config

            //];
        

            //you should return a Response object
            
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
                $_SESSION['user'] = $user;
                return [
                    'view' => 'logUser.html.twig',// => create the file
                    'user' => $user['name']
                ];
            }else {return['view' => 'errorLoggingUser.html.twig',
                          'user' => $user['name']
                          ];
                  }//return other view for wrong logging

            //Redirect to show
            //you should return a RedirectResponse object
            //return [
            //    'redirect_to' => 'http://.......',// => manage it in index.php !! URL should be generate by Routing functions thanks to routing config

            //];
        

            //you should return a Response object
            
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