<?php

class Weapon
{

    protected $name;
    
    public function __construct($name = null)
    {
        $this->name = $name ?? 'Bare Hands';
    }


    public function attack():void
    {
        echo $this->name != 'Bare Hands' ? 'Attacked with '.$this->name : 'Punched';
    }
}