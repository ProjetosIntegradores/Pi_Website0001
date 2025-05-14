<?php

    if(isset($_POST['submit']))
    {
         //print_r('Nome: ' . $_POST['nome']);
         //print_r('<br>');
         //print_r('Email: ' . $_POST['email']);
         //print_r('<br>');
         //print_r('Telefone: ' . $_POST['telefone']);
         //print_r('<br>');
         //print_r('Endereço: ' . $_POST['endereco']);
         //print_r('<br>');
         //print_r('Data de nascimento: ' . $_POST['data_nascimento']);
         //print_r('<br>');
         //print_r('genero: ' . $_POST['genero']);
         //print_r('<br>');

        include_once'conexao.php';

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $data_nascimento = $_POST['data_nascimento'];
        $genero = $_POST['genero'];

        $result = mysqli_query($conexao, "INSERT INTO clientes(nome,email,telefone,endereco,data_nascimento,genero) 
        VALUES ('$nome','$email','$telefone','$endereco','$data_nascimento','$genero')");
    
    //if ($result) {
        //echo "<h2>Dados Inseridos com Sucesso:</h2>";
        //echo "Nome: $nome<br>";
        //echo "Email: $email<br>";
        //echo "Telefone: $telefone<br>";
        //echo "Endereço: $endereco<br>";
        //echo "Data de Nascimento: $data_nascimento<br>";
        //echo "Gênero: $genero<br>";
    //} else {
        //echo "Erro ao inserir os dados: " . mysqli_error($conexao);
    //}
        //header('Location: Formulario.php');
        //exit();
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
            <form action="formulario.php" method="POST">
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
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <button type="submit" name="submit" id="submit">Enviar</button> <!-- Adicionado name="submit" -->
                <br><br>
                <button type="reset">Limpar</button>
                <br><br>
                <button type="button" onclick="window.location.href='PaginaInicial.html'">Voltar</button>
                </fieldset>
            </form>
        </div>
    </body>
</html>