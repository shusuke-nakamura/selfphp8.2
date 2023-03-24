<?php
class MyClass
{
    public static function square(float $width, float $heigh): float
    {
        return $width * $heigh;
    }
}

print MyClass::square(10, 5);
