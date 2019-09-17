<?php

require_once 'db.class.php'; // Conecta ao banco de dados
mysqli_query($con, "SET NAMES 'utf8';");

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$conec = new db();
$link = $conec->conecta_mysql();


$sql = "INSERT INTO usuario (usuario , email , senha) values ('$nome' , '$email','$login','$senha')";

if(mysqli_query($link, $sql)){
    echo "usuario registrado";
}
       else{
           echo "Erro no cadastro";
       }


?>
