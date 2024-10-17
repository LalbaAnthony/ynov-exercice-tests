<?php

use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    // Test basique pour vérifier si la fonction addition fonctionne correctement
    public function testAddition()
    {
        $expected = 5;
        $result = addition(2, 3);
        $this->assertEquals($expected, $result);
    }
}
