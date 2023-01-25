<?php

$host="127.0.0.1:3306";
$user="root";
$pass="";
$banco="spectrum";

$conexao = mysqli_connect($host, $user, $pass, $banco);

if(!$conexao){
    die("Erro: " . mysqli_connect_error());
}

?>