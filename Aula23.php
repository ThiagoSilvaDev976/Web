<?php
$destino = $_POST["destino"];
$valorInicial = 5;
$valorKm = 2.5;
$i = 1;

while($i <= $destino){
    $valorFinal = $valorInicial + $valorKm * $i;
        echo $i."º Km: R$ $valorFinal <br>";
    $i = $i + 1;
}
?>