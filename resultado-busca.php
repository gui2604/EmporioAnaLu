<?php require("conectionDB.php");?>
<?php

if (isset($_GET["produto"])){
    $produto = $_GET["produto"];
}

$query_rs_produto = "SELECT * FROM tb_produtos WHERE tb_produtos.ativo = 1 AND tb_produtos.nome LIKE '%$produto%' OR tb_produtos.descricao LIKE '%$produto%'";
$rs_produto = mysqli_query( $conn_bd_emporio, $query_rs_produto )or die( mysqli_error( $conn_bd_emporio ) );
$totalRow_rs_produto = mysqli_num_rows( $rs_produto );
$row_rs_produto = mysqli_fetch_assoc( $rs_produto );
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Busca</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php include("head_comon.php"); ?>
</head>

<body>
    <?php include("header.php"); ?> 

    <main class="container-fluid">
        <?php include("conteudo.php"); ?>

        <?php include("lowMain.php"); ?>
    </main>

    <?php include("footer.php"); ?>

    <?php include("scripts.php"); ?>
</body>

</html>