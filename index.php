<?php

// Addition

include_once 'src/Addition.php';
echo 'Addition';
var_dump(addition(2, 3));
echo '<br><br><br>';

// HanoiTower

include_once 'src/HanoiTower.class.php';
echo 'HanoiTower';
$hanoi = new HanoiTower(1, 3); // 1 pilier intermédiaire, 3 disques
$hanoi->solve();
$moves = $hanoi->getMoves();
$totalMoves = $hanoi->getTotalMoves();
var_dump($moves);
var_dump($totalMoves);
echo '<br><br><br>';
