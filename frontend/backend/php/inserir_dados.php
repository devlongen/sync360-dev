<?php 
    // Verifica se o método da requisição é POST e se o formulário de atualização foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form_atualizacao"])){
        // Inclui o arquivo de conexão com o banco de dados
        include_once('frontend/backend/conn.php');
        
        // Obtém os dados do formulário
        $nome = $_POST['nome_pessoal'];
        $idade = $_POST['idade_pessoal'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade_pessoal'];
        $bairro = $_POST['bairro_pessoal'];
        $endereco = $_POST['endereco_pessoal'];
        $biografia = $_POST['biografia_pessoal'];
        
        // Chama a função para inserir os dados no banco de dados
        inserir_db($nome, $idade, $estado, $cidade, $bairro, $endereco, $biografia);
    }

    // Função para inserir dados no banco de dados
    function inserir_db($nome, $idade, $estado, $cidade, $bairro, $endereco, $biografia){
        // Inclui o arquivo de conexão com o banco de dados
        include_once('frontend/backend/conn.php');
        
        // Prepara a declaração SQL para inserção de dados na tabela 'usuario'
        $stmt = $conn->prepare("INSERT INTO usuario (nome_usuario, idade_usuario, estado_usuario, cidade_usuario, bairro_usuario, endereco_usuario, biografia_usuario) VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        // Verifica se a preparação da declaração SQL foi bem-sucedida
        if ($stmt === false) {
            echo "Erro ao preparar a declaração SQL: " . $conn->error;
            return;
        }
        
        // Liga os parâmetros da declaração SQL aos valores obtidos do formulário
        $stmt->bind_param("sisssss", $nome, $idade, $estado, $cidade, $bairro, $endereco, $biografia);
        
        // Executa a declaração SQL
        if ($stmt->execute()) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro ao inserir dados no banco de dados: " . $stmt->error;
        }
        
        // Fecha a declaração SQL
        $stmt->close();
        // Fecha a conexão com o banco de dados
        $conn->close();
    }
?>
