<meta charset="UTF-8">
<title>Zadanie4</title>
<link rel="stylesheet" href="../../../../style.css">
<link rel="shortcut icon" href="../../../../icon.ico">

<?php
	for($i = 0 ; $i < $_POST['number'] ; $i++){
		echo (rand(1,10). " ");
	}
?>
<form action="main.html">
	<input type="submit" value="Wstecz" name="back">
</form>
