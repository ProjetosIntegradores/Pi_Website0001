<?php
if (isset($_POST['update'])) {
    include_once 'conexao.php';

    // Recebe os dados do formulário
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero']; // Recebe o valor do gênero

    // Atualiza os dados no banco de dados
    $sql = "UPDATE clientes SET nome='$nome', email='$email', telefone='$telefone', endereco='$endereco', data_nascimento='$data_nascimento', genero='$genero' WHERE id='$id'";

    if (mysqli_query($conexao, $sql)) {
        echo "<script>alert('Dados atualizados com sucesso!');</script>";
        header('Location: Sistema.php');
        exit();
    } else {
        echo "<script>alert('Erro ao atualizar os dados: " . mysqli_error($conexao) . "');</script>";
        header('Location: Sistema.php');
    }

    mysqli_close($conexao);
}
?>