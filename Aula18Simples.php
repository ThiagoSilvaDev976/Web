<?php
$capital = $_POST["capital"];
$taxa = $_POST["taxa"];
$tempo = $_POST["tempo"];

echo "Capital: $capital <br>";
echo "Taxa: $taxa <br>";
echo "Tempo: $tempo <br>";

$juros = $capital * $taxa * $tempo;
echo "Juros: $juros <br>";
$montante = $capital + $juros;
echo "Montante: $montante";
?>