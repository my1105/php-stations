<?php

namespace Src\Station03;

class Question
{
    public function main(mixed $arg): string
    {
        if ($arg === 1 && is_int($arg)) {
            return 'りんご';
        }

        if (($arg === 2 || $arg === 3) && is_int($arg)) {
            return 'みかん';
        }

        return 'さくらんぼ';
    }
}