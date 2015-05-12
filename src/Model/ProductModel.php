<?php

namespace Model;

class Product
{
    protected $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }


    public function chkProductByName($name){
        $qb = 'SELECT EXISTS(SELECT * FROM products WHERE name =  ?) as productExist'; //Check in db with name and password, return 0/1.
        $dbex = $this->conn->prepare($qb);
        $dbex->bindValue(1, $name);
        $dbex->execute();
        $resultQuery = $dbex->fetch();
        return $resultQuery['productExist'] ;
    }

        public function getProductById($id){
     
            $qb = 'SELECT * FROM products WHERE id =  ?'; //Check in db with name and password, return 0/1.
            $dbex = $this->conn->prepare($qb);
            $dbex->bindValue(1, $id);
            $dbex->execute();
            $resultQuery = $dbex->fetch();
            return $resultQuery;
    }


    public function listProducts(){
        
            $qb = 'SELECT `name` FROM `products`'; //Check in db with name and password, return 0/1.
            $dbex = $this->conn->prepare($qb);
            $dbex->execute();
            $resultQuery = $dbex->fetchAll();
            return $resultQuery;
    }

    public function addProduct($name, $price ,$cal = null){
            $query = 'INSERT INTO `products` (`name`, `price`, `kcal_ind`) VALUES (?,?,?)';
            $dbexec = $this->conn->prepare($query);
            $dbexec->bindValue(1, $name);
            $dbexec->bindValue(2, $price);
            $dbexec->bindValue(3, $cal);
            $dbexec->execute(); 

    }

    public function addProductInfo($var, $arg, $product){
        $query = 'UPDATE products SET '.$var.'="'.$arg.'" WHERE name= "'.$product.' " ';
        var_dump($query);
        $dbexec = $this->conn->prepare($query);
        $dbexec->bindValue(1, $arg);
        $dbexec->execute(); 

    }

    public function deleteProduct($name){
            $qb = 'DELETE FROM `products` WHERE name = ?';
            $dbex = $this->conn->prepare($qb);
            $dbex->bindValue(1, $name);
            $dbex->execute();
            return $name;
    }
}
