<?php

namespace myDiner;
class Menu {

    protected array $meals = [];

    function __construct()
    {
        $this->meals = array("breakfast", "lunch", "dinner");
    }
    function getMeals(){
        return $this->meals;
    }

    function getFoods(){
        return array('Sandwich', 'Soup', 'Salad', 'Breadsticks', 'Duck');
    }

}