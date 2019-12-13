<?php
namespace av;

class Linear {
	private $x;
	public function llinear($a,$b){
		if ($a == 0){
			throw new Exception('Ne sushchestvuet');
		} else {
			MyLog::log("linejnoe uravneniya");
			$this->x = (-$b/$a);
			return $this->x;
		}
	}
}

?>