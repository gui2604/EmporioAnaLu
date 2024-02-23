<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Administrativo</title>
</head>
<body>
    <img src="./assets/imagens/logo-ctec.png" width="100">
    <h1>Acesso Administrativo</h1>
    <img src="./assets/imagens/login.gif">    
    <br><br><br>

    <form action="adm_verifica.php" method="post">
        E-mail: <input name="email" type="email" id="email" size="50" required><br><br>
        Senha: <input type="password" name="senha" id="senha" required><br><br>
        <input type="submit" name="submit" id="submit">
    </form>

</body>
</html>