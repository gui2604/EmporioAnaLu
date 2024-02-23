<?php 
include "adm_autenticacao.php";
require"conectionDB.php";

//Validando a existência dos dados
if (isset($_POST["submit"])) {
    //Variável super global para capturar do formulário
    $idCategoria = $_POST["idCategoria"];
    $idProduto = $_POST["idProduto"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $lancamento = $_POST["lancamento"];
    $promocao = $_POST["promocao"];
    $preco = $_POST["preco"];
    $home = $_POST["home"];
    $ativo = $_POST["ativo"];

    //imagens
    $diretorio = "./assets/imagens";
    set_time_limit(0);
    $imagem = $_FILES["imagem"]["name"];
    if($imagem != ""){
        unlink($diretorio.'/'.$_REQUEST["imagemAn"]);
        $imagemTemp = $_FILES["imagem"]["tmp_name"];
        move_uploaded_file($imagemTemp, "$diretorio/$imagem");
    }else{
        $imagem = $_REQUEST["imagemAn"];
    };
    
    $imagemThumb = $_FILES["imagemThumb"]["name"];

    if($imagemThumb != ""){
        unlink($diretorio.'/'.$_REQUEST["imagemThumbAn"]);
        $imagemTempThumb = $_FILES["imagemThumb"]["tmp_name"];
        move_uploaded_file($imagemTempThumb, "$diretorio/$imagemThumb");
    }else{
        $imagemThumb = $_REQUEST["imagemThumbAn"];
    }; 

    $query_editar = "UPDATE tb_produtos SET idCategoria = '$idCategoria', nome = '$nome', descricao = '$descricao', lancamento = '$lancamento', promocao = '$promocao', preco = '$preco', imagem = '$imagem', imagemThumb = '$imagemThumb', home = '$home', ativo = '$ativo', visualizacao = '0' WHERE idProduto = $idProduto;"; 
    $rs_editar = mysqli_query($conn_bd_emporio, $query_editar) or die(mysqli_error($conn_bd_emporio));

    if($rs_editar == false){
        die("ERRO: ".mysqli_error($conn_bd_emporio));
    }else{
        echo '<script>alert("Dados editados com sucesso!");
        window.location.href="adm-lista.php";</script>';
    };
};

if(isset($_GET["idProduto"])){
    $id = $_GET["idProduto"];
};

$query_rs_produtos = "SELECT * FROM tb_produtos INNER JOIN tb_categorias ON tb_produtos.idCategoria = tb_categorias.idCategoria WHERE tb_produtos.idProduto = $id;";
$rs_produtos = mysqli_query($conn_bd_emporio, $query_rs_produtos) or die(mysqli_error($conn_bd_emporio));
$row_rs_produtos = mysqli_fetch_assoc($rs_produtos);
$totalRow_rs_produtos = mysqli_num_rows($rs_produtos);

$query_rs_categorias = "SELECT * FROM tb_categorias ORDER BY idCategoria ASC;";
$rs_categorias = mysqli_query($conn_bd_emporio, $query_rs_categorias) or die(mysqli_error($conn_bd_emporio));
$row_rs_categorias = mysqli_fetch_assoc($rs_categorias);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro - Administração do Site</title>
</head>

<body>

    <form action="<?=$_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" id="form_inserir">
        <!-- o atributo "name" e "id" precisam ser iguais ao nome do campo que vem do banco de dados -->
        Id do Produto: <?php echo $row_rs_produtos["idProduto"]; ?><br><br>
        <input type="hidden" name="idProduto" id="idProduto" value="<?php echo $row_rs_produtos["idProduto"]; ?>">
        <input type="hidden" name="dataCad" id="dataCad" value="<?php echo $row_rs_produtos["dataCad"]; ?>">
        Categoria:
        <select name="idCategoria" id="idCategoria" required>
            <option></option>
            <?php do { ?>
                <option value="<?php echo $row_rs_categorias["idCategoria"]; ?>" <?php if($row_rs_categorias["idCategoria"] === $row_rs_produtos["idCategoria"]){echo "selected='selected'";}; ?>>
                    <?php echo $row_rs_categorias["categoria"]; ?>
                </option>
            <?php } while ($row_rs_categorias = mysqli_fetch_assoc($rs_categorias)); ?>
        </select><br><br>
        Nome do Produto: <input type="text" name="nome" id="nome" size="100" required value="<?php echo $row_rs_produtos["nome"]; ?>"><br><br>
        Descrição do Produto:<br><textarea cols="100" rows="10" name="descricao" id="descricao"><?php echo $row_rs_produtos["descricao"]; ?>"</textarea><br><br>
        Lançamento: <input type="hidden" name="lancamento" value="0"><input type="checkbox" name="lancamento" value="1" <?php if($row_rs_produtos["lancamento"] == 1){echo 'checked="checked"';}?>><br><br>
        Promoção: <input type="hidden" name="promocao" value="0"><input type="checkbox" name="lancamento" value="1" <?php if($row_rs_produtos["promocao"] == 1){echo 'checked="checked"';}?>><br><br>
        Preço: <input type="number" name="preco" id="preco" required value="<?php echo $row_rs_produtos["preco"]; ?>"><br><br>
        Imagem Grande:  <?php echo $row_rs_produtos["imagem"]; ?><br><br>
                       <img src="./assets/imagens/<?php echo $row_rs_produtos['imagem']; ?>" width=100><br><br> 
        <input type="hidden" name="imagemAn" id="imagemAn" value="<?php echo $row_rs_produtos['imagem'] ?>">
        <input type="file" name="imagem" id="imagem"><br><br>
        Imagem Pequena (thumb): <?php echo $row_rs_produtos["imagemThumb"]; ?><br><br>
                                <img src="./assets/imagens/<?php echo $row_rs_produtos['imagemThumb']; ?>" width=100><br><br> 
        <input type="hidden" name="imagemThumbAn" id="imagemThumbAn" value="<?php echo $row_rs_produtos['imagemThumb'] ?>">
        <input type="file" name="imagemThumb" id="imagemThumb"><br><br>
        Home: <input type="hidden" name="home" value="0"><input type="checkbox" name="home" value="1" <?php if($row_rs_produtos["home"] == 1){echo 'checked="checked"';}?>><br><br>
        Ativo: <input type="hidden" name="ativo" value="0"><input type="checkbox" name="ativo" value="1"
        <?php if($row_rs_produtos["ativo"] == 1){echo 'checked="checked"';}?>><br><br>
        <input type="hidden" name="visualizacao" id="visualizacao" value="0">

        <input type="submit" name="submit" id="submit">

    </form>

</body>

</html>