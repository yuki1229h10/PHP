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


class Super
{
  protected function protectedFunc()
  {
    echo "Protected\n";
  }
  private function privateFunc()
  {
    echo "Private\n";
  }
}

$super = new Super;
// $super->protectedFunc(); // error
// $super->privateFunc(); // error

class Sub extends Super
{
  public function publicFunc()
  {
    parent::protectedFunc();
  }
}

$sub = new Sub();
$sub->publicFunc();
