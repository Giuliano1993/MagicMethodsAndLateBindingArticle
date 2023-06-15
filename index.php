<?php

require_once './Models/Steve.php';

Steve::attack();

echo '<br>';
echo 'Wait... an enemy is approaching';
echo '<br>';

$skeleton = new Entity();
$skeleton->setWeapon('Diamond Sword');
$skeleton->attack();