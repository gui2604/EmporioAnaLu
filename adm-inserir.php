<?php require("conectionDB.php");

$query_rs_categorias = "SELECT * FROM tb_categorias ORDER BY idCategoria ASC;";
$rs_categorias = mysqli_query($conn_bd_emporio, $query_rs_categorias) or die(mysqli_error($conn_bd_emporio));
$row_rs_categorias = mysqli_fetch_assoc($rs_categorias);

//Validando a existência dos dados
if (isset($_POST["idCategoria"]) && isset($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST["lancamento"]) && isset($_POST["promocao"]) && isset($_POST["preco"]) && isset($_FILES["imagem"]) && isset($_FILES["imagemThumb"]) && isset($_POST["home"]) && isset($_POST["ativo"]) && isset($_POST["visualizacao"])) {
    //Variável super global para capturar do formulário
    $idCategoria = $_POST["idCategoria"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $lancamento = $_POST["lancamento"];
    $promocao = $_POST["promocao"];
    $preco = $_POST["preco"];
    $imagem = $_FILES["imagem"]["name"];
    $imagemThumb = $_FILES["imagemThumb"]["name"];
    $home = $_POST["home"];
    $ativo = $_POST["ativo"];
    $visualizacao = $_POST["visualizacao"];

    set_time_limit(0);
    $diretorio = "./assets/imagens";
    $imagemTemp = $_FILES["imagem"]["tmp_name"];
    $imagemTempThumb = $_FILES["imagemThumb"]["tmp_name"];

    move_uploaded_file($imagemTemp, "$diretorio/$imagem");
    move_uploaded_file($imagemTempThumb, "$diretorio/$imagemThumb");

    $inserir = "INSERT INTO tb_produtos (idProduto, dataCad, nome, descricao, lancamento, promocao, preco, imagem, imagemThumb, ativo, home, visualizacao, idCategoria) VALUES (NULL, CURRENT_TIMESTAMP(),'$nome','$descricao','$lancamento','$promocao','$preco','$imagem','$imagemThumb','$ativo','$home','$visualizacao','$idCategoria');";
    $resultado = mysqli_query($conn_bd_emporio, $inserir) or die(mysqli_error($conn_bd_emporio));

    if ($resultado == true) {
        echo ('<script>alert("Dados inseridos com sucesso!");
        window.location.href="adm-lista.php";</script>');
    } else {
        echo ("Falha ao inserir dados!");
    }
    ;
}
;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Registro - Administração do Site</title>
</head>

<body>

    <form method="post" enctype="multipart/form-data" id="form_inserir">
        <!-- o atributo "name" e "id" precisam ser iguais ao nome do campo que vem do banco de dados -->
        <input type="hidden" name="idProduto" id="idProduto">
        <input type="hidden" name="dataCad" id="dataCad">
        Categoria:
        <select name="idCategoria" id="idCategoria" required>
            <option></option>
            <?php do { ?>
                <option value="<?php echo $row_rs_categorias["idCategoria"]; ?>">
                    <?php echo $row_rs_categorias["categoria"]; ?>
                </option>
            <?php } while ($row_rs_categorias = mysqli_fetch_assoc($rs_categorias)); ?>
        </select><br><br>
        Nome do Produto: <input type="text" name="nome" id="nome" size="100" required><br><br>
        Descrição do Produto:<br><textarea cols="100" rows="10" name="descricao" id="descricao"></textarea><br><br>
        Lançamento: <input type="hidden" name="lancamento" value="0"><input type="checkbox" name="lancamento" value="1" checked><br><br>
        Promoção: <input type="hidden" name="promocao" value="0"><input type="checkbox" name="lancamento" value="1" checked><br><br>
        Preço: <input type="number" name="preco" id="preco"><br><br>
        Imagem Grande: <input type="file" name="imagem" id="imagem"><br><br>
        Imagem Pequena (thumb): <input type="file" name="imagemThumb" id="imagemThumb"><br><br>
        Home: <input type="hidden" name="home" value="0"><input type="checkbox" name="home" value="1" checked><br><br>
        Ativo: <input type="hidden" name="ativo" value="0"><input type="checkbox" name="ativo" value="1"
            checked><br><br>
        <input type="hidden" name="visualizacao" id="visualizacao" value="0">

        <input type="submit">

    </form>

    <?php
    mysqli_free_result($rs_categorias);
    mysqli_close($conn_bd_emporio);
    ?>
</body>

</html>