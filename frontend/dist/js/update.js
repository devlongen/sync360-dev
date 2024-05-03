// Espera até que o DOM esteja completamente carregado antes de executar o código
document.addEventListener('DOMContentLoaded', function() {
    // Função para atualizar as informações pessoais
    document.getElementById('form_atualizacao').addEventListener('submit', function(event) {
        event.preventDefault(); // Evita o envio padrão do formulário

        // Função para atualizar as informações pessoais
        function atualizar_informacao() {
            // Obtém os valores dos campos de entrada
            const nome = document.getElementById('nome_pessoal').value;
            const idade = parseInt(document.getElementById('idade_pessoal').value);
            const estado = document.getElementById('estado').value;
            const cidade = document.getElementById('cidade_pessoal').value;
            const bairro = document.getElementById('bairro_pessoal').value;
            const endereco = document.getElementById('endereco_pessoal').value;
            const biografia = document.getElementById('biografia_pessoal').value;

            // Validação dos campos (mantenha a validação original)
            if (nome === '') {
                alert("Por favor, preencha o campo Nome!");
            } else if (idade <= 0 || idade >= 106) {
                alert("Você inseriu um valor que não condiz com uma idade válida. Por favor, insira uma idade entre 1 e 105.");
            } else if (estado === '') {
                alert("Por favor, preencha o campo Estado!");
            } else if (cidade === '') {
                alert("Por favor, preencha o campo cidade!");
            } else if (bairro === '') {
                alert("Por favor, preencha o campo Bairro!");
            } else if (endereco === '') {
                alert("Por favor, preencha o campo Endereço!");
            } else if (biografia === '') {
                alert("Por favor, preencha o campo Biografia!");
            } else {
                // Atualiza os elementos de exibição com as informações inseridas
                document.getElementById('nome_atualizado').textContent = 'Nome: ' + nome;
                document.getElementById('idade_atualizado').textContent = 'Idade: ' + idade;
                document.getElementById('estado_atualizado').textContent = 'Estado: ' + estado;
                document.getElementById('cidade_atualizado').textContent = 'Cidade: ' + cidade
                document.getElementById('bairro_atualizado').textContent = 'Bairro: ' + bairro;
                document.getElementById('endereco_atualizado').textContent = 'Endereço: ' + endereco;
                document.getElementById('biografia_atualizado').textContent = 'Biografia: ' + biografia;4
                alert('Dados foram atualizados com sucesso!')
            }
        }

        // Chama a função para atualizar as informações pessoais
        atualizar_informacao();
    });
});