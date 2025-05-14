<?php
session_start();
include_once('conexao.php');

// Verifica se o usuário está logado
if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: TeladeLogin.php');
    exit();
} else {
    $logado = $_SESSION['usuario'];
}

// Verifica se há um termo de pesquisa
if (!empty($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM clientes WHERE nome LIKE '%$search%' OR email LIKE '%$search%' OR telefone LIKE '%$search%' ORDER BY id DESC";
} else {
    $sql = "SELECT * FROM clientes ORDER BY id DESC";
}

$result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Sistema Gerenciador</title>
    <body>
    <nav class="navbar">
        <h2 class="text-center">Sistema Gerenciador</h2>
            <a href="Sair.php">Sair</a>
        </div>
    </nav>
    <?php echo "<h1 class='text-center mt-5'>Bem-vindo, $logado!</h1>";?>
    <br>
    <div class="box-search">
    <input type="search" placeholder="Pesquisar" id="pesquisar">
    <button onclick="searchData()">Search</button> 
</div> <br>
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nome</th>
                    <th scope="col">email</th>
                    <th scope="col">telefone</th>
                    <th scope="col">endereço</th>
                    <th scope="col">data_nascimento</th>
                    <th scope="col">genero</th>
                    <th scope="col">edit</th>
                    <th scope="col">del</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) { 
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>".$user_data['data_nascimento']."</td>";
                        echo "<td>".$user_data['genero']."</td>";
                        echo "<td> <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]' title='Editar'>Editar</a>.</td>";
                        echo "<td> <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]' title='Deletar'>Deletar</a>.</td>";
                        echo "</tr>";}
                    ?>
            </tbody>
        </table>
    </div>
    </body>
<script>
    function searchData() {
        const search = document.getElementById('pesquisar').value;
        window.location = 'Sistema.php?search=' + search;
    }
</script>
</head>
</html>