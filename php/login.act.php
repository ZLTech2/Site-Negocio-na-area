<?php
session_start();

if (isset($_POST['email']) && isset($_POST['senha'])) {
    require('connect.php');

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = $_POST['senha'];

    // consultar o banco de dados para buscar o usuário pelo email

        $sql = "SELECT * FROM clientes WHERE email = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $resultado = $stmt->get_result();
    // verifica se o usuário foi encontrado
    if ($resultado && mysqli_num_rows($resultado) === 1) {
        $cliente = mysqli_fetch_assoc($resultado);

        // verificar se a senha fornecida corresponde ao hash armazenado
        if (password_verify($senha, $cliente['senha'])) {
            
            $_SESSION['logado'] = true;
            $_SESSION['nome_empresa'] = $cliente['nome_empresa'];
            $_SESSION['email'] = $cliente['email'];

            // redireciona para a dashboard
            header('Location: dashboard.php');
            exit;
        } else {
            $_SESSION['erro'] = "Email ou senha inválidos.";
        }
    } else {
        $_SESSION['erro'] = "Email ou senha inválidos.";
    }

    // redirecionar para o login com mensagem de erro
    header('Location: login.php');
    exit;
} else {
    $_SESSION['erro'] = "Por favor, preencha todos os campos.";
    header('Location: login.php');
    exit;
}
