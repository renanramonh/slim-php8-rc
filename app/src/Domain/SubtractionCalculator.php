<?php


namespace App\Domain;


class SubtractionCalculator implements SubtractionInterface
{
    public function subtract(int|float $a, int|float $b): int|float
    {
        return $a - $b;
    }
}
