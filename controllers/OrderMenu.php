<?php

namespace myDiner;

class OrderMenu
{
    public static function getOrder1($f3): void
    {
        $menu = new Menu();
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

        $order = new Order();
        $order->setMeal($_POST['meal']);
        $order->setFname($_POST['fname']);
        $order->setLname($_POST['lname']);

        $_SESSION['order'] = $order;


        $f3->reroute('order2'); //uses PHP header() function
    }

    public static function getOrder2($f3): void
    {
        $menu = new Menu();
        $f3->set('foods', $menu->getFoods());
        //Instantiate a view
        $view = new \Template();
        echo $view->render("views/order-form2.html");
    }

    public static function postOrder2($f3): void
    {
        //Move data from POST array to SESSION array
        //$condiments = $_POST['condiments'];
        //$_SESSION['condiments'] = implode(', ', $_POST['condiments']);
        //$_SESSION['notes'] = $_POST['notes'];

        $order = $_SESSION['order'];
        //$order = new Order();
        $order->setCondiments(implode(', ', $_POST['condiments']));
        $order->setNotes($_POST['notes']);
        $order->setFood($_POST['food']);

        $_SESSION['order'] = $order;

        $f3->reroute('summary'); //uses PHP header() function
    }

    public static function summary($f3): void
    {
        $dataLayer = new DataLayer();
        $order = $_SESSION['order'];
        $id = $dataLayer->saveOrder($order);
        $f3->set('orderID', $id);

        //Instantiate a view
        $view = new \Template();
        echo $view->render("views/order-summary.html");
    }

}