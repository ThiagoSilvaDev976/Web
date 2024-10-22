<?php
$forma = $_POST["forma"];
$base = $_POST["base"];
$altura = $_POST["altura"];

if($forma == "retangulo")
{
    $area = $base * $altura;
    echo "Área do Retângulo: $area";
} else
{
    $area = $base * $altura / 2;
    echo "Área do Triângulo: $area";
}
?>