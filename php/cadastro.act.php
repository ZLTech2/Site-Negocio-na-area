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

$hash = password_hash($senha, PASSWORD_ARGON2ID);
$response = [];


if(isset($_POST['email'])){
    // $cnpj = preg_replace('/\D/', '', $cnpj);
    if(empty($_POST['email'])){
        die(json_encode(["status"=> "error","msg"=> "O email não pode estar vazio"]));
    }
    $sql = "SELECT * FROM clientes WHERE email = '$email'";
    $result = mysqli_query($con,$sql);
    if($result && mysqli_num_rows($result)>0){
        die(json_encode(["status" => "error", "msg" => "O email já existe"]));   
    }
}

if(isset($_POST['cnpj'])){
    // $cnpj = preg_replace('/\D/', '', $cnpj);
    if(empty($_POST['cnpj'])){
        die(json_encode(["status"=> "error","msg"=> "O CNPJ não pode estar vazio"]));
    }
    $sql = "SELECT * FROM clientes WHERE cnpj = '$cnpj'";
    $result = mysqli_query($con,$sql);
    if($result && mysqli_num_rows($result)>0){
        die(json_encode(["status" => "error", "msg" => "O CNPJ já existe"]));   
    }
}


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
