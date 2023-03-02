<?php

namespace myDiner;

class DinnerMenu extends Menu
{
    function __construct()
    {
        $this->meals = array("breakfast", "lunch", "dinner");
    }
}