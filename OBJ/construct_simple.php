<?php

use Person as GlobalPerson;

class Person
{
  public function __construct(
    public string $firstName = 'Hao',
    public string $lastName = 'Asakura'
  ) {
  }
}

$p = new Person();
