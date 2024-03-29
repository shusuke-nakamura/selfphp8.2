<?php

use MyChild as GlobalMyChild;
use MyParent as GlobalMyParent;

class MyParent
{
    public function hoge(): void
    {
        print 'MyParent!!';
    }
}

trait MyTrait
{
    public function hoge(): void
    {
        print 'MyTrait!!';
    }
}

class MyChild extends GlobalMyParent
{
    use MyTrait;

    public function hoge(): void
    {
        print 'MyChild!!';
    }
}

$cls = new GlobalMyChild();
$cls->hoge();
