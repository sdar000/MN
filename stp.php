<?php
#para poder elegir el archivo en unity
$arch = fopen("$_POST['archivo']. '.txt', 'w'");

$t = $_POST['texto'];
$t = str_replace("/","", $t); //sin barras
$t = str_replace(chr(92), "", $t); //sin barras invertidas

fwrite ($arch, $_POST['texto']);

echo 'ok'
