<?php

$mass = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$check = function (array $mas): array {
    return [
        'max' => max($mas),
        'min' => min($mas),
        'avg' => array_sum($mas) / count($mas),
    ];
};


print_r($check($mass));
