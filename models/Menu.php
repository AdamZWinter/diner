<?php

namespace myDiner;
class Menu {

    protected array $meals = [];

    function getMeals(){
        return $this->meals;
    }

}