<?php

namespace Src\Station15\Question;

class Question
{
    public function main(array $multiplieds, int $multiplier): array|false
    {
        $calculator = new Calculator();
        return $calculator->multiply($multiplieds, $multiplier);
    }
}