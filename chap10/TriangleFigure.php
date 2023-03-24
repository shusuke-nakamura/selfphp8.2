<?php
class TriangleFigure
{
    private float $base;
    private float $heigh;

    public function __construct()
    {
        $this->setBase(1);
        $this->setHeight(1);
    }

    public function getBase(): float
    {
        return $this->base;
    }

    public function setBase(float $base): void
    {
        if ($base <= 0) {
            throw new Exception('baseは正数で指定します。');
        }
        $this->base = $base;
    }

    public function getHeight(): float
    {
        return $this->heigh;
    }

    public function setHeight(float $height): void
    {
        if ($height <= 0) {
            throw new Exception('heightは正数で指定します。');
        }
        $this->heigh = $height;
    }

    public function getArea(): float
    {
        return $this->getBase() * $this->getHeight() / 2;
    }
}
