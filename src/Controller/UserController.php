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
            $qb = 'INSERT INTO `users` (`name`, `password`) VALUES (?,?)';
            $dbex = $conn->prepare($qb);
            $dbex->bindValue(1, $user['name']);
            $dbex->bindValue(2, $user['password']);
            $dbex->execute();


            //Redirect to show
            //you should return a RedirectResponse object
            //return [
            //    'redirect_to' => 'http://.......',// => manage it in index.php !! URL should be generate by Routing functions thanks to routing config

            //];
        

            //you should return a Response object
            return [
                'view' => 'addUser.html.twig',// => create the file
                'user' => $user
            ];
        }else {return ['view' => 'form_addUser.html.twig'];
        }
    }


    /**
     * Delete User and redirect on listUser after
     */
    public function deleteUser($request) {
        //Use Doctrine DBAL here



        //you should return a RedirectResponse object , redirect to list
        return [
            'redirect_to' => 'http://.......',// => manage it in index.php !! URL should be generate by Routing functions thanks to routing config

        ];
    }

    /**
     * Log User (Session) , add session in $request first (index.php)
     */
    public function logUser($request) {
        if ($request['request']) { //if POST
            //handle form with DBAL
            //...


        }


        //take FlashBag system from
        // https://github.com/NicolasBadey/SupInternetTweeter/blob/master/model/functions.php
        // line 87 : https://github.com/NicolasBadey/SupInternetTweeter/blob/master/index.php
        // and manage error and success

        //Redirect to list or home
        //you should return a RedirectResponse object
        return [
            'redirect_to' => 'http://.......',// => manage it in index.php !! URL should be generate by Routing functions thanks to routing config

        ];

    }
}