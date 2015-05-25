<?php

namespace Model;

class Card
{
    protected $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function addOrder($subscrideid, $day, $hour){

        $query = 'INSERT INTO `orders` (`day`, `hour`, `subscribe_id`) VALUES (?,?,?)';
        $dbexec = $this->conn->prepare($query);
        $dbexec->bindValue(1, $day);
        $dbexec->bindValue(2, $hour);
        $dbexec->bindValue(3, $subscrideid);
        $dbexec->execute(); 

    }

    public function setOrderUser($userid){
        $query = 'INSERT INTO `users_has_orders` (`users_id`, `orders_id`) VALUES (?,?)';
        $dbexec = $this->conn->prepare($query);
        $dbexec->bindValue(1, $userid);
        $dbexec->bindValue(2, $this->conn->lastInsertId());
        $dbexec->execute(); 
    }   

}
