<?php
$db_host = "localhost"; // Nome do servidor
$db_username = "root"; // Usuário do banco de dados
$db_password = ""; // Senha do banco de dados
$db_Name = "formulario_clientes"; // Nome do banco de dados
$conexao = new mysqli( $db_host, $db_username, $db_password, $db_Name);
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}
?>