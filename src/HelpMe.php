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

    public static function isJson(string $data): bool
    {
        if (!empty($data)) {
            return is_string($data) &&
                is_array(json_decode($data, true)) ? true : false;
        }
        return false;
    }
}
