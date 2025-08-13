<?php

namespace Src\Station12\Question;

use Carbon\CarbonImmutable;

class Food extends Product
{
    protected CarbonImmutable $useByDate;

    public function __construct(int $originalPrice, CarbonImmutable $useByDate)
    {
        parent::__construct($originalPrice);
        $this->useByDate = $useByDate;
    }

    public function price(): int
    {
        $now = CarbonImmutable::now();

        $secondsUntilUseBy = $now->diffInSeconds($this->useByDate, false);

        if ($secondsUntilUseBy > 0 && $secondsUntilUseBy < 5 * 60 * 60) {
            return intdiv($this->originalPrice, 2);
        }

        return $this->originalPrice;
    }
}