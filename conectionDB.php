<?php 
/*
$hostname_conn_bd_emporio = "localhost";
$database_conn_bd_emporio = "bd_emporio";
$username_conn_bd_emporio = "root";
$password_conn_bd_emporio = "";
*/




//Conexão com servidor LOCAWEB
$hostname_conn_bd_emporio = "robb0463.publiccloud.com.br:3306";
$database_conn_bd_emporio  = "ctsdigital2011_bdemporio";
$username_conn_bd_emporio  = "ctsdi_analu";
$password_conn_bd_emporio  = "Doorsoftware22@!";
//Criando a conexão usando as variáveis






$conn_bd_emporio = mysqli_connect($hostname_conn_bd_emporio, $username_conn_bd_emporio, $password_conn_bd_emporio, $database_conn_bd_emporio) or trigger_error(mysqli_connect_errno(), E_USER_ERROR);

mysqli_set_charset($conn_bd_emporio, 'utf8');
?>
