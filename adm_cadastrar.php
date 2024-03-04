<?php 
require "conectionDB.php";
//echo md5("doorsoftware23@!"); //f11a12946b54d2290a7a2c8ebdb69318
if (isset($_POST["submit"])){
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);
}

$query_cadastrar = "INSERT INTO tb_produtos (idProduto, dataCad, email, senha) VALUES (NULL, CURRENT_TIMESTAMP(), '$email', '$senha');";
$rs_cadastrar = mysqli_query($conn_bd_emporio, $query_cadastrar) or die(mysqli_error($conn_bd_emporio));


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>
    <form method="post">
        Email: <input type="email" name="email" id="email" required><br><br>
        Senha: <input type="password" name="senha" id="senha" maxlength="32" required><br><br>
        <input type="submit" name="submit" id="submit">
    </form>

</body>
</html>