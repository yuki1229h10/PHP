<?php

class Person
{
  public string $firstName;
  public string $lastName;

  public function show(): void
  {
    print "<p>{$this->lastName}{$this->firstName}</p>";
  }
}
