<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título da página -->
    <title>Dev-Longen</title>
    <!-- Ícone da página -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="frontend/dist/css/style.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <!-- Título do cabeçalho -->
        <h1 class="titulo_header">Seja muito bem vindo!</h1>
    </header>

    <!-- Seção 1 - exibição das informações pessoais -->
    <section class="secao_1">
        <!-- Inclusão do arquivo PHP para seleção dos dados -->
        <?php include_once('frontend/backend/php/select_dados.php')?>

        <!-- Título da seção de informações pessoais -->
        <h1 class="perfil_user">Minhas informações pessoais:</h1>

        <!-- Div para exibição da foto de perfil -->
        <div class="foto_padrao">
            <!-- Imagem de perfil -->
            <img src="<?php echo $imagem;?>" alt="">
        </div>

        <!-- Div para exibição das informações pessoais -->
        <div class="perfil_info">
            <!-- Informações pessoais -->
            <p id="nome_atualizado"><strong>Nome:</strong> <?php echo $nome;?></p>
            <p id="idade_atualizado"><strong>Idade:</strong> <?php echo $idade;?></p>
            <p id="estado_atualizado"><strong>Estado:</strong> <?php echo $estado;?></p>
            <p id="cidade_atualizado"><strong>Cidade:</strong> <?php echo $cidade;?></p>
            <p id="bairro_atualizado"><strong>Bairro:</strong> <?php echo $bairro;?></p>
            <p id="endereco_atualizado"><strong>Endereço:</strong> <?php echo $endereco;?></p>
            <!-- Biografia -->
            <p id="biografia_atualizado"><strong>Biografia:</strong> <?php echo $biografia;?></p>
        </div>
    </section>

    <!-- Seção 2 - formulário para atualização das informações -->
    <section class="secao_2">
        <!-- Formulário -->
        <form action="frontend/backend/php/inserir_dados.php" method="post" id="form_atualizacao" enctype="multipart/form-data"> 
            <!-- Título da seção de atualização das informações -->
            <h1 id="informacoes_texto"> Atualizar suas informações pessoais:</h1>

            <!-- Div para seleção de imagem de perfil -->
            <div class="foto_perfil" id="foto_perfil" onclick="troca_foto_perfil()">
                <!-- Ícone para seleção de imagem -->
                <img src="frontend/dist/img/upload-icon-png-21.png" alt="">
                <!-- Input para seleção de arquivo de imagem -->
                <input type="file" name="imagem_banco" id="upload_perfil" accept="image/*">
            </div>  

            <!-- Campos para atualização das informações pessoais -->
            <input type="text" placeholder="Seu nome:" name="nome_banco" id="nome_pessoal" maxlength="40">
            <input type="number" placeholder="Sua idade:" name="idade_banco" id="idade_pessoal">
            <!-- Select para escolha do estado -->
            <select name="estado_banco" id="estado">
                <option value="" id="">Selecione...</option>
            </select>
            <input type="text" name="cidade_banco" id="cidade_pessoal" placeholder="Sua Cidade:" maxlength="35">
            <input type="text" placeholder="Seu Bairro:" name="bairro_banco" id="bairro_pessoal" maxlength="35">
            <input type="text" placeholder="Seu endereço:" name="endereco_banco" id="endereco_pessoal" maxlength="35">
            <!-- Textarea para a biografia -->
            <textarea name="biografia_banco" id="biografia_pessoal" placeholder="Biografia:" maxlength="300"></textarea>
            <!-- Botão para atualização dos dados -->
            <input type="submit" value="Atualizar dados" id="botao_atualizar">
        </form>
    </section>

    <!-- Rodapé -->
    <footer>
        <!-- Informações do rodapé -->
        <h3>© Criado por desenvolvedor Iago Longen</h3>
    </footer>

    <!-- Script JavaScript -->
    <script src="frontend/dist/js/script.js"></script>
</body>
</html>
