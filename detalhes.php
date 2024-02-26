<?php require("conectionDB.php"); ?>
<?php

if (isset($_GET['idProduto'])) {
    $idProduto = $_GET['idProduto'];
}
;

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do produto
        <?php echo $row_rs_produto["nome"]; ?>
    </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php include("head_comon.php"); ?>
</head>

<body style="text-align:center;">
    <?php include("header.php"); ?>

    <main class="container-fluid" style="margin:0;padding:0;">
        <br>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class="product-title" style="color:#F27457;font-size:3.5rem;">
                    <?php echo $row_rs_produto["nome"]; ?>
                </h2>
                <div class=""><a href="./assets/imagens/<?php echo $row_rs_produto["imagem"]; ?>"
                        title="<?php echo $row_rs_produto["nome"]; ?>" data-lightbox="example-1">
                        <img src="./assets/imagens/<?php echo $row_rs_produto["imagem"]; ?>"
                            alt="<?php echo $row_rs_produto["nome"]; ?>"
                            style="max-width:1200px;max-height:500px;border-radius:2rem;"></a>
                </div>
                <br>
                <p class="descricao_produto">
                    <?php echo $row_rs_produto["descricao"]; ?>
                </p>
                <div class="preco_produto">Preço: R$
                    <?php echo $row_rs_produto["preco"]; ?>
                </div>
                <a href="<?php echo $link_whatsapp ?>" title="" class="botoes"><button type="button" class="texto-reset"
                        style="font-size:2rem;background-color:#261B14;border-radius:1rem;width:225px;">Comprar</button></a>
            </div>
        </div>
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