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
}
