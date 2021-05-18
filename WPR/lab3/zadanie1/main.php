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
    if(isset($_POST['pole1']) and isset($_POST['pole2'])) {
        switch ($_POST['metoda']) {
            case "dodawanie":
            {
                echo($_POST['pole1'] + $_POST['pole2']);
                break;
            }
            case "odejmowanie":
            {
                echo($_POST['pole1'] - $_POST['pole2']);
                break;
            }
            case "mnozenie":
            {
                echo($_POST['pole1'] * $_POST['pole2']);
                break;
            }
            case "dzielenie":
            {
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
    else{
        echo ("Pip puup. Wprowadz dane!");
    }
    ?>
    <br>
    <input type="button" onClick="window.location.href='../lab3.html'" value="Wstecz" name="buttonMenu">
</body>
</html>