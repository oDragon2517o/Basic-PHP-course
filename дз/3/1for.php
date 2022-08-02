<?php

$mass1 = range(0, 90, 10);
$mass2 = range(1, 10);


for ($i = 0; $i < count($mass1); ++$i) {
    $mass3[$i] = $mass1[$i] * $mass2[$i];
}

print_r($mass3);
