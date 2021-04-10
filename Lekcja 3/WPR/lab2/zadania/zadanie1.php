<meta charset="UTF-8">
<title>Zadanie1</title>
<link rel="stylesheet" href="../../../style.css">
<link rel="shortcut icon" href="../../../icon.ico">

<?php
	for($i = 0 ; $i < 7 ; $i++){
		$arr[$i] = rand(1, 15);
		echo ($arr[$i]."<br>");
	}
?>
<body>
<form action="zadanie1.php">
	<input type="submit" value="Odświerz" name="buttonMenu">
</form>
<input type="button" onClick="window.location.href='../lab2.html'" value="Wstecz" name="buttonMenu">
</body>