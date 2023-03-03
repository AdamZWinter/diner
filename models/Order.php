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

    public function getFood(): string
    {
        return 'testFood';
    }

    public function getMeal(): string
    {
        return 'testMeal';
    }

    public function getCondiments(): string
    {
        return 'test Condiments';
    }

}