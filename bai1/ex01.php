<?php

declare(strict_types=1);

function sum(int $a, int|float $b)
{
    return $a + $b;
}

echo "<h1>", sum(10, 0.5), "</h1>";

$cource1 = "PHP";
$cource2 = "Javascript";
$cource3 = "HTML & CSS";

$cource = array("PHP", "Javascript", "HTML & CSS", 10.8);
echo "<pre>";
print_r($cource);

var_dump($cource);


echo "</pre>";
