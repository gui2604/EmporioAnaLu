<?php require("conectionBD.php");?>
<?php
$query_rs_produto = "SELECT * FROM tb_produtos INNER JOIN tb_categorias ON tb_produtos.idCategoria = tb_categorias.idCategoria WHERE tb_produtos.ativo = 1 AND tb_produtos.idCategoria = 2 ORDER BY tb_produtos.idProduto DESC";
$rs_produto = mysqli_query( $conn_bd_emporio, $query_rs_produto )or die( mysqli_error( $conn_bd_emporio ) );
$totalRow_rs_produto = mysqli_num_rows( $rs_produto );
$row_rs_produto = mysqli_fetch_assoc( $rs_produto );
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pães de Queijo do Mini Empório AnaLu</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php include("head_comon.php"); ?>
</head>

<body>
    <?php include("header.php"); ?> 

    <main class="container-fluid">
        <?php include("conteudo.php"): ?>

        <?php include("lowMain.php"); ?>
    </main>

    <?php include("footer.php"); ?>

    <?php include("scripts.php"); ?>
</body>

</html>