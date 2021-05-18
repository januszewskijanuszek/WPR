<?php
$numberCounter = 1;
if(!isset($_COOKIE['counter'])){
    setcookie('counter', $numberCounter);
}else{
    $numberCounter = $_COOKIE['counter'];
    $numberCounter++;
    setcookie('counter', $numberCounter);
}
if($numberCounter > 20){
    echo("Wariacie co tyle razy to odwiedzasz!");
    echo "<br>";
}
echo ("Wizyty na stronce: ".$numberCounter);
