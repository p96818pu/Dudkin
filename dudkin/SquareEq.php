<?php

namespace dudkin;

use core\EquationInterface;

Class SquareEq extends LineEq implements EquationInterface {
    protected function dis ($a, $b, $c) {
        return $dis = ($b ** 2 ) - 4 * $a * $c;
	}
	public function solve ($a, $b, $c) {
		if($a == 0) {
		    return parent::solveLineEq($b, $c);
        }

		$dis = $this->dis($a, $b, $c);

		if($dis > 0) {
		    $squareDis = sqrt($dis);
		    return $this->x = array((-$b + $squareDis) / (2 * $a), (-$b - $squareDis) / (2 * $a));
        }
		if($dis == 0) {
		    return $this->x =  array(-$b / (2 * $a));
        }
		return null;
	}
}