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

// if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//     die(json_encode(['status'=> 'error','msg'=> 'O email fornecido é inválido']));
// }

// $email_dominio = substr(strrchr($email_dominio, "@"),1);
// if(!checkdnsrr($email_dominio, "MX")){
//     die(json_encode(array("status"=> "error","msg"=> "O domínio do email não é válido")));
// }

// Gera o hash da senha
$hash = password_hash($senha, PASSWORD_ARGON2ID);
$response = [];

// Inserção no banco de dados
$stmt = $con->prepare("INSERT INTO clientes (nome_empresa,email, cnpj, senha) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nome_empresa, $email, $cnpj, $hash);

if ($stmt->execute()) {
    $response = ["status" => "success", "msg" => "Conta cadastrada, clique no botao entrar para logar"];
} else {
    $response = ["status" => "error", "msg" => "Ocorreu um erro ao cadastrar: " . $stmt->error];
}

$stmt->close();

header('Content-Type: application/json');
echo json_encode($response);
exit;
?>
