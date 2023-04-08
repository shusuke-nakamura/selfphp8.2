<?php

use MyClass as GlobalMyClass;

class MyClass
{
    public function __get($name)
    {
        print "{$name}プロパティは存在しません。";
    }
}

$cls = new GlobalMyClass();
$str = $cls->nothing;
