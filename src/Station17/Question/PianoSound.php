<?php

namespace Src\Station17\Question;

class PianoSound implements SoundInterface
{
    private const INSTRUMENT_NAME = 'ピアノ';

    public function isValidatedInput(string $scale): bool
    {
        return in_array($scale, ['ド', 'レ', 'ミ', 'ファ', 'ソ', 'ラ', 'シ'], true);
    }

    public function sound(string $scale): string
    {
        return self::INSTRUMENT_NAME . 'の' . $scale;
    }
}