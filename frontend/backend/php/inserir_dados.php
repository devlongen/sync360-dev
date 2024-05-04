<?php
    // Verifica se o método da requisição é POST e se o formulário de atualização foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Inclui o arquivo de conexão com o banco de dados
        require_once('conn.php');
        
        // Obtém os dados do formulário e verifica se estão definidos
        $nome = isset($_POST['nome_banco']) ? $_POST['nome_banco'] : '';
        $idade = isset($_POST['idade_banco']) ? $_POST['idade_banco'] : '';
        $estado = isset($_POST['estado_banco']) ? $_POST['estado_banco'] : '';
        $cidade = isset($_POST['cidade_banco']) ? $_POST['cidade_banco'] : '';
        $bairro = isset($_POST['bairro_banco']) ? $_POST['bairro_banco'] : '';
        $endereco = isset($_POST['endereco_banco']) ? $_POST['endereco_banco'] : '';
        $biografia = isset($_POST['biografia_banco']) ? $_POST['biografia_banco'] : '';
        
        if (isset($_FILES["imagem_banco"]) && !empty($_FILES["imagem_banco"])) {
            // Diretório onde as imagens serão salvas
            $diretorio = "./img/";
        
            // Verifica se o diretório existe, se não, tenta criá-lo
            if (!file_exists($diretorio)) {
                // Tenta criar o diretório
                if (!mkdir($diretorio, 0777, true)) {
                    // Se não conseguir criar o diretório, mostra uma mensagem de erro e sai do script
                    echo "Erro ao criar o diretório para salvar as imagens.";
                    exit;
                }
            }
        
            // Caminho completo para a imagem
            $diretorio = "frontend/backend/php/img/";
            $imagem = $diretorio . $_FILES["imagem_banco"]["name"];
        
            // Move o arquivo para o diretório de destino
            if (move_uploaded_file($_FILES["imagem_banco"]["tmp_name"], $imagem)) {
                echo "Imagem salva com sucesso.";
            } else {
                echo "Erro ao salvar a imagem.";
            }
        } else {
            $imagem = ""; // Define uma string vazia se nenhum arquivo for enviado
        }
        // Prepara a declaração SQL para inserção de dados na tabela 'usuario'
        $stmt = $conexao->prepare("INSERT INTO usuario (nome_usuario, idade_usuario, estado_usuario, cidade_usuario, bairro_usuario, endereco_usuario, biografia_usuario, imagem_usuario) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        
        // Verifica se a preparação da declaração SQL foi bem-sucedida
        if ($stmt === false) {
            echo "Erro ao preparar a declaração SQL: " . $conexao->error;
            exit; // Encerra o script
        }
        
        // Liga os parâmetros da declaração SQL aos valores obtidos do formulário
        $stmt->bind_param("sissssss", $nome, $idade, $estado, $cidade, $bairro, $endereco, $biografia, $imagem);
        
        // Executa a declaração SQL
        if ($stmt->execute()) {
            header("location: ../../../");
        } else {
            echo "Erro ao inserir dados no banco de dados: " . $stmt->error;
        }
        
        // Fecha a declaração SQL
        $stmt->close();
        // Fecha a conexão com o banco de dados
        $conn->close();
    }
?>
