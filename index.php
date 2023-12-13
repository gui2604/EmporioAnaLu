<?php require("conectionBD.php");?>
<?php
$query_rs_produto = "SELECT * FROM tb_produtos INNER JOIN tb_categorias ON tb_produtos.idCategoria = tb_categorias.idCategoria WHERE tb_produtos.ativo = 1 AND tb_produtos.home = 1 ORDER BY tb_produtos.idProduto DESC";
$rs_produto = mysqli_query( $conn_bd_emporio, $query_rs_produto )or die( mysqli_error( $conn_bd_emporio ) );
$totalRow_rs_produto = mysqli_num_rows( $rs_produto );
$row_rs_produto = mysqli_fetch_assoc( $rs_produto );
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Empório AnaLu</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/slideshow.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="icon" href="./assets/imagens/favicon.ico" type="image/x-icon">
    <link href="lightbox2/dist/css/lightbox.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./assets/galeria/engine1/style.css">
    <link rel="stylesheet" href="./assets/css/medias.css">
</head>

<body>
    <header class="container-fluid">
        <section class="topo">
            <!-- logo1 MiniEmpório AnaLu -->
            <a href="#"><img src="./assets/imagens/logo.png" alt="logo mini empório AnaLu"></a>
            <!-- BARRA DE PESQUISA -->
            <div class="search-bar ">
                <input type="text" placeholder="O que você procura?" id="searchInput">
                <button type="button" class="btn btn-default botao_lupa">
                    <img src="./assets/imagens/search.png" alt="imagem de lupe de pesquisa">
                </button>
            </div>
            <!-- Texto do Header -->
            <div class="header-text">
                <p>Horário de Atendimento</p>
                <p>10h às 18h</p>
            </div>
        </section>
        <!-- Barra de Navegação -->
        <nav class="d-flex">
            <li>
                <a href="" class="texto-reset">
                    <p class="texto-reset">Queijos</p>
                    <img src="./assets/imagens/cheese.png" alt="ícone de queijo">
                </a>
            </li>
            <li>
                <a href="#" class="texto-reset">
                    <p class="texto-reset">Pães de Queijo</p>
                    <img src="./assets/imagens/bread.png" alt="ícone de pão">
                </a>
            </li>
            <li>
                <a href="#" class="texto-reset">
                    <p>Doces</p>
                    <img src="./assets/imagens/candy.png" alt="ícone de doce">
                </a>
            </li>
            <li>
                <a href="#" class="texto-reset">
                    <p>Variedades</p>
                    <img src="./assets/imagens/food.png" alt="ícone de variedades">
                </a>
            </li>
            <li>
                <a href="#" class="texto-reset">
                    <p>Ofertas</p>
                    <img src="/assets/imagens/discount.png" alt="ícone de desconto">
                </a>
            </li>
        </nav>
    </header>


    <main class="container-fluid">
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
                <div class="ws_script">
                    <a href="#"></a>
                </div>
                <div class="ws_shadow"></div>
            </div>
        </section>
        <!-- End wowslider BODY section -->

        <!-- Logo2 da loja e contato do whatsapp -->
        <section class="logos">
            <img class="" src="./assets/imagens/logo_analu.png" alt="logo2 do Mini Empório Analu">
            <!-- Link que abre a conversa no whatsapp -->
            <a href="#" class="wpp"><img src="./assets/imagens/wpp.png" alt="logo do whatsapp"></a>
        </section>
    </main>

    <footer class="row container-fluid">
        <!-- Localização -->
        <section class="col col-md-4 local">
            <p>Avenida das Macieiras, nº 357</p>
            <p>Caieiras - SP</p>
            <!-- Link para o Google Maps -->
            <a href="#"><img src="./assets/imagens/maps.png" class="maps" alt=""></a>
        </section>
        <a href="#" class="col col-md-4"><img src="./assets/imagens/logo.png" alt="logo1 do Mini Empório AnaLu"></a>
        <section class="col col-md-4 texto_footer">
            <p class="contato">Contato: (11)94724-2147</p>
            <p class="contato">Todos os direitos reservados, as fotos utilizadas são meramente ilustrativas para exibir
                os produtos do
                Mini Empório AnaLu</p>
        </section>
    </footer>

    <script src="./assets/js/slideshow.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="./assets/lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>
    <script src="galeria/engine1/wowslider.js"></script>
    <script src="galeria/engine1/script.js"></script>
</body>

</html>