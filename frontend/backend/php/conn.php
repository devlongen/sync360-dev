<?php 
    // Definição dos dados de conexão com o banco de dados
    $dbHost = 'localhost';        // Endereço do banco de dados
    $dbUser =  'root';             // Usuário do banco de dados
    $dbPassword = '';              // Senha do banco de dados
    $dbDatabase =  'banco_sync360';  // Nome do banco de dados

    // Tentativa de conexão com o banco de dados
    $conexao = new mysqli($dbHost, $dbUser, $dbPassword, $dbDatabase);

?>
