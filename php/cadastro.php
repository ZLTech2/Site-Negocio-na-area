<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/styles-cadastro.css">
    <link rel="shortcut icon" href="../assets/images/logo rd (1).png" type="image/x-icon">
</head>
<body>
    <header>
        <nav>
            <ul class="nav-list">
                <div class="logo">
                    <a href="../index.php"> <img src="../assets/images/logo rd (1).png" alt=""></a>
                </div>
                <li><a href="./personalize.php">Personalize</a></li>
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
            <?php ?>
            <form action="./cadastro.act.php" method="post" id="contatoForm" novalidate>
                <label for="empresa">Nome da empresa:</label>
                    <input type="text" name="nome_empresa" placeholder="Digite o nome da sua empresa" required>
                <label for="email"> Email:</label>
                    <input type="email" name="email" placeholder="Digite seu email" required>
                <label for="cnpj">CNPJ:</label>
                    <input type="text" id="cnpj" name="cnpj" placeholder="Digite o CNPJ sem pontos ou hífens" maxlength="18" required>
                <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                <label for="confirm-senha">Confirmação de senha:</label>
                    <input type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Confirme sua senha" required>
                <button type="submit">Cadastre-se</button>
                <a href="./login.php">Entrar</a>
                <div id="msg"></div>
            </form>
        </div>

        <!-- <footer>
            <p>redes sociais</p>
        </footer> -->
    </main>
    <script src="../js/script.js"></script>
    
</body>
</html>