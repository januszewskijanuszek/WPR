<html>
<head>
    <meta charset="UTF-8">
    <title>lab 4</title>
    <link rel="stylesheet" href="../../../style.css">
    <link rel="shortcut icon" href="../../../icon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
</head>
<body>
<?php
    if(isset($_POST['login']) && isset($_POST['password'])){
    $_SESSION['session'] = $_POST['login'];
}
?>
<table>
    <tr>
        <td>
            <form action="main.php" method="post">
                <p>Login: <input type="text" name="login" ></p>
                <p>Password: <input type="password" name="password" ></p>
                <input type="submit" value="Wyślij" name="upload">
            </form>
        </td>
    </tr>
</table>
<?php
    if(isset($_SESSION['session'])){
        echo("<br>");
        echo("Logged in! Welcome User: ".$_POST['login']);
        echo("<br>");
        echo("You can refresh page!");
        echo("<br>");
    } else{
        echo("Not loged in!");
    }
?>
<br>
<input type="button" onClick="window.location.href='../lab6.html'" value="Wstecz" name="buttonMenu">
</body>
</html>
