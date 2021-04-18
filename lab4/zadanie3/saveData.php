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
    $buff = $_POST['dziecko'];
    if ($buff == "true") $child = "true";
    else $child = "false";
    $array = [
        $child,
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
    foreach (arrayCreator($_POST['pal']) as $item) {
        if ($item == false) $item = "false";
        else $item = "true";
        fwrite($fo, $item . ',');
    }
    foreach (arrayCreator($_POST['klima']) as $item) {
        if ($item == false) $item = "false";
        else $item = "true";
        fwrite($fo, $item . ',');
    }
    fputcsv($fo, $array, ',', '/');
    fclose($fo);

//$fo = fopen('save.csv', 'a');
//fputcsv($fo, $_POST['name'], ',', '/');
//fputcsv($fo, $_POST['surname'], ',');
//fputcsv($fo, $_POST['phoneNumber'], ',');
//fputcsv($fo, $_POST['email'], ',');
//fputcsv($fo, (array)$pal, ',');
//fputcsv($fo, (array)$klima, ',');
//fputcsv($fo, (array)$child, ',');
//fputcsv($fo, (array)$_POST['datap'], ',');
//fputcsv($fo, (array)$_POST['datao'], ',');
//fclose($fo);
}
main();