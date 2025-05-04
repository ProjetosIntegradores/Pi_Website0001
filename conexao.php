<?php
$db_host = 'localhost'; // Database host
$db_username = '<username>'; // Database username
$db_password = '<password>'; // Database password
$db_Name = 'formulario'; // Database name
$conexao = new mysqli( $db_host, $db_username, $db_password, $db_Name);
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
} else {
    // echo "Connected successfully";
}
?>