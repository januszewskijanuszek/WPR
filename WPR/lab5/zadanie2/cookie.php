<?php
$numberCounter = 1;
// !!!
// Sprawdziłem to na stacku ponieważ nie było tego w pdf, ale czaje co tu sie dzieje
// https://stackoverflow.com/questions/4290230/php-detect-page-refresh
$pageRefresh = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

if($pageRefresh){
    echo("Oszust! - Nie odświerzaj");
    echo "<br>";
} else{
    if(!isset($_COOKIE['counterUp'])){
        setcookie('counter', $numberCounter);
    }else{
        $numberCounter = $_COOKIE['counterUp'];
        $numberCounter++;
        setcookie('counterUp', $numberCounter);
    }
    if($numberCounter > 20){
        echo("Wariacie co tyle razy to odwiedzasz!");
        echo "<br>";
    }
}
echo ("Wizyty na stronce: ".$numberCounter);
