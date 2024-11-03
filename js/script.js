
    const texts = [
        '<span class="color-word">Crie um site</span> para sua loja com nosso <span class="color-word">layout</span> pré definido',
        '<span class="color-word">Disponível em</span> todos os dispositivos, como<span class="color-word"> celular e desktop</span>',
        '<span class="color-word">Melhore a divulgação</span> da sua loja com nosso <span class="color-word">suporte</span> e <span class="color-word"> rede da comunidade</span>'
    ];

    const images = [
        './assets/images/logo_rd_1.png',
        './assets/images/logo_rd_2.png',
        './assets/images/logo_rd_3.png'
    ];

    let currentIndex = 0;

    function changeSlideshow() {
        currentIndex = (currentIndex + 1) % texts.length;
        document.getElementById('slideshow-text').innerHTML = texts[currentIndex];
        document.getElementById('slideshow-image').src = images[currentIndex];
    }

    setInterval(changeSlideshow, 5000); // Muda a cada 3 segundos
