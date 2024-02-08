<?php 
$hostname_conn_bd_emporio = "localhost";
$database_conn_bd_emporio = "bd_emporio";
$username_conn_bd_emporio = "root";
$password_conn_bd_emporio = "";
$conn_bd_emporio = mysqli_connect($hostname_conn_bd_emporio, $username_conn_bd_emporio, $password_conn_bd_emporio, $database_conn_bd_emporio) or trigger_error(mysqli_connect_errno(), E_USER_ERROR);
?>
