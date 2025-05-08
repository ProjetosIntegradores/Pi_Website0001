<?php
if (isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) {
    // Inclui a conexão com o banco de dados
    include_once('conexao.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Consulta para verificar o usuário e a senha
    $sql = "SELECT * FROM usuarios WHERE usuario = ? AND senha = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss", $usuario, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se o usuário existe
    if ($result->num_rows > 0) {
        // Login bem-sucedido
        echo "Login realizado com sucesso!";
        header('Location: PaginaInicial.html'); // Redireciona para a página inicial
        $stmt->close();
        $conexao->close();
        exit();
    } else {
        // Login falhou
        echo "<script>alert('Usuário ou senha incorretos!');</script>";
        $stmt->close();
        $conexao->close();
        header('Location: TeladeLogin.php'); // Redireciona de volta para a tela de login
        exit();
    }
} else {
    // Campos não preenchidos
    echo "<script>alert('Por favor, preencha todos os campos!');</script>";
    header('Location: TeladeLogin.php'); // Redireciona de volta para a tela de login
    exit();
}
?>