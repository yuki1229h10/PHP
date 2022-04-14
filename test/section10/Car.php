<?php

abstract class Car
{
    protected static $price;
    public static function getFormattedPrice()
    {
        return number_format(self::$price);
    }
}
