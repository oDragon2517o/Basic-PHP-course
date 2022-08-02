<?php

$mass1 = range(0, 90, 10);
$mass2 = range(1, 10);


foreach ($mass1 as $key => $value) {
    $mass3[$key] = $mass1[$key] * $mass2[$key];
}

print_r($mass3);
