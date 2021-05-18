<head>
    <meta charset="UTF-8">
    <title>Zadanie 3</title>
    <link rel="stylesheet" href="../../../style.css">
    <link rel="shortcut icon" href="../../../icon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
</head>
<?php
include 'saveData.php';
    //for($i = 0 ; $i < $_POST[] ; $i++)
for($i = 0 ; $i < count($_POST['name']) ; $i++){
    echo("Imię ".($i+1)." Osoby: ");
    echo $_POST['name'][$i];
    echo "<br>";
    echo("Nazwisko ".($i+1)." Osoby: ");
    echo $_POST['surname'][$i];
    echo "<br>";
    echo("Numer telefonu ".($i+1)." Osoby: ");
    echo $_POST['phoneNumber'][$i];
    echo "<br>";
    echo("Aders E-Mail ".($i+1)." Osoby: ");
    if($_POST['email'][$i] == ""){
        echo " BRAK";
    }
    else{
        echo $_POST['email'][$i];
    }
    echo "<br>";
    // Check box
    echo("Popielniczka w pokoju dla ".($i+1)." Osoby: ");
    if(isset($_POST['pal'][$i]) == true){
        echo "Popielniczka ma być";
    }
    else{
        echo "Nie ma być popielniczki";
    }
    echo "<br>";
    echo("Klimatyzacja dla ".($i+1)." Osoby: ");
    if(isset($_POST['klima'][$i]) == true){
        echo "Ma być klimatyzacja";
    }
    else{
        echo "Nie ma być klimy";
    }
    echo "<br>";
    echo "<br>";
}
echo "<br>";
if(isset($_POST['dziecko']) == true){
    echo"Sostawiane dziecięce łóżko";
}
else{
    echo"Nie dostawamy łóżka dla dziecka";
}
echo "<br>";
echo "Data przyjazdu: ";
echo $_POST['datap'];
echo "<br>";
echo "Data odiazdu: ";
echo $_POST['datao'];
echo "<br>";
echo "Regulamin został zaakceptowany!";
