<?php
if (!empty($_GET["id"])) {
    include_once 'conexao.php';

    $id = $_GET['id'];

    // Consulta para buscar os dados do cliente
    $result = mysqli_query($conexao, "SELECT * FROM clientes WHERE id='$id'");

    // Verifica se o cliente existe
    if (mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);

        // Atribui os valores às variáveis
        $nome = $user_data['nome'];
        $email = $user_data['email'];
        $telefone = $user_data['telefone'];
        $endereco = $user_data['endereco'];
        $data_nascimento = $user_data['data_nascimento'];
        $genero = $user_data['genero'];
    } else {
        // Redireciona para o sistema se o ID não for encontrado
        header('Location: Sistema.php');
        exit();
    }
} else {
    // Redireciona para o sistema se o ID não for fornecido
    header('Location: Sistema.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Clientes</title>
    <link rel="stylesheet" href="Style.css">
    <body>
        <div class="box">
            <form action="saveedit.php" method="POST">
                <fieldset>
                <legend><b>Edição de Clientes</b></legend>
                <input type="text" name="nome" id="nome" placeholder="Nome" value="<?php echo $nome ?>" required>
                <br><br>
                <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $email ?>" required>
                <br><br>
                <input type="tel" name="telefone" id="telefone" placeholder="telefone" value="<?php echo $telefone ?>" required>
                <br><br>
                <input type="text" name="endereco" id="endereco" placeholder="endereço" value="<?php echo $endereco ?>" required>
                <br><br>
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nascimento ?>" required>
                <br><br>
                <p>Gênero:</p>
                <input type="radio" name="genero" id="masculino" value="masculino" <?php echo $genero == 'masculino' ? 'checked' : '' ?> required>
                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" id="feminino" value="feminino" <?php echo $genero == 'feminino' ? 'checked' : '' ?> required>
                <label for="feminino">Feminino</label>
                <input type="radio" name="genero" id="outro" value="outro" <?php echo $genero == 'outro' ? 'checked' : '' ?> required>
                <label for="outro">Outro</label>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <button type="submit" name="update" id="update">Editar</button>
                <br><br>
                <button type="button" onclick="window.location.href='Sistema.php'">Voltar</button>
                </fieldset>
            </form>
        </div>
    </body>
</html>