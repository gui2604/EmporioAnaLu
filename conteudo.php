<div class="container-fluid">
    <div class="seccao">
        <h1 style="font-size:3.5rem;color:#F0F0F2;">
            <?php
            $current_page = basename($_SERVER['PHP_SELF']);
            if ($current_page == 'queijos.php') {
                echo 'Queijos';
            } else if ($current_page == 'paes.php') {
                echo 'Pães de Queijo';
            } else if ($current_page == 'doces.php') {
                echo 'Doces';
            } else if ($current_page == 'variedades.php'){
                echo 'Variedades';
            } else {
                echo 'Resultado da Busca';
            }
            ?>
        </h1>
    </div>
</div>
<div class="container">
    <!-- Loop dos registros -->
    <?php $contador = 1;
    do {
        $nome_do_produto = $row_rs_produto["nome"];
        $preco_do_produto = $row_rs_produto["preco"];
        $mensagem_whatsapp = "Olá, estou interessado no produto: $nome_do_produto. Preço: $preco_do_produto";
        $mensagem_whatsapp_encoded = urlencode($mensagem_whatsapp);
        $numero_vendedor = '5511947242147';
        $link_whatsapp = "https://api.whatsapp.com/send?phone=$numero_vendedor&text=$mensagem_whatsapp_encoded";
        if ($contador % 2 == 0) {
    ?>
            <section>
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 d-flex flex-column justify-content-center">
                        <h2 class="titulo_produto" style="color:#F2C894;">
                            <?php echo $row_rs_produto["nome"]; ?>
                        </h2>
                        <p class="descricao_produto">
                            <?php echo $row_rs_produto["descricao"]; ?>
                        </p>
                        <p class="preco_produto">R$<?php echo $row_rs_produto["preco"]; ?>
                        </p>
                        <a href="<?php echo $link_whatsapp; ?>" target="_blank" title="<?php echo $row_rs_produto["nome"]; ?>" class="botoes" style="margin-bottom:20px;"><button type="button" class="texto-reset" style="font-size:2rem;border-radius:1rem;width:225px;">Tenho Interesse</button></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 d-flex flex-column justify-content-center"><a href="./assets/imagens/<?php echo $row_rs_produto["imagem"] ?>" title="<?php echo $row_rs_produto["nome"]; ?>" data-lightbox="example-1"><img src="assets/imagens/<?php echo $row_rs_produto["imagemThumb"]; ?>" alt="<?php echo $row_rs_produto["nome"]; ?>" title="<?php echo $row_rs_produto["nome"]; ?>" class="imagem_produto" style="border-radius:2rem;margin-bottom:50px;"></a></div>
                </div>
            </section>
            <br>
        <?php } else { ?>
            <section>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 d-flex flex-column justify-content-center"> <a href="./assets/imagens/<?php echo ($row_rs_produto["imagem"]) ?>" title="<?php echo $row_rs_produto["nome"]; ?>" data-lightbox="example-1"> <img src="assets/imagens/<?php echo $row_rs_produto["imagemThumb"]; ?>" alt="<?php echo $row_rs_produto["nome"]; ?>" title="<?php echo $row_rs_produto["nome"]; ?>" class="imagem_produto" style="border-radius:2rem;"></a></div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 d-flex flex-column justify-content-center">
                        <h2 class="titulo_produto" style="color:#F2C894;">
                            <?php echo $row_rs_produto["nome"]; ?>
                        </h2>
                        <p class="descricao_produto">
                            <?php echo $row_rs_produto["descricao"]; ?>
                        </p>
                        <p class="preco_produto">R$<?php echo $row_rs_produto["preco"]; ?>
                        </p>
                        <a href="<?php echo $link_whatsapp; ?>" target="_blank" title="<?php echo $row_rs_produto["nome"]; ?>" class="botoes" style="margin-bottom:50px;"><button type="button" class="texto-reset" style="font-size:2rem;background-color:#261B14;border-radius:1rem;width:225px;">Tenho Interesse</button></a>
                    </div>
                </div>
            </section>
            <br>
            <!-- FIM LOOP -->
    <?php }
        $contador += 1;
    } while ($row_rs_produto = mysqli_fetch_assoc($rs_produto)); ?>
</div>