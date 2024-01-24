<?php require("conectionDB.php"); ?>
<?php
$query_rs_produto = "SELECT * FROM tb_produtos WHERE tb_produtos.ativo = 1 ORDER BY visualizacao DESC LIMIT 3;";
$rs_produto = mysqli_query($conn_bd_emporio, $query_rs_produto) or die(mysqli_error($conn_bd_emporio));
$totalRow_rs_produto = mysqli_num_rows($rs_produto);
$row_rs_produto = mysqli_fetch_assoc($rs_produto);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Empório AnaLu</title>
    <meta name="description" content="Produtos de Minas Gerais do Mini Empório AnaLu">
    <meta name="keywords" content="Emporio, AnaLu, Minas, Minas Gerais, Gerais, Queijos, Doces, Produtos de Minas">
    <?php include("head_comon.php"); ?>
</head>

<body>
    <?php include("header.php"); ?>
    <main class="container-fluid" style="text-align:center;">
        <?php include("galeria.php"); ?>
        <?php include("lowMain.php"); ?>
    </main>
    <?php include("footer.php"); ?>
    <?php include("scripts.php"); ?>
</body>

</html>