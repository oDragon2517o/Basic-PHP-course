<?php


class Ship
{
    public ?int $x;
    public ?int $y;
    public ?Unit $pilot;
    public ?array $passengers;
    public ?int $fuel;

    public function __construct(int $x = null, int $y = null, Unit $unit = null, int $fuel = 100)
    {
        $this->passengers[] = new Unit("Заец", 5);
        $this->x = $x;
        $this->y = $y;
        $this->pilot = $unit;
        $this->fuel = $fuel;
    }

    public function toFuel(Ship $ship)
    {
        $ship->fuel += 10;
        $this->fuel -= 10;
    }

    public function fly(): void
    {
        echo "Ship fly x=$this->x y=$this->y!" . PHP_EOL;
    }

    public function __toString()
    {
        return "Я корабль с пилотом " . $this->pilot->name . PHP_EOL;
    }


}
