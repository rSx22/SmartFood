<?php

namespace Controller;

use Symfony\Component\Yaml\Parser;


abstract class AbstractBaseController {

	public function createConn(){
        $yaml = new Parser();
        $params = $yaml->parse(file_get_contents('../app/config/config_prod.yml'));

        try {
              $conn = \Doctrine\DBAL\DriverManager::getConnection($params['doctrine']);
        } catch (Exception $e) {

            var_dump($e->getMessage());
            die;
        }
      	return $conn;
    }
    public function getGlobals() {//try for retrieve them in twig
    if( isset($_SESSION ) ){
        return array(
            'session'   => $_SESSION,
        ) ;
    }else{return array();}
}

}
