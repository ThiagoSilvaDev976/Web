<?php
// Usando for, seria:
//"for(inic;cond;incr){"
//echo "inic <br>"
//}
$numero = $_POST["numero"];
for($i=1; $i <= 10; $i++){
    $resultado=$numero*$i;
    echo"$numero x $i = $resultado<br>";
}

?>