<?php

$mass = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$revers = function ($mas) {

    if ($mas % 2 == 0) {
        return "четное";
    } else {
        return "нечетное";
    };
};

$result = array_map($revers, $mass);
print_r($result);
