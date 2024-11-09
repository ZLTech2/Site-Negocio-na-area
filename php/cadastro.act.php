<?php
require ('connect.php');

extract($_POST);

$senha = md5($senha);
$confirmar_senha = md5($confirmar_senha);
$response = [];

if(mysqli_query($con,"INSERT INTO clientes(email, nome_empresa, cnpj, senha, confirmar_senha) VALUES ('$email','$nome_empresa','$cnpj','$senha','$confirmar_senha')")){
    $response = ["status" => "success","msg"=> "Conta cadastrada"];
} else {
    $response = ["status"=> "error","msg"=> "Ocorreu um erro ao cadastrar: " . mysqli_error($con)];
}

header('Content-Type: application/json');
echo json_encode($response);
exit;
