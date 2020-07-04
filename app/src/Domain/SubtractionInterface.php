<?php


namespace App\Domain;


interface SubtractionInterface
{
    public function subtract(int|float $a, int|float $b): int|float;
}
