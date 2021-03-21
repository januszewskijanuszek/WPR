<head>
<meta charset="UTF-8">
<title>Zadanie5</title>
<link rel="stylesheet" href="/../../style.css">
<link rel="shortcut icon" href="/../../icon.ico">
</head>

<?php
	$x = $_POST['numberx'];
	$y = $_POST['numbery'];
	echo '<table border = "1" cellpadding = "20" cellspacing = "0">';
	for($i = 1 ; $i <= $x ; $i++){
		for($j = 1 ; $j <= $y ; $j++){
			$arr[$i - 1][$j - 1] = ($i*$j);
		}
	}
	for($i = 0 ; $i < $x ; $i++){
		for($j = 0 ; $j < $y ; $j++){
			echo "<td>".$arr[$i][$j]."</td>";
		}
		echo "<tr>";
		echo "</tr>";
	}
?>
<input type="button" onClick="window.location.href='main.html'" value="Wstecz" name="buttonMenu">