<h1 align="center">Cadastro de Livro</h1>
<?php
if (isset($_GET["ok"])) {
    echo" <p>Operacao realizada com sucesso</p>";
}
?>

<a href="../index.php">Home</a>|<a href="../frm/frm_livro.php">Novo Cadastro</a>
<table border="1px" width="50%">
    <tr>
        <td width="5%">ID</td>
        <td width="30%">Livro</td>
        <td colspan='2' width="15%">Opções</td>
    </tr>
    <?php
    $livro = queryData("livro");
    foreach ($livro as $linha) {
        ?>
        <tr>
            <td><?php echo $linha["id_editora"]; ?></td>
            <td><?php echo $linha["livro"]; ?></td>
            <td><a href="<?php echo "index.php?link=3&acao=Editar&id=" . $linha["id_livro"] ?>">Editar</a></td>
            <td><a href="<?php echo "index.php?link=3&acao=Excluir&id=" . $linha["id_livro"]; ?>">Excluir</a></td>
        </tr>
    <?php } ?>
</table>

