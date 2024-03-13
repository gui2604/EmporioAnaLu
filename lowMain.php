<!-- Logo2 da loja e contato do whatsapp -->
<section style="background-color:#261B14;color:#F0F0F2;min-height:12rem;margin:0;padding:0;width:100%;" class="d-flex justify-content-center align-items-center">
    <h1 style="text-align:center;">Produtos em Destaque</h1>
</section>
<!-- Produtos mais "visualizados", ou seja que mais clicaram no botão "comprar" -->
<section class="d-flex justify-content-center row">
    <?php do { ?>
        <div class="my-5 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 row">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <!-- imagem do produto -->
                <div><a href="./assets/imagens/<?php echo $row_rs_maisprocurados["imagem"]; ?>" title="<?php echo $row_rs_maisprocurados["nome"]; ?>" data-lightbox="example-1"><img src="./assets/imagens/<?php echo $row_rs_maisprocurados["imagemThumb"]; ?>" alt="<?php echo $row_rs_maisprocurados["nome"]; ?>" title="<?php echo $row_rs_maisprocurados["nome"]; ?>" style="border-radius:2rem;max-height:300px;min-height:300px;"></a>
                </div>
                <!-- texto e botão do produto -->
                <div>
                    <h2 class="titulo_produto" style="color:#F2C894;">
                        <?php echo $row_rs_maisprocurados["nome"]; ?>
                    </h2>
                    <br>
                    <a href="detalhes.php?idProduto=<?php echo $row_rs_maisprocurados['idProduto']; ?>" title="Detalhes" class="detalhes"><button type="button" class="texto-reset" style="font-size:2rem;background-color:#261B14;border-radius:1rem;width:225px;">Detalhes</button></a>
                </div>
            </div>
        </div>
        <br>
    <?php } while ($row_rs_maisprocurados = mysqli_fetch_assoc($rs_maisprocurados)); ?>
</section>