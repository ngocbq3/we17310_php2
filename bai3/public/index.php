<?php

// spl_autoload_register(function ($class) {
//     $path = lcfirst(str_replace("\\", "/", $class));
//     require_once __DIR__ . "/../" . $path . ".php";
// });
require_once __DIR__ . "/../vendor/autoload.php";

use App\BankHD;
use App\ClassA;
use App\ClassB;

$bank = new BankHD;
$bank->tranfer(100);

$classA = new ClassA;
$classB = new ClassB;

$classA->show();
$classB->show();
