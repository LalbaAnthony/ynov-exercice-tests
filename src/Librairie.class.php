<?php

class Librairie
{
    const PRIX_PAR_TOME = 8.0; // Prix d'un tome
    const MAX_TOMES = 5; // Nombre maximum de tomes

    public static function amountSeries(int $nbTome1, int $nbTome2, int $nbTome3, int $nbTome4, int $nbTome5): float
    {
        // Vérification des valeurs d'entrée
        $tomes = [$nbTome1, $nbTome2, $nbTome3, $nbTome4, $nbTome5];

        foreach ($tomes as $nbTome) {
            if ($nbTome < 0 || $nbTome > self::MAX_TOMES) {
                throw new InvalidArgumentException("Nombre de tomes doit être entre 0 et " . self::MAX_TOMES);
            }
        }

        // Calcul du nombre total de tomes
        $totalTomes = array_sum($tomes);

        // Prix sans réduction
        $totalPrice = $totalTomes * self::PRIX_PAR_TOME;

        // Si aucun livre n'est acheté, retourner 0
        if ($totalTomes == 0) {
            return 0.0;
        }

        // Calcul des réductions
        $discounts = [];

        // Vérification des réductions selon le nombre total de tomes
        if ($totalTomes >= 2) {
            $discounts[] = $totalTomes * self::PRIX_PAR_TOME * 0.05; // 5% de réduction
        }
        if ($totalTomes >= 3) {
            $discounts[] = $totalTomes * self::PRIX_PAR_TOME * 0.10; // 10% de réduction
        }
        if ($totalTomes >= 4) {
            $discounts[] = $totalTomes * self::PRIX_PAR_TOME * 0.20; // 20% de réduction
        }
        if ($totalTomes >= 5) {
            $discounts[] = $totalTomes * self::PRIX_PAR_TOME * 0.25; // 25% de réduction
        }

        // Calcul des réductions cumulées par rapport aux tomes différents
        $uniqueTomesCount = count(array_filter($tomes));
        if ($uniqueTomesCount >= 2) {
            $discounts[] = ($nbTome1 + $nbTome2) * self::PRIX_PAR_TOME * 0.05; // 5% sur 2 tomes
        }
        if ($uniqueTomesCount >= 3) {
            $discounts[] = ($nbTome1 + $nbTome2 + $nbTome3) * self::PRIX_PAR_TOME * 0.10; // 10% sur 3 tomes
        }

        // Trouver la meilleure réduction
        $maxDiscount = max($discounts);
        $finalPrice = $totalPrice - $maxDiscount;

        return round($finalPrice, 2); // Arrondi à 2 décimales
    }
}
