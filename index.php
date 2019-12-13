<?php

namespace av;

ini_set('display_errors', 1);
error_reporting(-1);

include_once('AV/AVException.php');
include_once('core/EquationInterface.php');
include_once('core/LogAbstract.php');
include_once('core/LogInterface.php');
include_once('AV/Linear.php');
include_once('AV/Square.php');
include_once('AV/MyLog.php');


echo "Vvedite 3 parametra a, b, s \n";
$paramens = explode(" ", fgets(STDIN));

try {
	if (count($paramens) != 3) {
		throw new Exception("Vi vveli 3 chisla \n");
	}
	$a = (float)$paramens[0];
	$b = (float)$paramens[1];
	$c = (float)$paramens[2]; 
	
 	{
		MyLog::log("Kvadratnoe uravnenie: ".$a."x^2 + ".$b."x + ".$c." = 0");
		$square = new Square();
		if (is_array($temp = $square->solve($a, $b, $c))) {
			MyLog::log("Otvet : ". implode(" , ", $temp));
		 }
	else {
			MyLog::log("Otvet: ".$temp);
		 }
		
	}	
}
catch (Exception $e){
	MyLog::log($e->GetMessage());
}

MyLog::write()."\n";

?>