<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negócio na Área</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../bootstrap-5.3.3-examples/carousel/carousel.css" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/logo rd (1).png" type="image/x-icon">
</head>
<body>
    <header>
        <nav>
        <?php 
            include('header.php');
        ?>
        </nav>
    </header>
    <main>
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg> -->
                <!-- <img src="./assets/images/fundo_roxo.jpg" alt="" width="100%" height="100%"> -->
                <div class="container">
                  <div class="carousel-caption text-start">
                    <span class="color-word">Crie um site </span><span> para sua loja com nosso</span> <span class="color-word">layout </span> <span> predefinido</span>
                    </span>  
                    <p class="opacity-75"></p>
                    <p><a class="btn btn-lg btn-primary" href="./php/cadastro.php">Cadastre-se</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!-- <section id="slideshow">
            <span id="slideshow-text">
                <span class="color-word">Crie um site</span> para sua loja com nosso <span class="color-word">layout</span> pré definido
            </span>
            <img id="slideshow-image" src="./assets/images/logo rd (1).png" alt="">
        </section> -->
        

        <section id="sobre">
            <h1>Alavanque suas vendas</h1>
            <span>Crie seus próprios layouts</span>
            <img src="./assets/images/logo rd (1).png" alt="">
            <h2>Divulgue sua empresa</h2>
            <span>Cresça no mercado digital</span>
            <span></span>
            <button type="submit">Saiba mais</button>
        </section>
    

        <footer class="rodape">
            <div class="empresa">
                <span>Sobre</span>
                <span>ZL Tech</span>
            </div>
            <div class="redes-sociais">
                <span><a href="#"><i class="fa-brands fa-facebook"></i></a></span>
                <span><a href="#"><i class="fa-brands fa-instagram"></i></a></span>
                <span><a href="#"><i class="fa-brands fa-github"></i></a></span>
                <span><a href="#"><i class="fa-brands fa-youtube"></i></a></span>
                <!-- <div class="botao">
                    <button>Entre em contato</button>
                </div> -->
            </div>
            
        </footer>
    </main>
    
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

