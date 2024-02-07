<!-- Logo2 da loja e contato do whatsapp -->
<section style="background-color:#261B14;color:#F0F0F2;min-height:124px;"
    class="d-flex justify-content-center align-items-center">
    <h2 style="text-align:center;font-size:1.2em;">Principais Produtos</h2>
</section>
<!-- Produtos mais "visualizados", ou seja que mais clicaram no botão "comprar" -->
<section class="d-flex justify-content-center row">
    <?php do { ?>
        <div class="my-5 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 row">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <!-- imagem do produto -->
                <div style="width:350px;max-height:300px;border-radius:2rem;"><a
                        href="./assets/imagens/<?php echo $row_rs_maisprocurados["imagem"]; ?>"
                        title="<?php echo $row_rs_maisprocurados["nome"]; ?>" data-lightbox="example-1"><img
                            src="./assets/imagens/<?php echo $row_rs_maisprocurados["imagemThumb"]; ?>"
                            alt="<?php echo $row_rs_maisprocurados["nome"]; ?>" title="<?php echo $row_rs_maisprocurados["nome"]; ?>"
                            class="img-fluid" style="border-radius:2rem;max-height:300px;min-height:300px;"></a>
                </div>
                <!-- texto e botão do produto -->
                <div>
                    <h2 class="titulo_produto" style="color:#F27457;">
                        <?php echo $row_rs_maisprocurados["nome"]; ?>
                    </h2>
                    <br>
                    <a href="detalhes.php?idProduto=<?php echo $row_rs_maisprocurados['idProduto']; ?>" title="Detalhes"
                        class="detalhes"><button type="button" class="texto-reset"
                            style="font-size:2rem;background-color:#261B14;border-radius:1rem;width:225px;">Detalhes</button></a>
                </div>
            </div>
        </div>
        <br>
    <?php } while ($row_rs_maisprocurados = mysqli_fetch_assoc($rs_maisprocurados)); ?>
</section>
<section class="logos">
    <a href="index.php"><img src="./assets/imagens/logo_analu.png" alt="logo2 do Mini Empório Analu" class="logo_responsivo"></a>
    <!-- Link que abre a conversa no whatsapp -->
    <a href="https://api.whatsapp.com/send?phone=5511947242147" class="wpp" target="_blank"><img
            src="./assets/imagens/wpp.png" alt="logo do whatsapp"></a>
</section>
