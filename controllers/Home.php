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
}