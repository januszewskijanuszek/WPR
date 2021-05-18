<head>
    <meta charset="UTF-8">
    <title>lab 4</title>
    <link rel="stylesheet" href="../../../style.css">
    <link rel="shortcut icon" href="../../../icon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
</head>
<h3>Zadanie 1</h3>
<form action="main.php" method="POST" >
    <input type="number" name="pole1" placeholder="pole1" />
    <select name="metoda">
        <option value="dodawanie"> Dodawanie </option>
        <option value="odejmowanie"> Odejmowanie </option>
        <option value="mnozenie"> Mnożenie </option>
        <option value="dzielenie"> Dzielenie </option>
    </select>
    <input type="number" name="pole2" placeholder="pole2" id=""/>
    <br>
    <input type="submit" value="Oblicz" name="upload">
    <br>
</form>
<?php
// Nie wierze że to działa
if(isset($_POST['pole1']) and isset($_POST['pole2'])){
    switch ($_POST['metoda']) {
        case "dodawanie":
        {
            include 'dodawanie.php';
            break;
        }
        case "odejmowanie":
        {
            include 'odejmowanie.php';
            break;
        }
        case "mnozenie":
        {
            include 'mnozenie.php';
            break;
        }
        case "dzielenie":
        {
            include 'dzielenie.php';
            if($_POST['pole2'] == 0){
                echo("Pip puup. Dzielenie przez zero!");
            }
            else{
                echo($_POST['pole1'] / $_POST['pole2']);
            }
            break;
        }
    }
}
?>
<br>
<input type="button" onClick="window.location.href='../lab4.html'" value="Wstecz" name="buttonMenu">
