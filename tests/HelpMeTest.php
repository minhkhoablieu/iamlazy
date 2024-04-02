<?php

use PHPUnit\Framework\TestCase;
use iAmLazy\HelpMe;

class HelpMeTest extends TestCase
{
    public function testIsOdd()
    {
        // Test for odd number
        $this->assertTrue(HelpMe::isOdd(5));
        // Test for even number
        $this->assertFalse(HelpMe::isOdd(8));
    }

    public function testIsEven()
    {
        // Test for even number
        $this->assertTrue(HelpMe::isEven(4));
        // Test for odd number
        $this->assertFalse(HelpMe::isEven(7));
    }

    public function testIsJson()
    {

        // Test is Json
        $json = '{"name":"abc", "email": "abc@gmail.com"}';
        $this->assertTrue(HelpMe::isJson($json));

        // Test not Json
        $notJson = '{name:abc, email: abc@gmail.com}';
        $this->assertFalse(HelpMe::isJson($notJson));

        // Test empty string
        $this->assertFalse(HelpMe::isJson(""));
    }

    public function testFlatten()
    {
        $originalArray = [
            'foo',
            ['nobody', 'expects', ['another', 'level']],
            42,
            ['deep', 'down', ['the', 'rabbit', 'hole']]
        ];

        $expectedResult = [
            'foo',
            'nobody', 'expects', 'another', 'level',
            42,
            'deep', 'down', 'the', 'rabbit', 'hole'
        ];

        $flattenedArray = HelpMe::flatten($originalArray);

        $this->assertEquals($expectedResult, $flattenedArray);
    }

    public function testIsPrime()
    {
        // Test is prime
        $this->assertTrue(HelpMe::isPrime(2));
        $this->assertTrue(HelpMe::isPrime(7));
        $this->assertTrue(HelpMe::isPrime(11));

        // Test not prime
        $this->assertFalse(HelpMe::isPrime(4));
        $this->assertFalse(HelpMe::isPrime(6));
        $this->assertFalse(HelpMe::isPrime(8));
        $this->assertFalse(HelpMe::isPrime(0));
    }
}
