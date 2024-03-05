<?php 
include "adm_autenticacao.php";
require "conectionDB.php";
//echo md5("doorsoftware23@!"); //f11a12946b54d2290a7a2c8ebdb69318
if (isset($_POST["submit"])){
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);
    $query_cadastrar = "INSERT INTO tb_login (idLogin, dataCad, email, senha) VALUES (NULL, CURRENT_TIMESTAMP(), '$email', '$senha');";
    $rs_cadastrar = mysqli_query($conn_bd_emporio, $query_cadastrar) or die(mysqli_error($conn_bd_emporio));

    if ($rs_cadastrar == true){
        echo '<script>alert("Usuário cadastrado com sucesso!");
        window.location.href="adm-lista.php";</script>';
    } else {
        echo "<script>alert('FALHA AO CADASTRAR USUARIO!');window.location.href='adm-cadastro.php';</script>'";
    };
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>

</head>
<body style="text-align:center;">
    <img src="./assets/imagens/logo_analu.png">
    <h1>Cadastrar Usuário Administrador</h1>
    <form method="post" enctype="multipart/form-data">
        Email: <input type="email" name="email" id="email" required><br><br>
        Senha: <input type="password" name="senha" id="senha" maxlength="32" required><br><br>
        <input type="submit" name="submit" id="submit">
    </form>

</body>
</html>