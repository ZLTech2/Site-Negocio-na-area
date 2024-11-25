document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contatoForm');
    const senha = document.getElementById('senha');
    const confirmarSenha = document.getElementById('confirmar_senha');
    const msgElement = document.getElementById('msg');

    function mascaraCNPJ(cnpj){
        cnpj = cnpj.replace(/\D/g,'');
        cnpj = cnpj.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})$/, '$1.$2.$3/$4-$5');
        return cnpj;
    }
    
    const cnpj = document.getElementById('cnpj')
    cnpj.addEventListener('input',function(){
        this.value = mascaraCNPJ(this.value);
    })
    
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

        fetch('../php/cadastro.act.php', {
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


document.getElementById('formContato').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch('./php/contato.act.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erro HTTP: ' + response.status); // Lança erro se o status não for "ok"
        }
        return response.json(); // Tenta converter para JSON apenas se o status for "ok"
    })
    .then(data => {
        console.log(data);
        document.getElementById('msg').innerText = data.msg;
        this.reset();
    })
    .catch(error => {
        console.error('Erro:', error);
        document.getElementById('msg').innerText = 'Ocorreu um erro ao enviar o formulário';
    });
});

