<?php
$change = $_POST['field'];
$fo = fopen( 'save.txt', 'a+');
fputs($fo, $_POST['field']);
fputs($fo, "\n");
fclose($fo);