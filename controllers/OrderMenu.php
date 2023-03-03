<?php

namespace myDiner;

class OrderMenu
{
    public static function getOrder1($f3): void
    {
        $menu = new DinnerMenu();
        $f3->set('menu', $menu->getMeals());
        //Instantiate a view
        $view = new \Template();
        echo $view->render("views/order-form1.html");
    }

    public static function postOrder1($f3): void
    {
        //Move data from POST array to SESSION array
        $_SESSION['meal'] = $_POST['meal'];
        $_SESSION['fname'] = $_POST['fname'];
        $_SESSION['lname'] = $_POST['lname'];
        $_SESSION['message'] = $_POST['message'];
        $_SESSION['link'] = $_POST['link'];
        $f3->reroute('order2'); //uses PHP header() function
    }

    public static function getOrder2(): void
    {
        //Instantiate a view
        $view = new \Template();
        echo $view->render("views/order-form2.html");
    }

    public static function postOrder2($f3): void
    {
        //Move data from POST array to SESSION array
        //$condiments = $_POST['condiments'];
        $_SESSION['condiments'] = implode(', ', $_POST['condiments']);
        $_SESSION['notes'] = $_POST['notes'];
        $f3->reroute('summary'); //uses PHP header() function
    }

    public static function summary(): void
    {
        //Instantiate a view
        $view = new \Template();
        echo $view->render("views/order-summary.html");
    }

}