<?php

//This is my controller

//Turn on error reporting

ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');
//require_once('model/DinnerMenu.php');
//var_dump(getMeals());

//Start a session
session_start();

//$dataLayer = new \myDiner\DataLayer();
//$myOrder = new \myDiner\Order();
//$dataLayer->saveOrder($myOrder);


//Instantiate the F3 Base class
$f3 = Base::instance();

//https://fatfreeframework.com/3.5/routing-engine#TheF3Autoloader
$f3->set('AUTOLOAD','controllers/');

//Define a default route
$f3->route('GET /', function (){\myDiner\Home::get();});

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
$f3->route('GET /order1', function () use ($f3) {\myDiner\OrderMenu::getOrder1($f3);});
$f3->route('POST /order1', function () use ($f3) {\myDiner\OrderMenu::postOrder1($f3);});

//Define a route to order form 2
$f3->route('GET|POST /order2', function () use ($f3) {

    var_dump($_POST);
    if ($_SERVER['REQUEST_METHOD'] ==  'POST'){
        //Move data from POST array to SESSION array
        $_SESSION['cond'] = $_POST['cond'];
        //$_SESSION['fname'] = $_POST['fname'];
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

