<?php

require_once './Models/Player.php';

Player::attack();

echo '<br>';

$player2 = new Player();

$player2->setWeapon('Zucchini');

$player2->attack();