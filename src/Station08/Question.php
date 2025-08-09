<?php

namespace Src\Station08;

class Question
{
    public function main(): array
    {
        $array = [
            [0 => 'アザラシ', 1 => 'アライグマ'],
            [0 => 'ウサギ', 1 => 'ウシ', 2 => 'ウマ'],
            [0 => 'オオカミ', 1 => 'オットセイ']
        ];

        $array[1] = [
            0 => 'イヌ',
            1 => 'イルカ'
        ];
        $array[2] = [
            0 => 'ウサギ',
            1 => 'ウシ',
            2 => 'ウマ'
        ];

        return $array;
    }
}