<?php

use PHPUnit\Framework\TestCase;

include_once 'src/Librairie.class.php';

class LibrairieTest extends TestCase
{
    public function testAmountSeries()
    {
        $this->assertEquals(0.0, Librairie::amountSeries(0, 0, 0, 0, 0));
        $this->assertEquals(8.0, Librairie::amountSeries(1, 0, 0, 0, 0));
        $this->assertEquals(15.2, Librairie::amountSeries(1, 1, 0, 0, 0));
        $this->assertEquals(21.6, Librairie::amountSeries(1, 1, 1, 0, 0));
        $this->assertEquals(25.6, Librairie::amountSeries(1, 1, 1, 1, 0));
        $this->assertEquals(30.0, Librairie::amountSeries(1, 1, 1, 1, 1));
        $this->assertEquals(23.2, Librairie::amountSeries(2, 0, 0, 0, 0));
        $this->assertEquals(30.4, Librairie::amountSeries(2, 1, 0, 0, 0));
        $this->assertEquals(36.8, Librairie::amountSeries(2, 1, 1, 0, 0));
        $this->assertEquals(41.6, Librairie::amountSeries(2, 1, 1, 1, 0));
        $this->assertEquals(48.0, Librairie::amountSeries(2, 1, 1, 1, 1));
        $this->assertEquals(30.4, Librairie::amountSeries(2, 2, 0, 0, 0));
        $this->assertEquals(38.4, Librairie::amountSeries(2, 2, 1, 0, 0));
        $this->assertEquals(44.8, Librairie::amountSeries(2, 2, 1, 1, 0));
        $this->assertEquals(51.2, Librairie::amountSeries(2, 2, 1, 1, 1));
        $this->assertEquals(44.8, Librairie::amountSeries(2, 2, 2, 0, 0));
        $this->assertEquals(51.2, Librairie::amountSeries(2, 2, 2, 1, 0));
        $this->assertEquals(57.6, Librairie::amountSeries(2, 2, 2, 1, 1));
    }
}
