<?php
	
	class StException extends RuntimeException
	{
	}
	/**
	 * 
	 */
	class B 
	{
	    protected $x;
		function solve($a,$b,$c)
		{
			//aX+b=0
			//x=-b/a
			try 
			{
				if ($a==0) 
				{
					throw new StException("Equation does not exist", 1);
				}
				else
				{
				    $x=(-1*$b)/$a;
				}
			} catch (StException $e) {
				$x=$e;
			}
			$this->x=$x;
			return $x;
		}
	}

	/**
	 * 
	 */
	class A extends B
	{
		protected function discr($a,$b,$c)
		{
			//D=b^2-4ac
			$discr=pow($b,2)-4*$a*$c;
			try {
				if ($discr<0) 
				{
					throw new StException("Discriminant less than zero", 1);
				}
			} catch (StException $e) {
				$discr=$e;
			}
			return $discr;
		}

		function solve($a,$b,$c)
		{
			//aX^2+bx+c=0
			//x=-b+-sqrt($discr)/2a
			$discr=$this->discr($a,$b,$c);
			if (is_object($discr)==true){
			    return $discr;
			}
			else if ($a==0) {
			    //$a=0;
				$x[]=parent::solve($b,$c,$a);
			}
			else if ($discr == 0) 
			{
				$x[]=($b*-1)/(2*$a);
			}
			else
			{
				$x[]=(($b*-1)+sqrt($discr))/(2*$a);
				$x[]=(($b*-1)-sqrt($discr))/(2*$a);
			}
			$this->x=$x;
			return $x;
		}
	}
$a1=new A();

print_r ($a1->solve(2,6,1));
print_r ($a1->solve(0,6,2));
print_r ($a1->solve(1,2,1));
print_r ($a1->solve(6,1,6));
print_r ($a1->solve(0,0,6));