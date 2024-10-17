<?php

class HanoiTower
{
    private $intermediatePillars;
    private $numDisks;
    private $moves;
    private $totalMoves;

    public function __construct($intermediatePillars, $numDisks)
    {
        $this->intermediatePillars = $intermediatePillars;
        $this->numDisks = $numDisks;
        $this->moves = [];
        $this->totalMoves = 0;
    }

    public function solve()
    {
        $start = 'A';
        $end = 'C';

        $intermediates = [];
        for ($i = 0; $i < $this->intermediatePillars; $i++) {
            $intermediates[] = chr(66 + $i);
        }

        $this->moveDisks($this->numDisks, $start, $end, $intermediates);
    }

    private function moveDisks($n, $start, $end, $intermediates)
    {
        if ($n == 1) {
            $this->addMove($start, $end, 1);
            return;
        }

        if (!empty($intermediates)) {
            $newIntermediates = $intermediates;
            $temp = array_shift($newIntermediates);

            $this->moveDisks($n - 1, $start, $temp, $newIntermediates);
            $this->addMove($start, $end, $n);
            $this->moveDisks($n - 1, $temp, $end, $newIntermediates);
        } else {
            $this->moveDisks($n - 1, $start, 'B', []);
            $this->addMove($start, $end, $n);
            $this->moveDisks($n - 1, 'B', $end, []);
        }
    }

    private function addMove($from, $to, $disk)
    {
        $this->moves[] = "Déplacer le disque $disk du pilier $from vers le pilier $to";
        $this->totalMoves++;
    }

    public function getMoves()
    {
        return $this->moves;
    }

    public function getTotalMoves()
    {
        return $this->totalMoves;
    }
}
