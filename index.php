<?php

//This is my controller

//Turn on error reporting

ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');

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
$f3->route('GET /breakfast', function (){\myDiner\Home::breakfast();});

//Define a lunch route
$f3->route('GET /lunch', function (){\myDiner\Home::lunch();});

//Define a route to order form 1
$f3->route('GET /order1', function () use ($f3) {\myDiner\OrderMenu::getOrder1($f3);});
$f3->route('POST /order1', function () use ($f3) {\myDiner\OrderMenu::postOrder1($f3);});

//Define a route to order form 2
$f3->route('GET /order2', function () use ($f3) {\myDiner\OrderMenu::getOrder2($f3);});
$f3->route('POST /order2', function () use ($f3) {\myDiner\OrderMenu::postOrder2($f3);});

//Define a route to summary
$f3->route('GET /summary', function () use ($f3) {\myDiner\OrderMenu::summary($f3);});


//Run Fat Free
$f3->run();

