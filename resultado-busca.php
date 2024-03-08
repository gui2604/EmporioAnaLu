<?php require("conectionDB.php"); ?>
<?php

if (isset($_GET["produto"])) {
    $produto = mysqli_escape_string($conn_bd_emporio, $_GET["produto"]);
};

$query_rs_produto = "SELECT * FROM tb_produtos WHERE tb_produtos.ativo = 1 AND tb_produtos.nome LIKE '%$produto%' OR tb_produtos.descricao LIKE '%$produto%'";
$query_rs_maisprocurados = "SELECT * FROM tb_produtos WHERE tb_produtos.ativo = 1 AND tb_produtos.home = 1 LIMIT 6;";
$rs_produto = mysqli_query($conn_bd_emporio, $query_rs_produto) or die(mysqli_error($conn_bd_emporio));
$rs_maisprocurados = mysqli_query($conn_bd_emporio, $query_rs_maisprocurados) or die(mysqli_error($conn_bd_emporio));
$row_rs_produto = mysqli_fetch_assoc($rs_produto);
$row_rs_maisprocurados = mysqli_fetch_assoc($rs_maisprocurados);
$totalRow_rs_produto = mysqli_num_rows($rs_produto);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=<?php echo $tela ?>">
    <title>Resultado da Busca</title>
    <meta name="description" content="Produtos resultado de pesquisa do Mini Empório AnaLu">
    <meta name="keywords" content="Emporio, AnaLu, Minas, Minas Gerais, Gerais, Queijos, Doces, Produtos de Minas">
    <?php include("head_comon.php"); ?>
</head>

<body>
    <?php include("header.php"); ?>

    <main class="container-fluid" style="text-align:center;margin:0;padding:0;">
        <?php
        if ($totalRow_rs_produto > 0) {
            include "conteudo.php";
        } else {
            echo "<div style='color:white;height:500px;display:flex;justify-content:center;align-items:center;'>Nenhum produto encontrado.</div>";
        }
        ?>

        <?php include("lowMain.php"); ?>
    </main>

    <?php include("footer.php"); ?>

    <?php include("scripts.php"); ?>
    <?php
    //mysqli_free_result($rs_produtos);
    //mysqli_free_result($rs_maisprocurados);
    mysqli_close($conn_bd_emporio);
    ?>
</body>

</html>