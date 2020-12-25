<?php

use dudkin\LineEq;
use dudkin\SquareEq;

ini_set("display_errors", 1);
error_reporting(-1);

require_once('core\EquationInterface.php');
require_once('core\LogInterface.php');
require_once('core\LogAbstract.php');

require_once('dudkin\LineEq.php');
require_once('dudkin\SquareEq.php');

$lineEq = new LineEq();
$squareEq = new SquareEq();

var_dump($lineEq->solveLineEq(4, 2));
var_dump($squareEq->solve(5, 20, -25));