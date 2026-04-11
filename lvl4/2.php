<?php

require_once 'vendor/autoload.php';

use Mioky\Lvl4\UserManager;

$sasha = new UserManager();

$sasha->addUser('primer.com', 'Саша');
$sasha->addUser('primer.ru', 'Саша');
$sasha->addUser('primer.ru', 'Саша');
$sasha->removeUser('primer.ru');
print_r ($sasha->getUser('primer.ru'));
$sasha->addUser('primer.ru', 'Саша');
print_r ($sasha->getUser('primer.ru'));