document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contatoForm');

    function validarSenha(event) {
        let senha = document.getElementById('senha').value.trim();
        let confirmar_senha = document.getElementById('confirmar_senha').value.trim();

        if (senha !== confirmar_senha) {
            alert('As senhas não são iguais');
            event.preventDefault(); // Impede o envio do formulário
            return false;
        }
        return true;
    }

    form.addEventListener('submit',function(event){
        if(!validarSenha(event)){
            return;
        }
        event.preventDefault();
    })

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Previne o envio tradicional do formulário

        const formData = new FormData(form);

        fetch('cadastro.act.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json()) // Espera a resposta em formato JSON
        .then(data => {
            const msgElement = document.getElementById('msg');
            msgElement.innerText = data.msg; // Mostra a mensagem

            // Adiciona a classe de feedback
            msgElement.className = data.status === 'success' ? 'success' : 'error';

            if (data.status === 'success') {
                form.reset(); // Limpa o formulário em caso de sucesso
            }
        })
        .catch(error => {
            console.error('Erro:', error);
            const msgElement = document.getElementById('msg');
            msgElement.innerText = 'Ocorreu um erro ao enviar o formulário';
        });
    });
});


