<!DOCTYPE html>
<html lang="pl">
<html>
<head>
    <meta charset="UTF-8">
    <title>Zadanie 3</title>
    <link rel="stylesheet" href="../../../style.css">
    <link rel="shortcut icon" href="../../../icon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
</head>
<body>
    <h3> Zadanie 2</h3>
    <?php
        function number($number)
        {
            switch($number){
                case "1":{
                    return 1;
                }
                case "2":{
                    return 2;
                }
                case "3":{
                    return 3;
                }
                case "4":{
                    return 4;
                }
            }
        }
        echo"<form action='final.php' method='post'>";
        for($i = 0; $i < number($_POST['method']) ; $i++){
            echo ("Formularz ".($i+1));
            echo "<br>";
            echo ("
                <input type='text' name='name[]' placeholder='*Imię' required /> <br>
                <input type='text' name='surname[]' placeholder='*Nazwisko' required /> <br>
                <input type='tel' name='phoneNumber[]' placeholder='*Numer telefonu' required /> <br>
                <input type='email' name='email[]' placeholder='E-mail' /> <br>
                Popielniczka w pokoju <input type='checkbox' name='pal[]' /> <br>
                Klimatyzacja w pokoju <input type='checkbox' name='klima[]' /> <br>
            <br>            
");
        }
        echo("
        Dziecięce łóżko <input type='checkbox' name='dziecko' /> <br>
        Data przyjazdu <br>
        <input type='date' name='datap' placeholder='*Data' required /> <br>
        Data odjazdu <br>
        <input type='date' name='datao' placeholder='*Data' required /> <br>
        Zapoznałem się z <a href='regulamin.html'>regulaminem</a><input type='radio' name='regulamin' required/><br>
        <input type='submit' value='Wyślij' name='upload'> <br>
        </form>
        ");
    ?>
    <input type="button" onClick="window.location.href='main.html'" value="Wstecz" name="buttonMenu">
</body>
</html>