<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('genero: ' . $_POST['genero']);
        // print_r('<br>');

        include_once('conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $sexo = $_POST['genero'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,endereco,genero,data_nasc,) 
        VALUES ('$nome','$email','$telefone','$endereco','$data_nasc','$genero')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Clientes</title>
    <link rel="stylesheet" href="Style.css">
    <body>
        <div class="box">
            <form action="">
                <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <input type="text" name="nome" id="nome" placeholder="Nome" required>
                <br><br>
                <input type="text" name="email" id="email" placeholder="Email" required>
                <br><br>
                <input type="tel" name="telefone" id="telefone" placeholder="telefone" required>
                <br><br>
                <input type="text" name="endereco" id="endereco" placeholder="endereço" required>
                <br><br>
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <p>Genero:</p>
                <input type="radio" name="Genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" name="Genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" name="Genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <button type="submit">Enviar</button>
                <br><br>
                <button type="reset">Limpar</button>
                </fieldset>
            </form>
        </div>
    </body>
</html>