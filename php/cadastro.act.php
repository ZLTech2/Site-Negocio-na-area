<?php
require ('connect.php');

extract($_POST);

$hash = password_hash($senha, PASSWORD_ARGON2ID);
$hash_confirm = password_hash($confirmar_senha, PASSWORD_ARGON2ID);
$response = [];

// if(mysqli_query($con,"INSERT INTO clientes(email, nome_empresa, cnpj, senha, confirmar_senha) VALUES ('$email','$nome_empresa','$cnpj','$hash','$hash_confirm')")){
//     $response = ["status" => "success","msg"=> "Conta cadastrada"];
// } else {
//     $response = ["status"=> "error","msg"=> "Ocorreu um erro ao cadastrar: " . mysqli_error($con)];
// }

$stmt = $con->prepare("INSERT INTO clientes (email, nome_empresa, cnpj, senha, confirmar_senha) 
                       VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $email, $nome_empresa, $cnpj, $hash, $hash_confirm);

if ($stmt->execute()) {
    $response = ["status" => "success", "msg" => "Conta cadastrada"];
} else {
    $response = ["status" => "error", "msg" => "Ocorreu um erro ao cadastrar: " . $stmt->error];
}

$stmt->close();



header('Content-Type: application/json');
echo json_encode($response);
exit;
