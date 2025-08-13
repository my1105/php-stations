<?php

namespace Src\Station13\Question;

class Vehicle
{

    protected int $maxSpeed;
    protected string $name;
    
    public function __construct(int $maxSpeed = 0)
    {
        $this->maxSpeed = $maxSpeed;
        
    }

    public function run(): void
    {
        echo "アクセルを踏む";
    }

    private function stop(): void
    {
        echo "ブレーキを踏む";
    }

    private function right(): void
    {
        echo "右にハンドルを回す";
    }

    private function left(): void
    {
        echo "左にハンドルを回す";
    }

    public function back(): void
    {
        echo "バックする";
    }

    public function turnRight():void
    {
        $this->stop();
        $this->right();
        $this->run();
    }

    public function backleft():void
    {
        $this->stop();
        $this->left();
        $this->back();
    }

}