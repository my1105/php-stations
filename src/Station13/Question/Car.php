<?php

namespace Src\Station13\Question;

class Car extends Vehicle
{
    public function __construct()
    {
        parent::__construct(0,'Car');
    }


    public function hazard():void
    {
        echo "ハザードランプを点灯する";
    }

     public function run(): void
     {
        $this->maxSpeed = 60;
        parent::run();
     }

      public function back(): void
    {
        $this->hazard();
        parent::back();
    }
}