<?php
$numero = $_POST["numero"];
$i = 0;
echo "Tabuada do $numero: <br>";

while ($i <= 10){
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
    $i = $i +1;
}
?>