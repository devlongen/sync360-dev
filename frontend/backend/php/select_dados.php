    <?php 
        require_once('conn.php');
        $query = "SELECT nome_usuario, idade_usuario, estado_usuario, cidade_usuario, bairro_usuario, endereco_usuario, biografia_usuario, imagem_usuario
                FROM usuario 
                ORDER BY id_usuario DESC
                LIMIT 1";

        $resultado = $conexao->query($query);
        if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
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
        echo "Nenhum resultado encontrado.";
    }
    $conexao->close();
    ?>
