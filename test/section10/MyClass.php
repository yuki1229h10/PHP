<?php

// class MyClass
// {
//     public static $width;
//     public static $height;

//     public static function square(float $width, float $height): float
//     {
//         return $width * $height / 2;
//     }
// }

// class MyClass
// {
//     public static function square(float $width, float $height): float
//     {
//         return $width * $height;
//     }
// }
// print MyClass::square(10, 5);

class MyClass
{
    public string $pub = 'public';
    protected string $pro = 'protected';
    private string $pri = 'private';

    public function showProperty(): void
    {
        foreach ($this as $key => $value) {
            print "{$key}:{$value}<br />";
        }
    }
}
