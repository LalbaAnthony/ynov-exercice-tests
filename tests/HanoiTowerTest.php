<?php

use PHPUnit\Framework\TestCase;

include_once 'src/HanoiTower.class.php';

class HanoiTowerTest extends TestCase
{
    public function testHandoiTower()
    {   
        $hanoi = new HanoiTower(1, 3); // 1 pilier intermédiaire, 3 disques
        $hanoi->solve();
        $totalMoves = $hanoi->getTotalMoves();
        $this->assertEquals(7, $totalMoves);
    }
}
