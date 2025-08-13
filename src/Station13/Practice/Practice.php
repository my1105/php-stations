<?php

namespace Src\Station13\Practice;

require_once('vendor/autoload.php');

class Practice
{
    public function main(): void
    {
        $dog = new Dog();
        $dog->active(); 
    }
}

(new Practice)->main();