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
        print '<h1>' . __CLASS__ . 'オブジェクトが破壊されました。</h1>';
    }

    public function show()
    {
        "<p>{$this->lastName}{$this->firstName}</p>";
    }
}
