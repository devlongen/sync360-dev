<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev-Longen</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="frontend/dist/css/style.css"> <!-- Inclui o arquivo de estilo CSS -->
</head>
<body>
    <header>
        <h1 class="titulo_header">Seja muito bem vindo!</h1> <!-- Título do cabeçalho -->
    </header>
    <section class="secao_1">
        <?php include_once('frontend/backend/php/select_dados.php')?>
        
        <h1 class="perfil_user">Minhas informações pessoais:</h1> <!-- Título da seção de informações pessoais -->
        <div class="foto_padrao">
            <img src="<?php echo $imagem;?>" alt=""> <!-- Imagem de perfil -->
        </div>
        <div class="perfil_info">
            <!-- Informações pessoais -->
            <p id="nome_atualizado" ><strong>Nome:</strong> <?php echo $nome;?></p>
            <p id="idade_atualizado"><strong>Idade:</strong> <?php echo $idade;?></p>
            <p id="estado_atualizado"><strong>Estado:</strong> <?php echo $estado;?></p>
            <p id="cidade_atualizado"><strong>Cidade:</strong> <?php echo $cidade;?></p>
            <p id="bairro_atualizado"><strong>Bairro:</strong> <?php echo $bairro;?></p>
            <p id="endereco_atualizado"><strong>Endereço:</strong> <?php echo $endereco;?></p>
            <p></p>
            <p id="biografia_atualizado"><strong>Biografia:</strong> <?php echo $biografia;?></p>
        </div>
    </section>
    <section class="secao_2">
        <form action="frontend/backend/php/inserir_dados.php" method="post" id="form_atualizacao" enctype="multipart/form-data"> 
            <h1 id="informacoes_texto"> Atualizar suas informações pessoais:</h1> <!-- Título da seção de atualização de informações -->
            <div class="foto_perfil" id="foto_perfil" onclick="troca_foto_perfil()"> <!-- Div para selecionar imagem de perfil -->
                <img src="frontend/dist/img/upload-icon-png-21.png" alt=""> <!-- Ícone para selecionar imagem -->
                <input type="file" name="imagem_banco" id="upload_perfil" accept="image/*"> <!-- Input para selecionar arquivo de imagem -->
            </div>  
            <!-- Campos para atualização das informações pessoais -->
            <input type="text" placeholder="Seu nome:" name="nome_banco" id="nome_pessoal" maxlength="40">
            <input type="number" placeholder="Sua idade:" name="idade_banco" id="idade_pessoal">
            <select name="estado_banco" id="estado"> <!-- Select para escolher o estado -->
                <option value="" id="">Selecione...</option>
            </select>
            <input type="text" name="cidade_banco" id="cidade_pessoal" placeholder="Sua Cidade:" maxlength="35">
            <input type="text" placeholder="Seu Bairro:" name="bairro_banco" id="bairro_pessoal" maxlength="35">
            <input type="text" placeholder="Seu endereço:" name="endereco_banco" id="endereco_pessoal" maxlength="35">
            <textarea name="biografia_banco" id="biografia_pessoal" placeholder="Biografia:" maxlength="300"></textarea> <!-- Textarea para a biografia -->
            <input type="submit" value="Atualizar dados" id="botao_atualizar"> <!-- Botão para atualizar os dados -->
        </form>
    </section>
    <footer>
        <h3>© Criado por desenvolvedor Iago Longen</h3> <!-- Rodapé -->
    </footer>
    <script src="frontend/dist/js/script.js"></script> <!-- Script principal -->
</body>
</html>
