document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contatoForm');
    const senha = document.getElementById('senha');
    const confirmarSenha = document.getElementById('confirmar_senha');
    const msgElement = document.getElementById('msg');
    const cnpj = document.getElementById('cnpj');

    // Aplique a máscara no CNPJ

    form.addEventListener('submit', (event) => {
        event.preventDefault(); // Impede o envio do formulário inicialmente

        function verificarSenhas() {
            // Validação de senha
            const senhaValue = senha.value.trim();
            const confirmarSenhaValue = confirmarSenha.value.trim();

            msgElement.style.display = 'none';
            msgElement.className = 'msg';
            if (senhaValue === "" || confirmarSenhaValue === "") {
                return;
            }

            if (senhaValue !== confirmarSenhaValue) {
                msgElement.innerText = 'As senhas não são iguais';
                msgElement.classList.add('erro');
                msgElement.style.display = 'block';
                return false; // Sai da função se as senhas forem diferentes
            } else {
                msgElement.innerText = 'As senhas são iguais.';
                msgElement.classList.add('sucesso');
                msgElement.style.display = 'block'; // Exibe a mensagem de sucesso
            }
        }

        senha.addEventListener('input', verificarSenhas);
        confirmarSenha.addEventListener('input', verificarSenhas);

        // Criação do FormData e envio via fetch
        const formData = new FormData(form);

        fetch('cadastro.act.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            msgElement.innerText = data.msg;
            msgElement.className = data.status === 'success' ? 'success' : 'error';

            if (data.status === 'success') {
                form.reset(); // Limpa o formulário em caso de sucesso
            }
        })
        .catch(error => {
            console.error('Erro:', error);
            msgElement.innerText = 'Ocorreu um erro ao enviar o formulário';
        });
    });
});
