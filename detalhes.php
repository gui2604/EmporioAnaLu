<?php require("conectionDB.php");?>
<?php
$query_rs_produto = "SELECT * FROM tb_produtos INNER JOIN tb_areas ON tb_produtos.idArea = tb_areas.idArea WHERE tb_produtos.ativo = 1 AND tb_produtos.idCurso = $idProduto;";
$query_visitas = "SELECT visualizacao FROM tb_produtos WHERE tb_produtos.ativo = 1 AND tb_produtos.idProduto = $idProduto;";
$query_incremento_visitas = "UPDATE tb_produtos SET visualizacao = visualizacao + 1 WHERE idProduto = $idProduto;";

$rs_produto = mysqli_query( $conn_bd_emporio, $query_rs_produto )or die( mysqli_error( $conn_bd_emporio ) );
$rs_visitas = mysqli_query( $conn_bd_emporio, $query_rs_visitas )or die( mysqli_error( $conn_bd_emporio ) );
$rs_incremento = mysqli_query( $conn_bd_emporio, $query_rs_incremento )or die( mysqli_error( $conn_bd_emporio ) );
$totalRow_rs_produto = mysqli_num_rows( $rs_produto );
$row_rs_produto = mysqli_fetch_assoc( $rs_produto );

if(isset($_GET['idProduto'])){
    //criando a variável para consultar por ID e usar como passagem de parâmetro no link de detalhes
    $idCurso = $_GET['idProduto'];
};
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queijos do Mini Empório AnaLu</title>
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