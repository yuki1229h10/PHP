<?php

class Person
{
  public function __destruct()
  {
    print '<p>' . __CLASS__ . 'オブジェクトが破棄されました。</p>';
  }

  public function show(): void
  {
    print "<p>僕の名前は{$this->lastName}{$this->firstName}</p>";
  }
}
