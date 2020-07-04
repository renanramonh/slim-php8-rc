<?php


namespace App\Domain;


class DivisionCalculator implements DivisionInterface
{
    public function divide(int|float $a, int|float $b): int|float
    {
        return $a / $b;
    }
}
