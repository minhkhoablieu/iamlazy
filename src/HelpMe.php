<?php

namespace iAmLazy;

class HelpMe
{
    public static function isOdd(float $number): bool
    {
        return !self::isEven($number);
    }

    public static function isEven(float $number): bool
    {
        return $number % 2 === 0;
    }
}
