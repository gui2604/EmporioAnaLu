<?php require("conectionDB.php");

if(isset($_GET['idProduto'])){
    $idProduto = $_GET['idProduto'];
};

$query_rs_img = "SELECT * FROM tb_produtos WHERE tb_produtos.idProduto = $idProduto";
$rs_img = mysqli_query($conn_bd_emporio, $query_rs_img);
$row_rs_img = mysqli_fetch_assoc($rs_img);
unlink("./assets/imagens/".$row_rs_img['imagem']);
unlink("./assets/imagens/".$row_rs_img['imagemThumb']);

$query_excluir = "DELETE FROM tb_produtos WHERE idProduto = $idProduto;";
$rs_excluir = mysqli_query($conn_bd_emporio, $query_excluir) or die(mysqli_error($conn_bd_emporio));

if ($rs_excluir == true) {
    echo '<script>alert("Dados excluídos com sucesso!");
    window.location.href="adm-lista.php";</script>';
} else {
    echo "Falha ao inserir dados!";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Curso - Administração do site</title>
</head>
<body>
    <h1>Excluir Curso - Administração do site</h1>

<?php 
    mysqli_free_result($rs_img);
    mysqli_free_result($rs_excluir);
    mysqli_close($conn_bd_ctec);
?>
</body>
</html>