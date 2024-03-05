<?php
include "adm_autenticacao.php";
require "conectionDB.php"; ?>

<?php
$query_rs_produto = "SELECT * FROM tb_produtos INNER JOIN tb_categorias ON tb_categorias.idCategoria = tb_produtos.idCategoria ORDER BY tb_produtos.idProduto DESC;";
$rs_produto = mysqli_query($conn_bd_emporio, $query_rs_produto) or die(mysqli_error($conn_bd_emporio));
$row_rs_produto = mysqli_fetch_assoc($rs_produto);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo do Site</title>

    <style>
        .botoes_adm:hover {
            background-color: #808080;
        }
    </style>
</head>

<body>
    <div style="display:flex;justify-content:space-between;">
        <img src="./assets/imagens/logo_analu.png" width="100" alt="">
        <p><strong>Usuário Administrador:</strong>&nbsp;<?php echo $_SESSION["email"]; ?></p>
    </div>
    <h1>Painel Administrativo do Site - Lista</h1>
    <div style="display:flex;justify-content:space-evenly;align-items:center;">
        <a href="adm_logout.php" class="botoes_adm"><img src="./assets/imagens/logout.jpg" width="40"></a>
        <a href="adm_cadastrar.php" class="botoes_adm"><img src="./assets/imagens/usuario.png" width="40"></a>
    </div>
    <!-- tabela -->
    <table width="100%">
        <!-- corpo da tabela(pode ter cabeçalho (<thead>) ou rodapé também (<tfooter>)) -->
        <tbody>
            <!-- 1ª linha -->
            <tr>
                <!-- colunas -->
                <td><strong>Inserir</strong></td>
                <td><strong>Editar</strong></td>
                <td><strong>Excluir</strong></td>
                <td><strong>IdProduto</strong></td>
                <td><strong>Nome</strong></td>
                <td><strong>Preço</strong></td>
                <td><strong>Ativo</strong></td>
                <td><strong>Home</strong></td>
                <td><strong>Categoria</strong></td>
                <td><strong>Img</strong></td>
                <td><strong>Visualização</strong></td>
            </tr>
            <!-- início do loop -->
            <?php do { ?>
                <!-- 2ª linha -->
                <tr>
                    <!-- colunas -->
                    <td><a href="adm-inserir.php"><img src="./assets/imagens/inserir.png" width="20" height="20" alt=""></a></td>
                    <td><a href="adm-editar.php?idProduto=<?php echo $row_rs_produto['idProduto']; ?>"><img src="./assets/imagens/edit.gif" width="16" height="15" alt=""></a></td>
                    <td><a href="adm-excluir.php?idProduto=<?php echo $row_rs_produto['idProduto']; ?>" onclick="return confirm('Tem certeza que deseja excluir esse produto?')"><img src="./assets/imagens/delete.gif" width="16" height="15" alt=""></a></td>
                    <td>
                        <?php echo $row_rs_produto['idProduto']; ?>
                    </td>
                    <td>
                        <?php echo $row_rs_produto['nome']; ?>
                    </td>
                    <td>
                        <?php echo $row_rs_produto['preco']; ?>
                    </td>
                    <td>
                        <?php echo $row_rs_produto['ativo']; ?>
                    </td>
                    <td>
                        <?php echo $row_rs_produto['home']; ?>
                    </td>
                    <td>
                        <?php echo $row_rs_produto['idCategoria']; ?>
                    </td>
                    <td><img src="./assets/imagens/<?php echo ($row_rs_produto['imagemThumb']); ?>" width="50" alt=""></td>
                    <td>
                        <?php echo $row_rs_produto['visualizacao']; ?>
                    </td>
                </tr>

                <tr>
                    <td colspan="10">
                        <hr><!-- <hr> é a tag que cria uma linha horizontal -->
                    </td>
                </tr>
            <?php } while ($row_rs_produto = mysqli_fetch_assoc($rs_produto)); ?>
            <!-- fim do loop -->
        </tbody>
    </table>
    <?php
    mysqli_free_result($rs_produto);
    mysqli_close($conn_bd_emporio);
    ?>
</body>

</html>