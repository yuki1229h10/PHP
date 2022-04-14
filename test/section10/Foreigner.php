<?php
require_once '../section10/Person4.php';

class Foreigner extends Person
{
    public string $middleName;

    public function __construct(string $firstName, string $middleName, string $lastName)
    {
        parent::__construct($firstName, $lastName);
        $this->middleName = $middleName;
    }

    public function show(): void
    {
        print "<p>僕の名前は{$this->firstName}.{$this->middleName}.{$this->lastName}</p>";
    }
}
