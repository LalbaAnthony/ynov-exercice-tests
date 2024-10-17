<?php

use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    // Test basique pour vérifier si la fonction addition fonctionne correctement
    public function testAddition()
    {
        $result = addition(2, 3);
        $this->assertEquals(5, $result);
    }
}
