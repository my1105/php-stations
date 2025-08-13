<?php

namespace Src\Station14\Question;

class Vehicle
{
    protected int $maxSpeed;

    public function __construct(int $maxSpeed = 0)
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function run(): void
    {
        echo "アクセルを踏む\n";
    }

    public function stop(): void
    {
        echo "ブレーキを踏む\n";
    }
}