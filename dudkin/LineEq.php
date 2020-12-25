<?php

namespace dudkin;

Class LineEq {
	protected $x;
	
	public function solveLineEq ($a, $b) {
		if ($a == 0) {
		  return null;
		}
		return $this->x= array(-$b / $a);
	}
}