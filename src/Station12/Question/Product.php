<?php

namespace Src\Station12\Question;

class Product
{
    protected int $originalPrice;

    public function __construct(int $originalPrice)
    {
        $this->originalPrice = $originalPrice;
    }

    public function price(): int
    {
        return $this->originalPrice;
    }
}