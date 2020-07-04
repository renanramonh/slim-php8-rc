<?php


namespace App\Domain;


interface MultiplicationInterface
{
    public function multiply(int|float $a, int|float $b): int|float;
}
