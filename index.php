<?php

require_once './Models/Steve.php';

Steve::attack();

echo '<br>';
echo 'Wait... pro player entering the lobby';
echo '<br>';

$player2 = new Steve();
$player2->setWeapon('Diamond Sword');
$player2->attack();