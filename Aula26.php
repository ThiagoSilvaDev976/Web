<?php
// Usando for, seria:
//$var = variavel
//"for(inic;cond;incr){"
//echo "inic <br>"
//}

//definição de variáveis
$capital    = 10;
$taxa       = 0.2;
$tempo      = 10;
//for(inic;cond;incr){
for($i = 1; $i <= $tempo; $i++){
    $juros = $capital * $taxa;
    $montante = $capital + $juros;
    echo $i."º mês: juros = " .round($juros, 2)." e Total = ".round($montante, 2)."<br>";
    $capital = $montante;
}
?>