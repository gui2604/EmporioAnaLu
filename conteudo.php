<div class="container-fluid">
  <div class="alert alert-primary" role="alert" style="text-align: center">
    <h1><?php // echo($row_rs_produto["categoria"])
		$current_page = basename($_SERVER['PHP_SELF']);
		if ($current_page == '_queijos.php'){
			echo('Queijos');
		}else if($current_page == '_paes.php'){
			echo('Pães de Queijo');
		}else if($current_page == '_doces.php'){
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
                <h2><?php echo($row_rs_produto["nome"]) ?> </h2>
                <p><?php echo($row_rs_produto["descricao"]) ?></p>
                <p><?php echo($row_rs_produto["preco"]) ?></p>
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
                <h2><?php echo($row_rs_produto["nome"]) ?> </h2>
                <p><?php echo($row_rs_produto["descricao"]) ?></p>
                <p><?php echo($row_rs_produto["preco"]) ?></p>
            </div>
        </div>
    </section>
	<br>
	<!-- FIM LOOP -->
    <?php }
        $contador += 1; 
	    }while($row_rs_produto = mysqli_fetch_assoc($rs_produto)); ?>
</div>
