<?php
namespace av;
class Square extends Linear implements \core\EquationInterface {
	private $discr;

	protected function discriminant($a,$b,$c){
		return (($b*$b) - (4 * $a * $c));
	}

	public function solve($a,$b,$c)
	{
		if($a === 0)
        {
			return array($this->llinear($b,$c));
		}
		else
		{
			$discr = $this->discriminant($a,$b,$c);
			if ($discr < 0)
			{
				$this->x = false;
				throw new Exception('Discriminant < 0 \n');
			}
			elseif ($discr > 0)
			{
				MyLog::log("Eto kvadratnoe uravneniya");
				$t1=((-$b + sqrt($discr)) / (2 * $a));
				$t2=((-$b - sqrt($discr)) / (2 * $a));
				return $this->x= array($t1,$t2);
			}
		
			else
			{
				return $this->x = array((-$b/2*$a));
			}
		}		
	}
}
?>