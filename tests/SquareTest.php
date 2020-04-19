<?php
use PHPUnit\Framework\TestCase;
use av\Square;
use av\Exception;

class SquareTest extends TestCase 
{

	
	public function testSolve()
	{
	      $my = new Square();
	      $this->assertSame(array(6.0,2.0), $my->solve(1, -8, 12));
	      $this->assertSame(array(3), $my->solve(1, -6, 9));
	      $this->assertSame(array(-6), $my->solve(1, 12, 36));
	}
	
	public function testFailingSolve()
        {
        	$this->expectException(Exception::class);
		$my = new Square();
	        $my->solve(5, 1, 1);
        }
}
