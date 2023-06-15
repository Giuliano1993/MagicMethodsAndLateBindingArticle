<?php

class Weapon
{

    protected $name;

    protected $bearer;
    
    public function __construct($name = null, $bearer = null)
    {
        $this->name = $name ?? 'Bare Hands';
        $this->bearer = $bearer;
    }


    public function attack():void
    {
        echo $this->name != 'Bare Hands' ? $this->bearer. ' Attacked with '.$this->name : $this->bearer . ' Punched';
    }
}