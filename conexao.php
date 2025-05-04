<?php
$db_host = 'localhost'; // Database host
$db_username = 'root'; // Database username
$db_password = 'a1s2d3f4'; // Database password
$db_Name = 'formulario_clientes'; // Database name
$conexao = new mysqli($db_host, $db_username, $db_password, $db_Name);
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
} else {
    // echo "Connected successfully";
}
?>