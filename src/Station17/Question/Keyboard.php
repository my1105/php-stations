<?php

namespace Src\Station17\Question;

class Keyboard
{
    public function play(SoundInterface $instrument, string $scale): void
    {
        if (!$instrument->isValidatedInput($scale)) {
            echo "この音を鳴らすことはできません";
            return;
        }

        echo $instrument->sound($scale) . 'を鳴らします';
    }
}