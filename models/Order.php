<?php

namespace myDiner;

class Order
{
    private $_fname;
    private $_lname;
    private $_food;
    private $_meal;
    private $_condiments;
    private $_notes;
    private $_link;
    private $_message;

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->_fname;
    }

    /**
     * @param mixed $fname
     */
    public function setFname($fname): void
    {
        $this->_fname = $fname;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->_lname;
    }

    /**
     * @param mixed $lname
     */
    public function setLname($lname): void
    {
        $this->_lname = $lname;
    }

    /**
     * @return mixed
     */
    public function getFood()
    {
        return $this->_food;
    }

    /**
     * @param mixed $food
     */
    public function setFood($food): void
    {
        $this->_food = $food;
    }

    /**
     * @return mixed
     */
    public function getMeal()
    {
        return $this->_meal;
    }

    /**
     * @param mixed $meal
     */
    public function setMeal($meal): void
    {
        $this->_meal = $meal;
    }

    /**
     * @return mixed
     */
    public function getCondiments()
    {
        return $this->_condiments;
    }

    /**
     * @param mixed $condiments
     */
    public function setCondiments($condiments): void
    {
        $this->_condiments = $condiments;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->_notes;
    }

    /**
     * @param mixed $notes
     */
    public function setNotes($notes): void
    {
        $this->_notes = $notes;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->_link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link): void
    {
        $this->_link = $link;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->_message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->_message = $message;
    }




}