<?php
require ('connect.php');

extract($_POST);

if(mysqli_query($con,"INSERT INTO `clientes`(`email`, `nome_empresa`, `cnpj`, `senha`, `confirmar_senha`) VALUES ('$email','$nome_empresa','$cnpj','$senha','$confirmar_senha');")){
    $response = ["status" => "success","msg"=> "Conta cadastrada"];
}else{
    $response = ["status"=> "error","msg"=> "Ocorreu um erro ao cadastrar" . mysqli_error($con)];
}

header("location:login.php");
exit;