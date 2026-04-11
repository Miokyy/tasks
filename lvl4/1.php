<?php

require_once 'vendor/autoload.php';

use Mioky\Lvl4\BankAccount;

$me = new BankAccount();
$me->deposit(40);
$me->withdraw(30);
print_r ($me->getStatement());