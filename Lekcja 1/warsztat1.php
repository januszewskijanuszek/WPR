<?php
//Text
echo ("<br>");
echo("strona testowa Warsztat 1");
echo ("<br>");
//Podstawowe wartści
$dlugosc = 123;
$koniec = 200;
var_dump($dlugosc);
echo ("<br>");
//if
if($dlugosc > $koniec){
	echo ("zmienna dlugosc jest wieksza od $koniec");
}
else{
	echo ("zmienna dlugosc jest jednak mniejsza od $koniec");
}
//Pentle
$zmienna_pentli_while = 0;
while($zmienna_pentli_while < 10){
	echo("<br>");
	echo("$zmienna_pentli_while");
	$zmienna_pentli_while++;
}
for($zmienna_pentli_for = 0; $zmienna_pentli_for < 10; $zmienna_pentli_for++){
	echo("<br>");
	echo ("$zmienna_pentli_for");
}
$tablica = [13 ,14 ,15];
foreach($tablica as $temp){
	echo("<br>");
	echo("$temp");
}
?>