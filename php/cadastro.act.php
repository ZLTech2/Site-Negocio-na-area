<?php
require ('connect.php');
if (empty($_POST['senha'])) {
    die(json_encode(["status" => "error", "msg" => "A senha não pode estar vazia."]));
}

$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];

if ($senha !== $confirmar_senha) {
    die(json_encode(["status" => "error", "msg" => "As senhas não coincidem."]));
}

$email = $_POST['email'];
$nome_empresa = $_POST['nome_empresa'];
$cnpj = $_POST['cnpj'];


$hash = password_hash($senha, PASSWORD_ARGON2ID);
$response = [];


$stmt = $con->prepare("INSERT INTO clientes (email, nome_empresa, cnpj, senha) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $email, $nome_empresa, $cnpj, $hash);

if ($stmt->execute()) {
    $response = ["status" => "success", "msg" => "Conta cadastrada"];
} else {
    $response = ["status" => "error", "msg" => "Ocorreu um erro ao cadastrar: " . $stmt->error];
}

$stmt->close();

header('Content-Type: application/json');
echo json_encode($response);
exit;
?>
