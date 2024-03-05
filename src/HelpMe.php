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

    /**
     * Checks if a string represents valid JSON.
     * https://www.geeksforgeeks.org/how-to-validate-json-in-php/
     *
     * @param string $string The input string to check.
     * @return bool Returns true if the string is valid JSON, false otherwise.
     */
    public static function isJson(string $data): bool
    {
        if (!empty($data)) {
            return is_string($data) &&
                is_array(json_decode($data, true)) ? true : false;
        }
        return false;
    }

    /**
     * Flattens a multidimensional array.
     * https://stackoverflow.com/a/1320156/11285290
     * 
     * @param array $array The input array.
     * @return array The flattened array.
     */
    public static function flatten(array $array): array
    {
        $result = array();
        array_walk_recursive($array, function ($a) use (&$result) {
            $result[] = $a;
        });
        return $result;
    }
}
