document.addEventListener('DOMContentLoaded',()=>{
    const post = document.getElementById('post');
    const abrirPopupDescritivo = document.getElementById('abrirPopupDescritivo');
    const popupDescritivo = document.getElementById('popupDescritivo');
    abrirPopupDescritivo.addEventListener('click',(event)=>{
        event.preventDefault();
        popupDescritivo.style.display = 'flex';
        post.style.visibility = 'hidden';
    })

    window.addEventListener('click',(event)=>{
        if(event.target === popupDescritivo){
            popupDescritivo.style.display = 'none';
            post.style.visibility = 'visible';
        }
    })

    const popupModificacao = document.getElementById('popupModificacao');
    const abrirPopupModificacao = document.getElementById('abrirPopupModificacao')

    abrirPopupModificacao.addEventListener('click',(event)=>{
        event.preventDefault();
        popupModificacao.style.display = 'flex';
        post.style.visibility = 'hidden';
    })

    const cancelar = document.getElementById('cancelar');
    cancelar.addEventListener('click',(event)=>{
        popupDescritivo.style.display = 'none';
        post.style.visibility = 'visible';
    })

    const cancelarModificacao = document.getElementById('cancelarModificacao');
    cancelarModificacao.addEventListener('click',(event)=>{
        popupModificacao.style.display = 'none';
        post.style.visibility = 'visible';
    })

    const popupPosts = document.getElementById('popupPosts');
    const abrirPopupPosts = document.getElementById('abrirPopupPosts');
    const cancelarPosts = document.getElementById('cancelarPosts')
    abrirPopupPosts.addEventListener('click',(event)=>{
        popupPosts.style.display = 'flex';
        post.style.visibility = 'hidden'
    })

    cancelarPosts.addEventListener('click',(event)=>{
        popupPosts.style.display = 'none';
        post.style.visibility = 'visible';
    })

    const popupContato = document.getElementById('popupContato');
    const abrirPopupContato = document.getElementById('abrirPopupContato');
    const cancelarContato = document.getElementById('cancelarContato');

    abrirPopupContato.addEventListener('click',(event)=>{
        popupContato.style.display = 'flex';
        post.style.visibility = 'hidden';
    })

    cancelarContato.addEventListener('click',(event)=>{
        popupContato.style.display = 'none';
        post.style.visibility = 'visible';
    })
});

