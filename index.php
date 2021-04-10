<?php

use dudkin\DudkinException;
use dudkin\MyLog;
use dudkin\SquareEq;

ini_set("display_errors", 1);
error_reporting(-1);

require_once __DIR__ . './vendor/autoload.php';


try {
    $fileOpen = fopen("version", "r");
    MyLog::log("Version program: " . fgets($fileOpen));
    fclose($fileOpen);

    echo "Enter 3 parameters: a, b, c \n\r";

    $a = (float)readline();
    $b = (float)readline();
    $c = (float)readline();

    MyLog::log("The equation is introduced:" . " $a*x^2 + $b*x + $c = 0");

    $squareEq = new SquareEq();
    $result = $squareEq->solve($a, $b, $c);

    MyLog::log('Equation roots: ' . implode('; ', $result));
} catch (DudkinException $e) {
    MyLog::log($e->getMessage());
}
MyLog::write();