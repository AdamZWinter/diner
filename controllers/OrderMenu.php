<?php

namespace myDiner;

class OrderMenu
{
    public static function getOrder1($f3)
    {
        $menu = new DinnerMenu();
        $f3->set('menu', $menu->getMeals());
        //Instantiate a view
        $view = new \Template();
        echo $view->render("views/order-form1.html");
    }

    public static function postOrder1($f3)
    {
            //Move data from POST array to SESSION array
            $_SESSION['meal'] = $_POST['meal'];
            $_SESSION['fname'] = $_POST['fname'];
            $f3->reroute('order2'); //uses PHP header() function
    }

}