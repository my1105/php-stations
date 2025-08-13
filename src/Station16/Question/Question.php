<?php

namespace Src\Station16\Question;

class Question
{
    public function main(string $humanName, string $carName, int $passengers): void
    {
        $human = new Human($humanName);
        $car = new Car($carName);

        echo $human->buyCar($car);
        echo $car->run();
        echo $car->pickup($passengers);
    }
}