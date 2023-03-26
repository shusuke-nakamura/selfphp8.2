<?php

use MyClass as GlobalMyClass;

interface Runnable
{
    function run();
}

class MyClass
{
    public function __construct()
    {
    }
    public function execute(Runnable $rc): void
    {
        print 'start...';
        $rc->run();
        print 'end...';
    }
}

$cls = new GlobalMyClass();
$cls->execute(new class implements Runnable
{
    public function run(): void
    {
        print 'process...';
    }
});
