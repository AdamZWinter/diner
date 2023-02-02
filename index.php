<?php

//This is my controller

//Turn on error reporting

ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//Require autoload file
require_once('vendor/autoload.php');

//Instantiate the F3 Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function (){
    //echo "Hello world.";
    //Instantiate a view
    $view = new Template();
    echo $view->render("views/diner-home.html");
});

//Define a breakfast route
$f3->route('GET /breakfast', function (){
    //Instantiate a view
    $view = new Template();
    echo $view->render("views/breakfast.html");
});

//Define a lunch route
$f3->route('GET /lunch', function (){
    //Instantiate a view
    $view = new Template();
    echo $view->render("views/lunch.html");
});

//Define a route to order form 1
$f3->route('GET|POST /order1', function () use ($f3) {

    var_dump($_POST);
    if ($_SERVER['REQUEST_METHOD'] ==  'POST'){
        //Move data from POST array to SESSION array
        $_SESSION['meal'] = $_POST['meal'];
        $_SESSION['fname'] = $_POST['fname'];
        $f3->reroute('summary'); //uses PHP header() function

    }
    //Instantiate a view
    $view = new Template();
    echo $view->render("views/order-form1.html");
});

//Define a route to summary
$f3->route('GET /summary', function (){
    //Instantiate a view
    $view = new Template();
    echo $view->render("views/order-summary.html");
});






//Run Fat Free
$f3->run();

