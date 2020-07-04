<?php


namespace App\Domain;


interface DivisionInterface
{
    public function divide(int|float $a, int|float $b): int|float;
}
