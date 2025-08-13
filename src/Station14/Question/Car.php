<?php

namespace Src\Station14\Question;

class Car extends Vehicle

{
    public const DOOR = 5;

    public static int $passenger = 0;

    public static function getPassengers(): void
    {
        echo self::$passenger;
    }

    public static function pickup(): void
    {
        self::$passenger++;
        self::getPassengers();
    }

    public static function getDoors(): void
    {
        echo self::DOOR;
    }
}