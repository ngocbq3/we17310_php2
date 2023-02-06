<?php

function sumNumbers(...$numbers)
{
    var_dump($numbers);
    return array_sum($numbers);
}

echo "<h1>" . sumNumbers(1, 2, 3, 4, 5) . "</h1>";


function sumNumbers2()
{
    $args = func_get_args();

    var_dump($args);
}
sumNumbers2(1, 2, 4, 6, 8);


$sum = function ($a, $b) {
    return $a + $b;
};
echo "<br />";
echo $sum(10, 11);


$array = [1, 2, 3, 4, 5];

function numberX4($element)
{
    return $element * 4;
}

$array2 = array_map(fn ($element) => $element * 2, $array);
echo "<pre>";
print_r($array2);

$array3 = array_map('numberX4', $array);
print_r($array3);
