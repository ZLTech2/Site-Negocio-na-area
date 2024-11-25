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
    <link href="./bootstrap-5.3.3-examples/carousel/carousel.css" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/logo rd (1).png" type="image/x-icon">
</head>
<body>
    <header>
        <nav>
            <ul class="nav-list">
                <div class="logo">
                    <a href="index.php"><img src="./assets/images/logo rd (1).png" alt=""></a>
                </div>
                <li><a href="./php/personalize.php">Personalize</a></li>
                <li><a href="#myCarousel">Sobre</a></li>
                <li><a href="http://zltech.freesite.online/?i=1"target="_blank">ZL Tech</a></li>
                <li> <a href="./php/cadastro.php">Cadastrar</a></li>
                <li><a href="./php/login.php">Entrar</a></li>
            </ul>
            </div>
        </nav>
    </header>
    <main>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row align-items-center justify-content-center vw-75">
                  <div class="col-md-6 text-start">
                    <span class="color-word">Crie um site </span>
                    <span style="color:white"> para sua loja com nosso</span>
                    <span class="color-word">layout </span> 
                    <span style="color:white"> predefinido</span>
                    <p><a class="btn btn-lg btn-primary mt-3" href="./php/personalize.php">Personalize</a></p>
                  </div>
                 
                  <div class="col-md-6 text-end">
                    <img src="./assets/images/telacel11.png" alt="" style="width:700px;">
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="container">
                <div class="row align-items-center justify-content-center vw-75">
                  
                  <div class="col-md-6 text-start">
                    <span class="color-word">Disponível em</span>
                    <span style="color:white"> todos os dispositivos, como</span>
                    <span class="color-word">celular e desktop </span> 
                    <p><a class="btn btn-lg btn-primary mt-3" href="./php/cadastro.php">Cadastre-se</a></p>
                  </div>
                  
                  <div class="col-md-6 text-end">
                    <img src="./assets/images/telacel33.png" alt="" style="width:700px;">
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="container">
                <div class="row align-items-center justify-content-center vw-75">

                  <div class="col-md-6 text-start">
                    <span class="color-word">Melhore a divulgação</span>
                    <span style="color:white"> da sua loja com nosso</span>
                    <span class="color-word">suporte e rede da comunidade </span> 
                    <p><a class="btn btn-lg btn-primary mt-3" href="./php/login.php">Entrar</a></p>
                  </div>
               
                  <div class="col-md-6 text-end">
                    <img src="./assets/images/telacel22.png" alt="" style="width:700px;">
                  </div>
                </div>
              </div>
            </div>
          </div> 

          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
          <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
                  id="bd-theme"
                  type="button"
                  aria-expanded="false"
                  data-bs-toggle="dropdown"
                  aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="assets/images/icons.svg#circle-half"></use></svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="assets/images/icons.svg#sun-fill"></use></svg>
                Light
                <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="assets/images/icons.svg#check2"></use></svg>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="assets/images/icons.svg#moon-stars-fill"></use></svg>
                Dark
                <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="assets/images/icons.svg#check2"></use></svg>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="assets/images/icons.svg#circle-half"></use></svg>
                Auto
                <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="assets/images/icons.svg#check2"></use></svg>
              </button>
            </li>
          </ul>
        </div>

        <div class="botoes-flutuantes">
        <button id="read-text">Ler texto</button>
          <div class="botoes-fala">
          
            <button id="pause"><i class="fa-solid fa-pause"></i></button>
            <button id="resume"><i class="fa-solid fa-play"></i></button>
          </div>
        </div>

        <section id="sobre">
            <h1>Alavanque suas vendas</h1>
            <p style="font-size:25px">Crie seus próprios layouts</p>
            <img src="./assets/images/mk_imports.jpg" alt="">
            <h2>Divulgue sua empresa</h2>
            <p style="font-size: 25px;">Cresça no mercado digital</p>
            <div class="logo">
              <span><img src="./assets/images/logo rd (1).png" alt=""></span>
            </div>
            <a href="./php/login.php">Faça login</a>
        </section>
    </main>
    <footer class="rodape">
            <div class="empresa">
                <span>Sobre</span>
                <span> <a href="http://zltech.freesite.online/?i=1"> ZL Tech </a></span>
            </div>
            <div class="redes-sociais">
                <span><a href="#"><i class="fa-brands fa-facebook"></i></a></span>
                <span><a href="#"><i class="fa-brands fa-instagram"></i></a></span>
                <span><a href="https://github.com/ZLTech2"><i class="fa-brands fa-github"></i></a></span>
                <span><a href="#"><i class="fa-brands fa-youtube"></i></a></span>
                <!-- <div class="botao">
                    <button>Entre em contato</button>
                </div> -->
            </div>
        </footer>
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>