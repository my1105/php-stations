<?php

namespace Src\Station17\Question;

class Question
{
    public function main(): void
    {
        $keyboard = new Keyboard();

        $piano = new PianoSound();
        $keyboard->play($piano, 'ド');

        $guitar = new GuitarSound();
        $keyboard->play($guitar, 'C');
    }
}