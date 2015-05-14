<?php

namespace Model;

class User
{
    protected $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function chkUserByNameAndPassword($name, $password){
        $qb = 'SELECT EXISTS(SELECT * FROM users WHERE name =  ? AND password = ?) as userExist'; //Check in db with name and password, return 0/1.
        $dbex = $this->conn->prepare($qb);
        $dbex->bindValue(1, $name);
        $dbex->bindValue(2, $password);
        $dbex->execute();
        $resultQuery = $dbex->fetch();
        return $resultQuery['userExist'] ;
    }

    public function chkUserByName($name){
        $qb = 'SELECT EXISTS(SELECT * FROM users WHERE name =  ?) as userExist'; //Check in db with name and password, return 0/1.
        $dbex = $this->conn->prepare($qb);
        $dbex->bindValue(1, $name);
        $dbex->execute();
        $resultQuery = $dbex->fetch();
        return $resultQuery['userExist'] ;
    }

    public function getUserByName($name){
        $qb = 'SELECT `name` FROM `users` WHERE name =  ?'; //Check in db with name and password, return 0/1.
        $dbex = $this->conn->prepare($qb);
        $dbex->bindValue(1, $name);
        $dbex->execute();
        $resultQuery = $dbex->fetchAll();
        return $resultQuery;
    }

    public function getUserById($id){
        $qb = 'SELECT * FROM users WHERE id =  ?'; //Check in db with name and password, return 0/1.
        $dbex = $this->conn->prepare($qb);
        $dbex->bindValue(1, $id);
        $dbex->execute();
        $resultQuery = $dbex->fetch();
        return $resultQuery;
    }

    public function getAllUsers(){
        $qb = 'SELECT `name` FROM `users`'; //Check in db with name and password, return 0/1.
        $dbex = $this->conn->prepare($qb);
        $dbex->execute();
        $resultQuery = $dbex->fetchAll();
        return $resultQuery;
    }

    public function addUser($name, $password){
        $query = 'INSERT INTO `users` (`name`, `password`) VALUES (?,?)';
        $dbexec = $this->conn->prepare($query);
        $dbexec->bindValue(1, $name);
        $dbexec->bindValue(2, $password);
        $dbexec->execute(); 
    }

    public function addInfo($var, $arg, $user){
        $query = 'UPDATE users SET '.$var.' = ? WHERE name = ? ';

        $dbexec = $this->conn->prepare($query);
       // $dbexec->bindValue(1, $var);
        $dbexec->bindValue(1, $arg);
        $dbexec->bindValue(2, $user);

        $dbexec->execute(); 

    }
    public function getInfo($user){
        $query = 'SELECT * FROM users WHERE name= ?';
        $dbexec = $this->conn->prepare($query);
        $dbexec->bindValue(1, $user);
        $dbexec->execute(); 
        $resultQuery = $dbexec->fetch();
        return $resultQuery;

    }
    
    public function delUser($name){
        $qb = 'DELETE FROM `users` WHERE name = ?';
        $dbex = $this->conn->prepare($qb);
        $dbex->bindValue(1, $name);
        $dbex->execute();
        return $name;
    }
}
