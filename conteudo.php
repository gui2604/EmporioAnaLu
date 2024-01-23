<div class="container-fluid">
  <div class="seccao">
    <h1><?php // echo($row_rs_produto["categoria"])
		$current_page = basename($_SERVER['PHP_SELF']);
		if ($current_page == 'queijos.php'){
			echo('Queijos');
		}else if($current_page == 'paes.php'){
			echo('Pães de Queijo');
		}else if($current_page == 'doces.php'){
			echo('Doces');
		}else{
			echo('Produtos em Oferta');
		}
		?></h1>
  </div>
</div>
<div class="container"> 
  <!-- Loop dos registros -->
  <?php $contador = 1;
	do { 
        if ($contador % 2 == 0) {
    ?>
    <section>
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <h2 class="titulo_produto" style="color:#F27457;"><?php echo($row_rs_produto["nome"]) ?> </h2>
                <p class="descricao_produto">Descrição: <?php echo($row_rs_produto["descricao"]) ?></p>
                <p class="preco_produto">Preço: R$<?php echo($row_rs_produto["preco"]) ?></p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"> <a href="./assets/imagens/<?php echo($row_rs_produto["imagem"]) ?>" title ="<?php echo($row_rs_produto["nome"]) ?>" data-lightbox="example-1"> <img src="assets/imagens/<?php echo($row_rs_produto["imagemThumb"]) ?>" alt="<?php echo($row_rs_produto["nome"]) ?>" title="<?php echo($row_rs_produto["nome"]) ?>" class="img-fluid"></a></div>
        </div>
    </section>
	<br>
    <?php }else{ ?>
    <section>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"> <a href="./assets/imagens/<?php echo($row_rs_produto["imagem"]) ?>" title ="<?php echo($row_rs_produto["nome"]) ?>" data-lightbox="example-1"> <img src="assets/imagens/<?php echo($row_rs_produto["imagemThumb"]) ?>" alt="<?php echo($row_rs_produto["nome"]) ?>" title="<?php echo($row_rs_produto["nome"]) ?>" class="img-fluid"></a></div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <h2 class="titulo_produto" style="color:#F27457;"><?php echo($row_rs_produto["nome"]) ?> </h2>
                <p class="descricao_produto">Descrição: <?php echo($row_rs_produto["descricao"]) ?></p>
                <p class="preco_produto">Preço: R$<?php echo($row_rs_produto["preco"]) ?></p>
            </div>
        </div>
    </section>
	<br>
	<!-- FIM LOOP -->
    <?php }
        $contador += 1; 
	    }while($row_rs_produto = mysqli_fetch_assoc($rs_produto)); ?>
</div>
