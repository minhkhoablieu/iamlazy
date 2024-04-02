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

    /**
     * Checks if a given number is a prime number.
     * A prime number is a natural number greater than 1 that has no positive divisors other than 1 and itself.
     * https://www.geeksforgeeks.org/php-check-number-prime/
     * 
     * @param int $number The number to check for primality.
     * @return bool Returns true if the number is prime, false otherwise.
     */
    public static function isPrime(int $number): bool
    {
        if ($number <= 1)
        return false;
        for ($i = 2; $i <= $number/2; $i++){
            if ($number % $i === 0)
                return false;
        }
        return true;
    }
}
