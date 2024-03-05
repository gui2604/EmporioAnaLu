<?php 
session_start();
require "conectionDB.php";

//Verificação se o campo email ou senha for vazio (apesar dos campos de email e senha da página de login possuirem o atributo "required" esta é mais uma camada de segurança para tentativas de burlar o HTML e acessar as páginas administrativas sem precisar preencher o campo)
if(empty($_POST["email"]) || empty($_POST["senha"])){
    header("Location: adm_login.php");
    exit();
};

if(isset($_POST["submit"])){
    $email = mysqli_real_escape_string($conn_bd_emporio, $_POST["email"]);
    $senha = md5(mysqli_real_escape_string($conn_bd_emporio, $_POST["senha"]));
};

//consulta de usuário
$query_login = "SELECT * FROM tb_login WHERE email = '$email' AND senha = '$senha';";
$rs_login = mysqli_query($conn_bd_emporio, $query_login) or die(mysqli_error($conn_bd_emporio));
$totalRow_rs_login = mysqli_num_rows($rs_login); //1 é logado com sucesso e 0 usuário não encontrado

if($totalRow_rs_login == 1){
    $_SESSION["email"] = $email; //iniciar a sessão no início do documento
    header("Location: adm-lista.php");
} else {
    header("Location: adm_erro.php");
};

exit();
?>