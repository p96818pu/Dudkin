<?php

use dudkin\DudkinException;
use dudkin\MyLog;
use dudkin\SquareEq;

ini_set("display_errors", 1);
error_reporting(-1);

require_once('core\EquationInterface.php');
require_once('core\LogInterface.php');
require_once('core\LogAbstract.php');

require_once('dudkin\LineEq.php');
require_once('dudkin\SquareEq.php');
require_once('dudkin\MyLog.php');
require_once('dudkin\DudkinException.php');

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