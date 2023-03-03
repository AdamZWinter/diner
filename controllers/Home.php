<?php

namespace myDiner;

class Home
{
    public static function get()
    {
        //echo "Hello world.";
        //Instantiate a view
        $view = new \Template();
        echo $view->render("views/diner-home.html");
    }

    public static function breakfast(){
        //Instantiate a view
        $view = new \Template();
        echo $view->render("views/breakfast.html");
    }

    public static function lunch(){
        //Instantiate a view
        $view = new \Template();
        echo $view->render("views/lunch.html");
    }
}