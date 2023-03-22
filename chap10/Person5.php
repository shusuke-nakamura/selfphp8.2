<?php
class Person
{
    public string $firstName;
    public string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __destruct()
    {
        print '<p>' . __CLASS__ . 'オブジェクトが破棄されました。';
    }

    public function show(): void
    {
        print "ボクの名前は{$this->lastName}{$this->firstName}です。";
    }
}
