<?php

namespace myDiner;

class Order
{
    private $_food;
    private $_meal;
    private $condiments;

//    function __construct(){
//
//    }

    public function getFood()
    {
        return 'testFood';
    }

    public function getMeal()
    {
        return 'testMeal';
    }

    public function getCondiments()
    {
        return 'test Condiments';
    }

}