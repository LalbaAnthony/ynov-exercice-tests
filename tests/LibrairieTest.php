<?php

use PHPUnit\Framework\TestCase;

include_once 'src/Librairie.class.php';

class LibrairieTest extends TestCase
{
    public function testAmountSeries0()
    {
        $this->assertEquals(0, Librairie::amountSeries(0, 0, 0, 0, 0));
    }

    public function testAmountSeries1()
    {
        $this->assertEquals(0, Librairie::amountSeries(0, 0, 0, 0, 0));
        $this->assertEquals(8, Librairie::amountSeries(1, 0, 0, 0, 0));
    }

    public function testAmountSeries2()
    {
        $this->assertEquals(16, Librairie::amountSeries(2, 0, 0, 0, 0));
        $this->assertEquals(16 * 0.95, Librairie::amountSeries(0, 0, 0, 1, 1));
    }

    public function testAmountSeries3()
    {
        $this->assertEquals(24, Librairie::amountSeries(3, 0, 0, 0, 0));
        $this->assertEquals(8 + 16 * 0.95, Librairie::amountSeries(2, 1, 0, 0, 0));
        $this->assertEquals(24 * 0.9, Librairie::amountSeries(1, 0, 1, 0, 1));
    }

    public function testAmountSeriesException()
    {
        // Should throw an exception if the number of tomes is > 5
        $this->expectException(InvalidArgumentException::class);
        Librairie::amountSeries(1, 1, 1, 1, 6);
    }

    public function testAmountSeriesException2()
    {
        // Should throw an exception if the number of tomes is < 0
        $this->expectException(InvalidArgumentException::class);
        Librairie::amountSeries(1, 1, 1, 1, -1);
    }
}
