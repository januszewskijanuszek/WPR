<!DOCTYPE html>
<html lang="pl">
<html>
<head>
    <meta charset="UTF-8">
    <title>Zadanie1</title>
    <link rel="stylesheet" href="../../../style.css">
    <link rel="shortcut icon" href="../../../icon.ico">
</head>
<body>
<h3>Zadanie 1</h3>
<?php
    switch($_POST['metoda']){
        case "dodawanie":{
            echo ($_POST['pole1'] + $_POST['pole2']);
            break;
        }
    }
?>
<input type="button" onClick="window.location.href='main.html'" value="Wstecz" name="buttonMenu">
</body>
</html>