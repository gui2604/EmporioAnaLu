<?php 
//métodos de conexão com o BD mysqli, mysql e pdo
//(utilizar método mysqli, mais seguro e atualizado)
// Conexão localhost
$hostname_conn_bd_emporio = "localhost";
$database_conn_bd_emporio = "bd_emporio";
$username_conn_bd_emporio = "root";
$password_conn_bd_emporio = "";
//criando a conexão usando as variáveis
$conn_bd_emporio = mysqli_connect($hostname_conn_bd_emporio, $username_conn_bd_emporio, $password_conn_bd_emporio, $database_conn_bd_emporio) or trigger_error(mysqli_connect_errno(), e_user_error);
//verificação da conexão
//echo("Conectado com sucesso!");
?>
