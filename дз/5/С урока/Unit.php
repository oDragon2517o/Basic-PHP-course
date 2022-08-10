<?php

class Unit
{
    public string $name;
    private int $hp;
    static public int $salary = 100;

    public function __construct(string $name, int $hp)
    {
        $this->name = $name;
        $this->hp = $hp;
        static::$salary = 100;
    }

    static public function add($x, $y)
    {
        return $x + $y;
    }

    public function getHp(): int
    {
        return $this->hp;
    }


    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }


}