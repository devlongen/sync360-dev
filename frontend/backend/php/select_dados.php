<?php
    // Inclui o arquivo de conexão com o banco de dados
    require_once('conn.php');

    // Query para selecionar os dados do último usuário cadastrado
    $query = "SELECT nome_usuario, idade_usuario, estado_usuario, cidade_usuario, bairro_usuario, endereco_usuario, biografia_usuario, imagem_usuario
              FROM usuario 
              ORDER BY id_usuario DESC
              LIMIT 1";

    // Executa a query no banco de dados
    $resultado = $conexao->query($query);

    // Verifica se a query retornou algum resultado
    if ($resultado->num_rows > 0) {
        // Obtém a primeira linha do resultado como um array associativo
        $row = $resultado->fetch_assoc();

        // Atribui os valores dos campos do banco de dados a variáveis
        $imagem = $row["imagem_usuario"];
        $nome = $row["nome_usuario"];
        $idade = $row["idade_usuario"];
        $estado = $row["estado_usuario"];
        $cidade = $row["cidade_usuario"];
        $bairro = $row["bairro_usuario"];
        $endereco = $row["endereco_usuario"];
        $biografia = $row["biografia_usuario"];
        $imagem = $row['imagem_usuario'];
    } else {
        // Se não houver resultados, exibe uma mensagem de erro
        echo "Nenhum resultado encontrado.";
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
?>
