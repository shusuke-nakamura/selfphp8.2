<?php
trait MachineTrait
{
    private string $starting = 'starting...Run!';

    public function run(): void
    {
        print $this->starting;
    }
}
