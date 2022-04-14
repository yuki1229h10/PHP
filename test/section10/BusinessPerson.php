<?php
require_once 'test/section10/Person1.php';

class BusinessPerson extends Person
{
    public function work(): void
    {
        print "<p>{$this->lastName}{$this->firstName}</p>";
    }
}
