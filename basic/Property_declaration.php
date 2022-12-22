<?php

use MyClass as GlobalMyClass;

class MyClass
{
  public $public = 'Public';
  protected $protected = 'Protected';
  private $private = 'Private';

  function printHello()
  {
    echo $this->public;
    echo $this->protected;
    echo $this->private;
  }
}

$obj = new MyClass();
echo $obj->public;
// echo $obj->protected;
// echo $obj->private;
$obj->printHello();


class MyClass2 extends MyClass
{
  public $public = 'Public2';
  protected $protected = 'Protected2';

  function printHello()
  {
    echo $this->public;
    echo $this->protected;
    echo $this->private;
  }
}

$obj2 = new MyClass2();
echo $obj2->public;
// echo $obj2->protected;
// echo $obj2->private;
$obj2->printHello();
