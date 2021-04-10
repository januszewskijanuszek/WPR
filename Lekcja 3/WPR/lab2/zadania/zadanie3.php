<meta charset="UTF-8">
<title>Zadanie3</title>
<link rel="stylesheet" href="../../../style.css">
<link rel="shortcut icon" href="../../../icon.ico">

<?php
	function showArray($arr){
		foreach($arr as $value){
			echo ($value. " ");
		}
		echo "<br>";
	}
	function sortFor($arr){
		for($i = 0 ; $i < sizeof($arr) ; $i++){
			for($j = 0 ; $j < sizeof($arr) - 1 ; $j++){
				if($arr[$j] < $arr[$j+1]){
					$buff = $arr[$j];
					$arr[$j] = $arr[$j+1];
					$arr[$j+1] = $buff;
				}
			}
		}
		echo $arr[0]. "<br>";
	}
	function sortWhile($arr){
		$i = 0;
		while($i < sizeof($arr)){
			$j = 0;
			while($j < sizeof($arr)-1){
				if($arr[$j] < $arr[$j+1]){
					$buff = $arr[$j];
					$arr[$j] = $arr[$j+1];
					$arr[$j+1] = $buff;
				}
				$j++;
			}
			$i++;
		}
		echo $arr[0]. "<br>";
	}
	function sortDoWhile($arr){
		$i = 0;
		do{
			$j = 0;
			do{
				if($arr[$j] < $arr[$j+1]){
					$buff = $arr[$j];
					$arr[$j] = $arr[$j+1];
					$arr[$j+1] = $buff;
				}
				$j++;
			}while($j < sizeof($arr)-1);
			$i++;
		}while($i < sizeof($arr));
		echo $arr[0]. "<br>";
	}
	function sortForEach($arr){
		foreach($arr as $value){
			for($j = 0 ; $j < sizeof($arr) - 1 ; $j++){
				if($arr[$j] < $arr[$j+1]){
					$buff = $arr[$j];
					$arr[$j] = $arr[$j+1];
					$arr[$j+1] = $buff;
				}
			}
		}
		echo $arr[0]. "<br>";
	}
	for($i = 0 ; $i < rand(2, 10) ; $i++){
		$arr[$i] = rand(1, 20);
	}
	showArray($arr);
	sortFor($arr);
	sortWhile($arr);
	sortDoWhile($arr);
	sortForEach($arr);
?>
<body>
<form action="zadanie3.php">
	<input type="submit" value="Odświerz" name="buttonMenu">
</form>
<input type="button" onClick="window.location.href='../lab2.html'" value="Wstecz" name="buttonMenu">
</body>