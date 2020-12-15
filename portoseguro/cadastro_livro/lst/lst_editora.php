<h1 align="center">Cadastro de Editora</h1>
<?php
if (isset($_GET["ok"])) {
    echo" <p>Operacao realizada com sucesso</p>";
}
?>

<a href="../index.php">Home</a>|<a href="../frm/frm_editora.php">Novo Cadastro</a>
<table border="1px" width="50%">
    <tr>
        <td width="5%">ID</td>
        <td width="30%">Editora</td>
        <td colspan='2' width="15%">Opções</td>
    </tr>
    <?php
    $editora = queryData("editora");
    foreach ($editora as $linha) {
        ?>
        <tr>
            <td><?php echo $linha["id_editora"]; ?></td>
            <td><?php echo $linha["editora"]; ?></td>
            <td><a href="<?php echo "index.php?link=3&acao=Editar&id=" . $linha["id_editora"] ?>">Editar</a></td>
            <td><a href="<?php echo "index.php?link=3&acao=Excluir&id=" . $linha["id_editora"]; ?>">Excluir</a></td>
        </tr>
    <?php } ?>
</table>

