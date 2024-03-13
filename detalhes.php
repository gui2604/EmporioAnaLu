<?php require("conectionDB.php"); ?>
<?php

if (isset($_GET['idProduto'])) {
    $idProduto = $_GET['idProduto'];
};

$query_rs_produto = "SELECT * FROM tb_produtos WHERE tb_produtos.ativo = 1 AND tb_produtos.idProduto = $idProduto;";
$query_rs_maisprocurados = "SELECT * FROM tb_produtos WHERE tb_produtos.ativo = 1 AND tb_produtos.home = 1;";

$rs_produto = mysqli_query($conn_bd_emporio, $query_rs_produto) or die(mysqli_error($conn_bd_emporio));
$rs_maisprocurados = mysqli_query($conn_bd_emporio, $query_rs_maisprocurados) or die(mysqli_error($conn_bd_emporio));

$totalRow_rs_produto = mysqli_num_rows($rs_produto);

$row_rs_produto = mysqli_fetch_assoc($rs_produto);
$row_rs_maisprocurados = mysqli_fetch_assoc($rs_maisprocurados);

$nome_do_produto = $row_rs_produto["nome"];
$preco_do_produto = $row_rs_produto["preco"];
$mensagem_whatsapp = "Olá, estou interessado no produto: $nome_do_produto. Preço: $preco_do_produto";
$mensagem_whatsapp_encoded = urlencode($mensagem_whatsapp);
$numero_vendedor = '5511947242147';
$link_whatsapp = "https://api.whatsapp.com/send?phone=$numero_vendedor&text=$mensagem_whatsapp_encoded";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=<?php echo $tela ?>">
    <title>Detalhes do produto
        <?php echo $row_rs_produto["nome"]; ?>
    </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php include "head_comon.php"; ?>
</head>

<body style="text-align:center;">
    <?php include "header.php"; ?>

    <main class="container-fluid" style="margin:0;padding:0;">
        <br>
        <section class="row" style="margin: 3%;">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 d-flex flex-column justify-content-center"><a href="./assets/imagens/<?php echo ($row_rs_produto["imagem"]) ?>" title="<?php echo $row_rs_produto["nome"]; ?>" data-lightbox="example-1"> <img src="assets/imagens/<?php echo $row_rs_produto["imagemThumb"]; ?>" alt="<?php echo $row_rs_produto["nome"]; ?>" title="<?php echo $row_rs_produto["nome"]; ?>" class="imagem_produto" style="border-radius:2rem;"></a></div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 d-flex flex-column justify-content-center">
                <h2 class="titulo_produto" style="color:#F2C894;">
                    <?php echo $row_rs_produto["nome"]; ?>
                </h2>
                <p class="descricao_produto">
                    <?php echo $row_rs_produto["descricao"]; ?>
                </p>
                <p class="preco_produto">Preço: R$
                    <?php echo $row_rs_produto["preco"]; ?>
                </p>
                <a href="<?php echo $link_whatsapp; ?>" target="_blank" title="<?php echo $row_rs_produto["nome"]; ?>" class="botoes" style="margin-bottom:50px;"><button type="button" class="texto-reset" style="font-size:2rem;background-color:#261B14;border-radius:1rem;width:225px;">Tenho Interesse</button></a>
            </div>
        </section>
        <br>

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