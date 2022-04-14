<?php
// class TriangleFigure
// {
//     public float $base;
//     public float $height;

//     public function __construct()
//     {
//         $this->base = 1;
//         $this->height = 1;
//     }

//     public function getArea(): float
//     {
//         return $this->base * $this->height / 2;
//     }
// }

class TriangleFigure
{
    private float $base;
    private float $height;

    public function __construct()
    {
        $this->setBase(1);
        $this->setHeight(1);
    }

    public function getBase(): float
    {
        return $this->base;
    }

    public function setBase(float $base): void
    {
        if ($base <= 0) {
            throw new Exception('baseは正数で指定します。');
        }
        $this->base = $base;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setHeight(float $height): void
    {
        if ($height <= 0) {
            throw new Exception('heightは正数で指定します。');
        }
        $this->height = $height;
    }

    public function getArea(): float
    {
        return $this->getBase() * $this->getHeight() / 2;
    }
}
