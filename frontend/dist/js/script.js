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
];

// Obtém o elemento select do estado no HTML
const select_estado = document.getElementById("estado");

// Preenche o elemento select com as opções de estado
estados_brasileiro.forEach(estado => {
    const option = document.createElement("option"); // Cria um elemento option
    option.value = estado.sigla; // Define o valor do option como a sigla do estado
    option.textContent = estado.nome; // Define o texto do option como o nome do estado
    select_estado.appendChild(option); // Adiciona a opção ao elemento select
});

// Função para acionar o clique no botão de upload de imagem
function troca_foto_perfil() {
    document.getElementById('upload_perfil').click(); // Simula o clique no botão de upload de imagem
}

// Evento que é acionado quando o usuário seleciona uma imagem para upload
document.getElementById('upload_perfil').addEventListener('change', function() {
    const arquivo = this.files[0]; // Obtém o arquivo selecionado pelo usuário
    if (arquivo) {
        const leitura = new FileReader(); // Cria um objeto FileReader para ler o arquivo
        leitura.onload = function() { // Evento acionado quando a leitura do arquivo é concluída
            document.querySelector('.foto_atualizado img').src = leitura.result; // Define a imagem de perfil atualizada
        }
        leitura.readAsDataURL(arquivo); // Lê o conteúdo do arquivo como uma URL de dados
    }
});
