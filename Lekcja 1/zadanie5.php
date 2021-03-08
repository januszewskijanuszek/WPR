<?php
	function exe_tro(){
		$a = 1;
		$h = 2;
		return (a*h)/2;
	}
	function exe_tra(){
		$a = 1;
		$b = 2;
		$h = 3;
		return ($b+$a)/2*$h;
	}
	function exe_pro(){
		$a = 1;
		$b = 2;
		return $a*$b;
	}
	echo("Trójkąt 		-> 1<br>");
	echo("Prostokąt 	-> 2<br>");
	echo("Trapez 		-> 3<br>");
	$user_number = 2;
	switch($user_number){
		case 1: {
			echo(exe_tro());
			break;
		}
		case 2: {
			echo(exe_pro());
			break;
		}
		case 3: {
			echo(exe_tra());
			break;
		}
	}
?>