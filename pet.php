<?php

// 328/pets-oop/pets.php
// file names do not need to be the same as the class
class Pet
{

    // fields
    private $_name, $_color;

    // constructor
    function __construct($name = "unknown", $color = "unknown")
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    // getters and setters
    function getName()
    {
        return $this->_name;
    }

    function getColor()
    {
        return $this->_color;
    }

    function setName($name)
    {
        $this->_name = $name;
    }

    function setColor($color)
    {
        $this->_color = $color;
    }


    function eat()
    {
        echo "<p>$this->_name is eating</p>";
    }

    function talk()
    {
        echo "<p>$this->_name is talking</p>";
    }

    function sleep()
    {
        echo "<p>$this->_name is sleeping</p>";
    }
}