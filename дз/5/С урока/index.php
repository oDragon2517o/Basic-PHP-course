<?php
include_once "Ship.php";
include "Unit.php";

$data = new DateTime();
print_r($data);

$pilot1 = new Unit("Гагарин", 100);
echo $pilot1->add(2, 2);

$pilot2 = new Unit("Титов", 100);


$ship1 = new Ship(1, 2, $pilot1);
$ship2 = new Ship(2, 3, $pilot2);

$ship3 = $ship1;

$ship1->toFuel($ship2);

