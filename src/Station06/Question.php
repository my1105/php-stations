<?php

namespace Src\Station06;

class Question
{
    public function main(): array
    {
        $array = ['red', 'blue', 'yellow'];

        $key = array_search('yellow', $array);
        if ($key !== false) {
            unset($array[$key]);
        }

        array_splice($array, 0, 0, ['white', 'black']);

        $indexRed = array_search('red', $array);
        $indexBlue = array_search('blue', $array);
        if ($indexRed !== false && $indexBlue !== false && $indexBlue === $indexRed + 1) {
            array_splice($array, $indexBlue, 0, ['green']);
        }

        return array_values($array);
    }
}