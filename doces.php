<?php require("conectionDB.php");?>
<?php
$query_rs_produto = "SELECT * FROM tb_produtos INNER JOIN tb_categorias ON tb_produtos.idCategoria = tb_categorias.idCategoria WHERE tb_produtos.ativo = 1 AND tb_produtos.idCategoria = 3 ORDER BY tb_produtos.idProduto DESC";
$query_rs_maisprocurados = "SELECT * FROM tb_produtos WHERE tb_produtos.ativo = 1 AND tb_produtos.home = 1 LIMIT 6;";
$rs_produto = mysqli_query( $conn_bd_emporio, $query_rs_produto )or die( mysqli_error( $conn_bd_emporio ) );
$rs_maisprocurados = mysqli_query($conn_bd_emporio, $query_rs_maisprocurados) or die(mysqli_error($conn_bd_emporio));
$row_rs_produto = mysqli_fetch_assoc( $rs_produto );
$row_rs_maisprocurados = mysqli_fetch_assoc($rs_maisprocurados);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doces do Mini Empório AnaLu</title>
    <meta name="description" content="Diversos Tipos De Doce Como Doce de leite, Goiabada, Bananada, Cocada e Muito Mais">
    <meta name="keywords" content="Doces, Goiabada, Doce De Leite, Bananada, Cocada Cremosa">
    <?php include("head_comon.php"); ?>
</head>

<body>
    <?php include("header.php"); ?> 

    <main class="container-fluid" style="text-align:center;">
        <?php include("conteudo.php"); ?>  

        <?php include("lowMain.php"); ?>
    </main>

    <?php include("footer.php"); ?>

    <?php include("scripts.php"); ?>
    <?php
    mysqli_free_result($rs_produto);
    mysqli_free_result($rs_maisprocurados);
    mysqli_close($conn_bd_emporio);
    ?>
</body>

</html>