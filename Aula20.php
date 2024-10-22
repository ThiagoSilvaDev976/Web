<?php
$nota1 = $_POST["b1"];
$nota2 = $_POST["b2"];
$nota3 = $_POST["b3"];
$nota4 = $_POST["b4"];
$notaFinal = ($nota1+$nota2+$nota3+$nota4) /4;
$media = 6.5;

if($notaFinal >= $media)
{
    echo "Aluno Aprovado";
}else
{
    echo "Aluno Reprovado";
}
?>