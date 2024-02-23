<?php 
session_start();

//se a sessão do usuário não existir 
if(!$_SESSION["email"]){
    header ('Location: index.php');
    exit();
};
?>