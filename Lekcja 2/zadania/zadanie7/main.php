<meta charset="UTF-8">
<title>Zadanie7</title>
<link rel="shortcut icon" href="/../../icon.ico">
<link rel="stylesheet" href="/../../style.css">

<form action="main.php" method="POST" >
	<?php
	function showTable($arr){
		echo '<table border = "1" cellpadding = "25" cellspacing = "0">';
		for($i = 0 ; $i < 3 ; $i++){
			for($j = 0 ; $j < 3 ; $j++){
				echo "<td>";
				if($arr[$i][$j] == 0){
					echo "  ";
				}
				else{
					echo $arr[$i][$j];
				}
				echo "</td>";
			}
			echo "<tr>";
			echo "</tr>";
		}
		return true;
	}
	//while(true){
	$check = false;
	$xRound = true;
	if($check == false){
		for($i = 0 ; $i < 3 ; $i++){
			for($j = 0 ; $j < 3 ; $j++){
				$arr[$i][$j] = 0;
			}
		}
	}
	if($xRound == true){
		$arr[$_POST['numberx']-1][$_POST['numbery']-1] = "X";
		$xRound = false;
	}
	else if($xRound == false){
		$arr[$_POST['numberx']-1][$_POST['numbery']-1] = "Y";
		$xRound = true;
	}
	$check = showTable($arr);
	echo '<input type="number" name="numberx" placeholder="Wprować liczbę X" required/> <br>';
	echo '<input type="number" name="numbery" placeholder="Wprować liczbę Y" required/> <br>';
	echo '<input type="submit" value="Wyślij" name="buttonMenu"> <br>';
	//}
	?>
</form>
<input type="button" onClick="window.location.href='/../index.html'" value="Wstecz" name="buttonMenu">