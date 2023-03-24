<?php
class TriangleFigure
{
    public float $base;
    public float $heigh;

    public function __construct()
    {
        $this->base = 1;
        $this->heigh = 1;
    }

    public function getArea(): float
    {
        return $this->base * $this->heigh / 2;
    }
}
