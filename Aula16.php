<?php //comenta-se uma linha com barra dupla, varias com /*
/*echo "Olá, mundo! <br>"; //echo é o comando de escrita
$nome = "Thiago"; //declaramos variáveis usando um $
echo $nome;
echo "<br> Bem vindo, $nome"; //variavel fica dentro das aspas*/
$usuario = $_POST["usuario"]; //usuario vem do name do input
$senha   = $_POST["senha"];
echo "Bem_vindo $usuario sua senha é $senha";
?>