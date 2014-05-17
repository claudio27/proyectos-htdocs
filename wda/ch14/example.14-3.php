<?php

interface Audible
{
    function sound();
}

class Animal implements Audible
{
    var $name;
    var $says;
    var $legs;

    function sound()
    {
        return $this->says;
    }

    function name()
    {
        return $this->name;
    }

    function numberOfLegs()
    {
        $this->legs;
    }

    function __construct($name, $says, $legs)
    {
        $this->name = $name;
        $this->says = $says;
        $this->legs = $legs;
    }
}
?>
