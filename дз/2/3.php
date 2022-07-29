<?php

do {
    $n = (int)readline("Введиите число ");
} while ($n <= 0);

$n = $n > 8 ? $n % 8 : $n;

if ($n == 1) {
    echo 1;
} elseif ($n == 2 || $n == 8) {
    echo 2;
} elseif ($n == 3 || $n == 7) {
    echo 3;
} elseif ($n == 4 || $n == 6) {
    echo 4;
} elseif ($n == 5) {
    echo 5;
}
