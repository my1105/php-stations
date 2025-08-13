<?php

namespace Src\Station12\Question;

use Carbon\CarbonImmutable;

class Question
{
    public function main(int $originalPrice, CarbonImmutable $useByDate, ?CarbonImmutable $now = null): int
    {
        $food = new Food($originalPrice, $useByDate);
        return $food->price($now);
    }
}