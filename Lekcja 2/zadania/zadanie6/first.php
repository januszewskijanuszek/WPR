<head>
<meta charset="UTF-8">
<title>Zadanie6</title>
<link rel="shortcut icon" href="/../../icon.ico">
<link rel="stylesheet" href="/../../style.css">
</head>

<?php
	$input = $_POST['number']; 
	$counter = 0;
	$points = 0;
	$check = false;
	for($i = 2 ; $i < $input/2 ; $i++){
		if($input % $i == 0){
			echo "Nie jest liczbą pierwszą! Liczba iteracji to: ". $counter;
			$check = true;
			break;
		}
		$counter++;
	}
	if($check == false){
		echo "Jest liczbą piwrwszą! Liczba iteracji to: ". $counter;
	}
?>