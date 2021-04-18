<head>
    <meta charset="UTF-8">
    <title>lab 4</title>
    <link rel="stylesheet" href="../../../style.css">
    <link rel="shortcut icon" href="../../../icon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
</head>
<h3>Zadanie 2</h3>
<h4>Zapis do pliku!</h4>
<h4>Wprowadź tekst, a ja magicznym sposobem go zapisze!!!</h4>
<form method="post" action="main.php">
    <textarea name="field" placeholder="Twój Text"  required></textarea>
    <br>
    <input type="submit" value="Zapisz" name="upload">
</form>
<?php
if(isset($_POST['field'])){
    include 'save.php';
}
?>
<br>
<input type="button" onClick="window.location.href='../lab4.html'" value="Wstecz" name="buttonMenu">