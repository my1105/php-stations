<?php

namespace Src\Station15\Question;

class Calculator
{
     public function multiply(array $multiplieds, int $multiplier)
    {
        if (empty($multiplieds)) {
            return false;
        }

        return array_map(fn($n) => $n * $multiplier, $multiplieds);
    }
    
}