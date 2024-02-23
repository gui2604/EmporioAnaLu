<?php
    session_start();
    session_destroy(); //destruir todas as sessoes logadas
    header("Location: adm_login.php");
    exit();
?>