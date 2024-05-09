// Função para simular o clique no botão de upload de imagem
function troca_foto_perfil() {
    document.getElementById('upload_perfil').click();
}

// Evento que é acionado quando o usuário seleciona uma imagem para upload
document.getElementById('upload_perfil').addEventListener('change', function() {
    const arquivo = this.files[0]; // Obtém o arquivo selecionado pelo usuário
    if (arquivo) {
        const leitura = new FileReader(); // Cria um objeto FileReader para ler o arquivo
        leitura.onload = function() { // Evento acionado quando a leitura do arquivo é concluída
            document.querySelector('.foto_perfil img').src = leitura.result; // Define a imagem de perfil atualizada
        }
        leitura.readAsDataURL(arquivo); // Lê o conteúdo do arquivo como uma URL de dados
    }
});

// Evento que é acionado quando o DOM é completamente carregado
document.addEventListener("DOMContentLoaded", function() {
    // Array de objetos representando os estados brasileiros, contendo a sigla e o nome de cada estado
    const estados_brasileiro = [
    { sigla: "AC", nome: "Acre" },
    { sigla: "AL", nome: "Alagoas" },
    { sigla: "AP", nome: "Amapá" },
    { sigla: "AM", nome: "Amazonas" },
    { sigla: "BA", nome: "Bahia" },
    { sigla: "CE", nome: "Ceará" },
    { sigla: "DF", nome: "Distrito Federal" },
    { sigla: "ES", nome: "Espírito Santo" },
    { sigla: "GO", nome: "Goiás" },
    { sigla: "MA", nome: "Maranhão" },
    { sigla: "MT", nome: "Mato Grosso" },
    { sigla: "MS", nome: "Mato Grosso do Sul" },
    { sigla: "MG", nome: "Minas Gerais" },
    { sigla: "PA", nome: "Pará" },
    { sigla: "PB", nome: "Paraíba" },
    { sigla: "PR", nome: "Paraná" },
    { sigla: "PE", nome: "Pernambuco" },
    { sigla: "PI", nome: "Piauí" },
    { sigla: "RJ", nome: "Rio de Janeiro" },
    { sigla: "RN", nome: "Rio Grande do Norte" },
    { sigla: "RS", nome: "Rio Grande do Sul" },
    { sigla: "RO", nome: "Rondônia" },
    { sigla: "RR", nome: "Roraima" },
    { sigla: "SC", nome: "Santa Catarina" },
    { sigla: "SP", nome: "São Paulo" },
    { sigla: "SE", nome: "Sergipe" },
    { sigla: "TO", nome: "Tocantins" }
]

    // Obtém o elemento select do estado no HTML
    const select_estado = document.getElementById("estado");

    // Preenche o elemento select com as opções de estado
    estados_brasileiro.forEach(estado => {
        const option = document.createElement("option"); // Cria um elemento option
        option.value = estado.sigla; // Define o valor do option como a sigla do estado
        option.textContent = estado.nome; // Define o texto do option como o nome do estado
        select_estado.appendChild(option); // Adiciona a opção ao elemento select
    });

    // Função para validar o formulário antes do envio
    function validar_formulario() {
        const nome = document.getElementById("nome_pessoal").value;
        const idade = document.getElementById("idade_pessoal").value;
        const estado = document.getElementById("estado").value;
        const cidade = document.getElementById("cidade_pessoal").value;
        const bairro = document.getElementById("bairro_pessoal").value;
        const endereco = document.getElementById("endereco_pessoal").value;
        const biografia = document.getElementById("biografia_pessoal").value;

        // Verificar se todos os campos obrigatórios estão preenchidos
        if (nome === "" || idade === "" || estado === "" || cidade === "" || bairro === "" || endereco === "" || biografia === "") {
            alert("Por favor, preencha todos os campos.");
            return false;
        }

        // Verificar se a idade é um número válido
        if (isNaN(idade) || idade <= 0 || idade >= 100) {
            alert("Por favor, insira uma idade válida.");
            return false;
        }

        // Verificar se o nome contém apenas letras, espaços e caracteres acentuados
        if (!/^[a-zA-Z\sÀ-ú]+$/.test(nome)) {
            alert("Por favor, insira apenas letras no campo nome.");
            return false;
        }
    
        // Verificar se a cidade contém apenas letras, espaços e caracteres acentuados
        if (!/^[a-zA-Z\sÀ-ú]+$/.test(cidade)) {
            alert("Por favor, insira apenas letras no campo cidade.");
            return false;
        }
    
        // Verificar se o bairro contém apenas letras, espaços e caracteres acentuados
        if (!/^[a-zA-Z\sÀ-ú]+$/.test(bairro)) {
            alert("Por favor, insira apenas letras no campo bairro.");
            return false;
        }

        // Se a validação passar, o formulário será enviado
        return true;
    }

    // Adicionar evento de submissão do formulário para chamar a função de validação
    document.getElementById("form_atualizacao").addEventListener("submit", function(event) {
        if (!validar_formulario()) {
            event.preventDefault(); // Impede o envio do formulário se a validação falhar
        }
    });
});
