<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styles-login.css">
    <link rel="shortcut icon" href="../assets/images/logo rd (1).png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <ul class="nav-list">
                <div class="logo">
                   <a href="../site.html"> <img src="../assets/images/logo rd (1).png" alt=""></a>
                </div>
                <li><a href="../index.html">Personalize</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="https://zltech2.github.io/Site-ZL-Tech/">ZL Tech</a></li>
                <li> <a href="./cadastro.php">Cadastrar</a></li>
                <li><a href="./login.php">Entrar</a></li>
            </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-form">
            <h1>Negócio na Área</h1>
            <form action="" method="post">
                <label for="email"> Email:</label>
                    <input type="text" placeholder="Digite seu email" required>
                <label for="senha">Senha:</label>
                    <input type="password" placeholder="Digite sua senha" required>
                <button type="submit">Entrar</button>
                <p>Não possui conta? <a href="#">Cadastre-se</a></p>
                <div class="redes-sociais">
                    <span><a href="#"><i class="fa-brands fa-google"></a></i></span>
                    <span><a href="#"><i class="fa-brands fa-facebook"></a></i></span>
                </div>
            </form>
        </div>
</body>
</html>