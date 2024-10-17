<?php

use PHPUnit\Framework\TestCase;

include_once 'src/Addition.php';

class AdditionTest extends TestCase
{
    public function testAddition()
    {
        $expected = 5;
        $result = addition(2, 3);
        $this->assertEquals($expected, $result);
    }
}
