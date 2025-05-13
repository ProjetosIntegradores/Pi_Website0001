<?php
if (!empty($_GET["id"])) {
    include_once 'conexao.php';

    $id = $_GET['id'];

    // Verifica se o cliente existe antes de deletar
    $sqlSelect = "SELECT * FROM clientes WHERE id='$id'";
    $result = $conexao->query($sqlSelect);

    if ($result && $result->num_rows > 0) {
        // Deleta o cliente
        $sqlDelete = "DELETE FROM clientes WHERE id='$id'";
        $conexao->query($sqlDelete);
    }

    // Redireciona de volta para o sistema
    header('Location: Sistema.php');
    exit();
}
?>