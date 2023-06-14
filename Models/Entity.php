<?php

require_once __DIR__.'/Weapon.php';
require_once __DIR__.'/../Traits/ForwardCallTrait.php';

class Entity{

    protected $weapon;

    use ForwardCallTrait;
    public function __construct()
    {
       
    }

    public function setWeapon(string $weaponName){
        $this->weapon  = $this->equipWeapon($weaponName);
        return $this;
    }

    public function getWeapon() : Weapon
    {
        return $this->weapon ?? $this->equipWeapon();
    }

    private function equipWeapon($weaponName = null): Weapon
    {
        return  new Weapon($weaponName);
    }

    public function __call($name, $arguments):void
    {

        if($name == 'attack')
        {
            $this->forwardCallTo($this->getWeapon(),$name, $arguments);
        }
    }


    public static function __callStatic($name, $arguments): mixed
    {
        return (new static)->$name($arguments);
    }
}