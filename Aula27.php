<?php
//inserindo um dado numa tabela sql, usando php
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$dataNasc = $_POST["dataNasc"];
//Conectando ao Banco de Dados
//$conn = new MySQLi('localhost', 'ususario','senha','banco de dados');
$conn = new MySQLi('localhost','root','','bd_aula27');

if($conn->connect_error){
    die("A Conexão Falhou: " .$conn->connect_error);
}else{
    $sql = "INSERT INTO alunos (nome, cpf, dataNasc)
    VALUES ('$nome','$cpf','$dataNasc')";
}

if(mysqli_query($conn,$sql)){
    session_start();
    if(mysqli_affected_rows($conn)){
        $_SESSION["insert"] = "1";
        header('Location:Aula28.html.php');
    }else{
        $_SESSION["insert"] = "2";
        header('Location:Aula28.html.php');
    }
}else{
    echo "Falha no Comando SQL.";
}
?>