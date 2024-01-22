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
        <section>
            <div id="wowslider-container1">
                <div class="ws_images slideshow_imagens">
                    <ul>
                        <li class="slideshow_item"><img src="./assets/galeria/data1/images/vinho.jpg"
                                style="border-radius:27px;" alt="" title="" id="wows1_0"></li>
                        <li class="slideshow_item"><img src="./assets/galeria/data1/images/goiabada_lata.png"
                                style="border-radius:27px;" alt="" title="" id="wows1_1"></li>
                        <li class="slideshow_item"><img src="./assets/galeria/data1/images/queijo_napolitano.png"
                                style="border-radius:27px;" alt="" title="" id="wows1_2"></li>
                        <li class="slideshow_item"><img src="./assets/galeria/data1/images/queijoParmesao_450x600.jpeg"
                                style="border-radius:27px;" alt="" title="" id="wows1_3"></li>
                        <li class="slideshow_item"><img src="./assets/galeria/data1/images/cocadaCremosa_450x600.jpg"
                                style="border-radius:27px;" alt="" title="" id="wows1_4"></li>
                        <li class="slideshow_item"><img src="./assets/galeria/data1/images/meiaCura_450x600.jpeg"
                                style="border-radius:27px;" alt="" title="" id="wows1_5"></li>
                    </ul>
                </div>
                <div class="ws_bullets">
                    <div>
                        <a href="#" title=""><span><img src="./assets/galeria/data1/images/vinho.jpg" alt=""></span></a>
                        <a href="#" title=""><span><img src="./assets/galeria/data1/images/goiabada_lata.png"
                                    alt=""></span></a>
                        <a href="#" title=""><span><img src="./assets/galeria/data1/images/bananada.jpg"
                                    alt=""></span></a>
                        <a href="#" title=""><span><img src="./assets/galeria/data1/images/queijoParmesao_450x600.jpeg"
                                    alt=""></span></a>
                        <a href="#" title=""><span><img src="./assets/galeria/data1/images/cocadaCremosa_450x600.jpg"
                                    alt=""></span></a>
                        <a href="#" title=""><span><img src="./assets/galeria/data1/images/meiaCura_450x600.jpeg"
                                    alt=""></span></a>
                    </div>
                </div>
                <div class="ws_script"><a href="#"></a></div>
                <div class="ws_shadow"></div>
            </div>
        </section>
        <!-- End wowslider BODY section -->

        <?php include("lowMain.php"); ?>
    </main>

    <?php include("footer.php"); ?>

    <?php include("scripts.php"); ?>
</body>

</html>