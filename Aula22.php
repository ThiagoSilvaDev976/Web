<?php
$capital    = $_POST["capital"];
$taxa       = $_POST["taxa"];
$tempo      = $_POST["tempo"];
$i = 1;

while($i <= $tempo ){
    $juros = $capital * $taxa;
    $montante = $capital + $juros;
    echo $i."º mês: juros = " .round($juros, 2)." e Total = ".round($montante, 2)."<br>"; //"." é um operador de concatenação
    $i = $i + 1;
    $capital = $montante;
}
?>