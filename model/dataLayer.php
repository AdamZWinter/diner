<?php

namespace myDiner;

class dinnerMenu extends Menu
{
    function __construct()
    {
        $this->meals = array("breakfast", "lunch", "dinner");
    }
}