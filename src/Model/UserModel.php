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
    public function chkUserByMail($email){
        $qb = 'SELECT EXISTS(SELECT * FROM users WHERE email_address =  ?) as userExist'; //Check in db with name and password, return 0/1.
        $dbex = $this->conn->prepare($qb);
        $dbex->bindValue(1, $email);
        $dbex->execute();
        $resultQuery = $dbex->fetch();
        return $resultQuery['userExist'] ;
    }

    public function chkUserByMailAndPassword($mail, $password){
        $qb = 'SELECT EXISTS(SELECT * FROM users WHERE email_address =  ? AND password = ?) as userExist'; //Check in db with name and password, return 0/1.
        $dbex = $this->conn->prepare($qb);
        $dbex->bindValue(1, $mail);
        $dbex->bindValue(2, $password);
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

    public function addUser($email, $password, $postal_code){
        $query = 'INSERT INTO `users` (`email_address`, `password`,`postal_code`) VALUES (?,?,?)';
        $dbexec = $this->conn->prepare($query);
        $dbexec->bindValue(1, $email);
        $dbexec->bindValue(2, $password);
        $dbexec->bindValue(3, $postal_code);
        $dbexec->execute(); 
    }

    public function addInfo($var, $arg, $user){
        $query = 'UPDATE users SET '.$var.' = ? WHERE email_address = ? ';

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

    public function getInfoByMail($email){
        $query = 'SELECT * FROM users WHERE email_address= ?';
        $dbexec = $this->conn->prepare($query);
        $dbexec->bindValue(1, $email);
        $dbexec->execute(); 
        $resultQuery = $dbexec->fetch();
        return $resultQuery;

    }
    
    public function delUser($name){
        $qb = 'DELETE FROM `users` WHERE email_address = ?';
        $dbex = $this->conn->prepare($qb);
        $dbex->bindValue(1, $name);
        $dbex->execute();
        return $name;
    }
}
