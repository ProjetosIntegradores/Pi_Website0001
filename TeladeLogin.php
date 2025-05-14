<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="tela-login">
        <h1>Login</h1>
        <form action="processa_login.php" method="POST">
         <input type="text" name="usuario" placeholder="Usuário"> 
        <br><br>
         <input type="password" name= "senha" placeholder="Senha"> 
        <br><br>
        <input class="inputsubmit" type="submit" name="submit" value="Entrar">
        <br><br>
        </form>
        <a href="PaginaInicial.html">Voltar</a>
    </div>
</body>
</html>