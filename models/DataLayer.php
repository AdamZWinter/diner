<?php

namespace myDiner;

class DataLayer
{
    private $_dbh;
    function __construct(){
        require($_SERVER['HOME'].'/conf.php');
        try {
            $this->_dbh = new \PDO(DB_DRIVER, DB_USER, PASSWORD);
            echo 'DB connection successful.';
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    function saveOrder($orderObj)
    {
        $sql = "INSERT INTO `orders`(`food`, `meal`, `condiments`) VALUES (:food, :meal, :condiments)";
        $stmt = $this->_dbh->prepare($sql);
        $food = $orderObj->getFood();
        $meal = $orderObj->getMeal();
        $condiments = $orderObj->getCondiments();
        $stmt->bindParam(':food', $food);
        $stmt->bindParam(':meal', $meal);
        $stmt->bindParam(':condiments', $condiments);
        $stmt->execute();
        $id = $this->_dbh->lastInsertId();

        return $id;
    }

}