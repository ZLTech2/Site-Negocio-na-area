<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/styles-dashboard.css">
    <link rel="shortcut icon" href="../assets/images/logo rd (1).png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

</head>
<body>
    <header>
        <nav>
        <ul class="nav-list">
            <div class="logo">
                <img src="../assets/images/logo rd (1).png" alt="">
                <p>Personalização</p>
            </div>
            <!-- <li><a href="../index.php">Index</a></li> -->


            <li><a href="#" id="abrirPopupDescritivo">Descritivo</a></li>
            <div class="popup" id="popupDescritivo">
                <div class="conteudo">
                    <form>
                        <label for="name">Nome</label>
                        <input type="text" placeholder="Adicione o nome da sua empresa/loja">
                        <label for="descricao">Descrição</label>
                        <input type="text" placeholder="Adicione uma descrição">
                        <button id="salvarDescricao">Salvar</button>
                        <button id="cancelar">Cancelar</button>
                    </form>
                </div>
            </div>

            <li><a href="#" id="abrirPopupModificacao">Modificação</a></li>
            <div class="popup" id="popupModificacao">
                <div class="plano">
                    <div class="icon">
                        <a href="#">
                            <i class="fa-regular fa-images"></i>
                        </a>
                    </div>
                    <div class="imagem"><a href="#"><i class="fa-regular fa-images"></a></i></div>
                    <div class="botao">
                        <button id="salvarModificacao">Salvar</buttonid>
                        <button id="cancelarModificacao">Cancelar</button>
                    </div>
                </div>
            </div>

            <li><a href="#" id="abrirPopupPosts">Adicionar posts</a></li>
            <div class="popup" id="popupPosts">
            <div class="imagems"><a href="#"><i class="fa-regular fa-images"></i></a></div>
                <div class="conteudo">
                    <form>
                        <label for="name">Nome do produto</label>
                        <input type="text" placeholder="Adicione o nome do produto">
                        <label for="descricao">Descrição do produto</label>
                        <input type="text" placeholder="Adicione uma descrição">
                        <button id="salvarDescricao">Salvar</button>
                        <button id="cancelarPosts">Cancelar</button>
                    </form>
                </div>
            </div>


            <li><a href="#" id="abrirPopupContato">Contato</a></li>
            <div class="popup" id="popupContato">
                <div class="conteudo"> 
                    <form>
                        <label>Nome:</label>
                            <input type="text" placeholder="Digite seu nome.." name="nome">
                        <label for="email">Email:</label>
                            <input type="email" placeholder="Digite seu email.." name="email">
                        <label for="telefone">Telefone:</label>
                            <input type="tel" id="telefone" placeholder="Digite o número de telefone" maxlength="12" name="telefone">
                        <label for="mensagem">Deixe sua mensagem:</label>
                            <textarea name="mensagem" id="txt_contato" placeholder="Digite sua mensagem" maxlength="200"></textarea>
                        <button type="submit">Enviar</button>
                        <button id="cancelarContato">Cancelar</button>
                    </div>
                    <!-- <div id="msg"></div> -->
                </form> 
            </div>

            <li><a href="./logout.php">Sair</a></li>
            <!-- gerar uma requisição de logado -->
        </ul>
        </nav>
    </header>
    <div class="capa">
        <div class="imagem">
            <!-- <img src="../assets/images/mkimports.png" alt=""> -->
        </div>
    </div>
    <div class="teste">
        <span>Posts</span>
        <span>Avaliações</span>
    </div>

    <div class="posts" id="post">
        <img src="../assets/images/adicionar-botao.png" alt="">
            <!-- <a href="https://www.flaticon.com/br/icones-gratis/adicionar" title="adicionar ícones">Adicionar ícones criados por Karacis - Flaticon</a> -->
        <h1>Adicionar posts</h1>
    </div>

    <script src="../js/popup.js"></script>
</body>
</html>