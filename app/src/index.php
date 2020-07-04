<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Domain\Calculator;
use App\Domain\DivisionCalculator;
use App\Domain\MultiplicationCalculator;
use App\Domain\SubtractionCalculator;
use App\Domain\SumCalculator;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$sumCalculator = new SumCalculator();
$multiplicationCalculator = new MultiplicationCalculator();
$subtractionCalculator = new SubtractionCalculator();
$divisionCalculator = new DivisionCalculator();
$calculator = new Calculator(
    $sumCalculator,
    $multiplicationCalculator,
    $subtractionCalculator,
    $divisionCalculator,
);

$app = AppFactory::create();

$app->get('/calculate/{a}/{b}',
    function (Request $request, Response $response, $args) use ($calculator) {
        $a = (int)$args['a'];
        $b = (float)$args['b'];
        $response->getBody()->write(
            json_encode([
                'sum' => $calculator->sum($a, $b),
                'multiplication' => $calculator->multiply($a, $b),
                'subtraction' => $calculator->subtract($a, $b),
                'division' => $calculator->divide($a, $b),
            ], true));
        $response->withHeader('Content-type', 'application/json');

        return $response;
    });

$app->run();
