<?php
if(!$fo = fopen('save.csv', 'r')){
    echo "Pip puup, brak zapisu!";
    fclose($fo);
}
else{
    while(!feof($fo)){
        $row = fgetcsv($fo);
        if(!empty($row)){

        }
    }
}
