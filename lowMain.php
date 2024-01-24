<!-- Logo2 da loja e contato do whatsapp -->
<section style="background-color:#261B14;color:#F0F0F2;min-height:124px;" class="d-flex justify-content-center align-items-center">
    <h2 style="text-align:center;font-size:1.2em;">Mais Buscados</h2>
</section>
<!-- Produtos mais "visualizados", ou seja que mais clicaram no botão "comprar" -->
<section class="d-flex justify-content-center">
    <?php do { ?>
        <div class="m-5">
            <!-- imagem do produto -->
            <div class="" style="width:300px;max-height:300px;border-radius:2rem;"><a
                    href="./assets/imagens/<?php echo ($row_rs_produto["imagem"]) ?>"
                    title="<?php echo ($row_rs_produto["nome"]) ?>" data-lightbox="example-1"><img
                        src="./assets/imagens/<?php echo ($row_rs_produto["imagemThumb"]) ?>"
                        alt="<?php echo ($row_rs_produto["nome"]) ?>" title="<?php echo ($row_rs_produto["nome"]) ?>"
                        class="img-fluid" style="border-radius:2rem;max-height:300px;min-height:300px;"></a>
            </div>
            <!-- texto e botão do produto -->
            <div class="">
                <h2 class="titulo_produto" style="color:#F27457;">
                    <?php echo ($row_rs_produto["nome"]) ?>
                </h2>
                <br>
                <a href="detalhes.php?idProduto=<?php echo ($row_rs_produto['idProduto']) ?>" title="Detalhes"
                    class="detalhes"><button type="button" class="btn texto-reset"
                        style="font-size:2rem;background-color:#261B14;border-radius:1rem;width:225px;">Detalhes</button></a>
            </div>
        </div>
    <?php } while ($row_rs_produto = mysqli_fetch_assoc($rs_produto)); ?>
</section>
<section class="logos">
    <a href="index.php"><img src="./assets/imagens/logo_analu.png" alt="logo2 do Mini Empório Analu"></a>
    <!-- Link que abre a conversa no whatsapp -->
    <a href="https://api.whatsapp.com/send?phone=5511947242147" class="wpp" target="_blank"><img
            src="./assets/imagens/wpp.png" alt="logo do whatsapp"></a>
</section>

<?php mysqli_free_result($rs_produto);
mysqli_close($conn_bd_emporio);
?>