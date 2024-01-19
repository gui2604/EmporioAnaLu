<?php require("conectionDB.php"); ?>
<?php
$query_rs_produto = "SELECT * FROM tb_produtos INNER JOIN tb_categorias ON tb_produtos.idCategoria = tb_categorias.idCategoria WHERE tb_produtos.ativo = 1 AND tb_produtos.home = 1 ORDER BY tb_produtos.idProduto DESC";
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
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php include("head_comon.php"); ?>
</head>

<body>
    <?php include("header.php"); ?>

    <main class="container-fluid" style="text-align:center;">
        <!-- Start wowslider BODY section -->
        <section id="carouselExample" class="carousel" >
            <div class="carousel-inner container-fluid ">
                <div class="carousel-item active">
                    <img src="./assets/imagens/bananada.jpg" class="" alt="..." style="max-width:100%;">
                    <img src="./assets/imagens/cocadaCremosa_450x600.jpg" class="" alt="..." style="max-width:100%;">
                    <img src="./assets/imagens/queijo_napolitano.png" class="" alt="..." style="max-width:100%;">
                </div>

                <div class="carousel-item">
                    <img src="./assets/imagens/queijoParmesao_450x600.jpeg" class="" alt="..." style="max-width:100%;">
                    <img src="./assets/imagens/goiabada_lata.png" class="" alt="..." style="max-width:100%;">
                    <img src="./assets/imagens/qzeroLactose_450x600.jpeg" class="" alt="..." style="max-width:100%;">
                </div>

                <div class="carousel-item">
                    <img src="./assets/imagens/meiaCura_450x600.jpeg" class="" alt="..." style="max-width:100%;">
                    <img src="./assets/imagens/vinho.jpg" class="" alt="..." style="max-width:100%;">
                    <img src="./assets/imagens/goiabada_bloco.jpg" class="" alt="..." style="max-width:100%;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>
        <!-- End wowslider BODY section -->

        <?php include("lowMain.php"); ?>
    </main>

    <?php include("footer.php"); ?>

    <?php include("scripts.php"); ?>
</body>

</html>