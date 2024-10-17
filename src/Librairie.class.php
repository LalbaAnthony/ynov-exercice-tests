<?php
class Librairie
{
    const PRIX_PAR_TOME = 8.0;
    const MAX_TOMES = 5;

    public static function amountSeries(int $nbTome1, int $nbTome2, int $nbTome3, int $nbTome4, int $nbTome5): float
    {
        $tomes = [$nbTome1, $nbTome2, $nbTome3, $nbTome4, $nbTome5];
        foreach ($tomes as $nbTome) {
            if ($nbTome < 0 || $nbTome > self::MAX_TOMES) {
                throw new InvalidArgumentException("Nombre de tomes doit être entre 0 et " . self::MAX_TOMES);
            }
        }

        $totalTomes = array_sum($tomes);

        $totalPrice = $totalTomes * self::PRIX_PAR_TOME;

        if ($totalTomes == 0) {
            return 0.0;
        }

        $maxDiscount = 0;
        if ($totalTomes == 2) {
            $maxDiscount = 0.05;
        } elseif ($totalTomes == 3) {
            $maxDiscount = 0.10;
        } elseif ($totalTomes == 4) {
            $maxDiscount = 0.20;
        } elseif ($totalTomes == 5) {
            $maxDiscount = 0.25;
        }

        if ($totalTomes > 2) {
            $discountForTwo = ($nbTome1 > 0 && $nbTome2 > 0) ? 0.05 : 0;
            $discountForThree = ($nbTome1 > 0 && $nbTome2 > 0 && $nbTome3 > 0) ? 0.10 : 0;

            if ($discountForTwo > $maxDiscount) {
                $maxDiscount = $discountForTwo;
            }
            if ($discountForThree > $maxDiscount) {
                $maxDiscount = $discountForThree;
            }
        }

        $finalPrice = $totalPrice * (1 - $maxDiscount);
        return round($finalPrice, 2);
    }
}
