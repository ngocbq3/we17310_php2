<?php

// function numberRange($x = 100)
// {
//     $array = [];
//     for ($i = 0; $i < $x; $i++) {
//         $array[] = $i;
//     }
//     return $array;
// }

function numberRange($x = 100)
{
    for ($i = 0; $i < $x; $i++) {
        yield $i;
    }
}
foreach (numberRange(PHP_INT_MAX) as $range) {
    echo $range . " Element <br />";
}
