<?php
class Area
{
    public const PI = 3.14;

    public static function circle(float $radius)
    {
        return pow($radius, 2) * self::PI;
    }
}
