<?php
if($_POST['pole2'] == 0){
    echo("Pip puup. Dzielenie przez zero!");
}
else{
    echo($_POST['pole1'] / $_POST['pole2']);
}