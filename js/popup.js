document.addEventListener('DOMContentLoaded', () => {
    const post = document.getElementById('post');

    // Lista de popups
    const popups = {
        descritivo: document.getElementById('popupDescritivo'),
        modificacao: document.getElementById('popupModificacao'),
        posts: document.getElementById('popupPosts'),
        contato: document.getElementById('popupContato')
    };

    // Função para fechar todos os popups
    function fecharTodosPopups() {
        Object.values(popups).forEach(popup => {
            popup.style.display = 'none';
        });
        post.style.visibility = 'visible';
    }

    // Abrir popup descritivo
    const abrirPopupDescritivo = document.getElementById('abrirPopupDescritivo');
    abrirPopupDescritivo.addEventListener('click', (event) => {
        event.preventDefault();
        fecharTodosPopups();
        popups.descritivo.style.display = 'flex';
        post.style.visibility = 'hidden';
    });

    // window.addEventListener('click', (event) => {
    //     // Verifica se o clique foi no popup, mas fora do conteúdo interno
    //     const popupDescritivo = document.getElementById('popupDescritivo');
    //     const conteudo = popupDescritivo.querySelector('.conteudo');
    //     if (event.target === popupDescritivo && !conteudo.contains(event.target)) {
    //         popupDescritivo.style.display = 'none';
    //         const post = document.getElementById('post');
    //         post.style.visibility = 'visible';
    //     }
    // });

    
    
    // Abrir popup modificação
    const abrirPopupModificacao = document.getElementById('abrirPopupModificacao');
    abrirPopupModificacao.addEventListener('click', (event) => {
        event.preventDefault();
        fecharTodosPopups();
        popups.modificacao.style.display = 'flex';
        post.style.visibility = 'hidden';
    });

    // Cancelar popup descritivo
    const cancelarDescritivo = document.getElementById('cancelar');
    cancelarDescritivo.addEventListener('click', () => fecharTodosPopups());

    // Cancelar popup modificação
    const cancelarModificacao = document.getElementById('cancelarModificacao');
    cancelarModificacao.addEventListener('click', () => fecharTodosPopups());

    // Abrir popup posts
    const abrirPopupPosts = document.getElementById('abrirPopupPosts');
    abrirPopupPosts.addEventListener('click', (event) => {
        event.preventDefault();
        fecharTodosPopups();
        popups.posts.style.display = 'flex';
        post.style.visibility = 'hidden';
    });

    // Cancelar popup posts
    const cancelarPosts = document.getElementById('cancelarPosts');
    cancelarPosts.addEventListener('click', () => fecharTodosPopups());

    // Abrir popup contato
    const abrirPopupContato = document.getElementById('abrirPopupContato');
    abrirPopupContato.addEventListener('click', (event) => {
        event.preventDefault();
        fecharTodosPopups();
        popups.contato.style.display = 'flex';
        post.style.visibility = 'hidden';
    });

    // Cancelar popup contato
    const cancelarContato = document.getElementById('cancelarContato');
    cancelarContato.addEventListener('click', () => fecharTodosPopups());
});
