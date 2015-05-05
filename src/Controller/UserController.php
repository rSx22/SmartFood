<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 23/04/2015
 * Time: 23:45
 */

namespace Controller;


use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Configuration;
use Symfony\Component\Yaml\Parser;
/**
 * Class UserController
 *
 * Controller of all User actions
 *
 * @package Website\Controller
 */
class UserController {

    /**
     * Recup all users and print it
     *
     * @return array
     */
    public function listUserAction($request) {
        //Use Doctrine DBAL here
        $yaml = new Parser();
        $users = '';
        $params = $yaml->parse(file_get_contents('../app/config/config_prod.yml'));

        try {
              $conn = \Doctrine\DBAL\DriverManager::getConnection($params['doctrine']);
        } catch (Exception $e) {

            var_dump($e->getMessage());
            die;
        }


        $queryBuilder = $conn->createQueryBuilder();



        $queryBuilder
            ->select('name')
            ->from('user', 'alias')
        ;

        $dbex = $conn->query($queryBuilder);
        $users = $dbex->fetchAll();







        //you can return a Response object
        return [
            'view' => 'listUser.html.twig', // should be Twig : 'WebSite/View/user/listUser.html.twig'
            'users' => $users
        ];
    }


    /**
     * swho one user thanks to his id : &id=...
     *
     * @return array
     */
    public function showUserAction($request) {
        //Use Doctrine DBAL here

        $user = '';

        //you can return a Response object
        return [
            'view' => 'WebSite/View/user/showUser.html.twig', // should be Twig : 'WebSite/View/user/listUser.html.twig'
            'user' => $user
        ];
    }

    /**
     * Add User and redirect on listUser after
     */
    public function addUser($request) {
        //Use Doctrine DBAL here


        if ($request['request']) { //if POST
            //handle form with DBAL
            //...

            //Redirect to show
            //you should return a RedirectResponse object
            return [
                'redirect_to' => 'http://.......',// => manage it in index.php !! URL should be generate by Routing functions thanks to routing config

            ];
        }


        //you should return a Response object
        return [
            'view' => 'WebSite/View/user/addUser.html.php',// => create the file
            'user' => $user
        ];
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