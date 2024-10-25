<?php
// Configurações do banco de dados
$servername = "localhost"; // Ou o endereço do seu servidor de banco de dados
$username = "root"; 
$password = "escola";
$dbname = "Kanequinhas"; 

// Cria a conexão
$conexao = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>
