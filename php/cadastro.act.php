<?php
require ('connect.php');

// Verifica se o campo 'senha' foi enviado
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

// Gera o hash da senha
$hash = password_hash($senha, PASSWORD_ARGON2ID);
$response = [];

// Inserção no banco de dados
$stmt = $con->prepare("INSERT INTO clientes (nome_empresa,email, cnpj, senha) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nome_empresa, $email, $cnpj, $hash);

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
