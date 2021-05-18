<?php
function arrayCreator($array){
    $counter = 0;
    $finalArray = [];
    foreach ($array as $item){
        array_push($finalArray, $item);
        $counter++;
    }
    for($i = $counter ; $i < 4 ; $i++){
        array_push($finalArray, "Empty");
    }
    return $finalArray;
}
function main(){
    if(!isset($_POST['dziecko'])){
        $_POST['dziecko'] = "false";
    }
    $array = [
        $_POST['dziecko'],
        $_POST['datap'],
        $_POST['datao']
    ];
    $fo = fopen('save.csv', 'a');
    foreach (arrayCreator($_POST['name']) as $item) {
        fwrite($fo, $item . ',');
    }
    foreach (arrayCreator($_POST['surname']) as $item) {
        fwrite($fo, $item . ',');
    }
    foreach (arrayCreator($_POST['phoneNumber']) as $item) {
        fwrite($fo, $item . ',');
    }
    foreach (arrayCreator($_POST['email']) as $item) {
        if ($item == "") $item = "EMPTY";
        fwrite($fo, $item . ',');
    }
    foreach ($_POST['pal'] as $item) {
        if(isset($item) == true) $item = "true";
        else $item = "false";
        fwrite($fo, $item . ',');
    }
    foreach ($_POST['klima'] as $item) {
        if(isset($item) == false) $item = "true";
        else $item = "false";
        fwrite($fo, $item . ',');
    }
    fputcsv($fo, $array, ',', '/');
    fclose($fo);
}
main();