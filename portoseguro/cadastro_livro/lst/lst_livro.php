<?php
if (isset($_GET["ok"])) {
    echo" <p>Operacao realizada com sucesso</p>";
}
$livro = queryData("livro");
?>
<h1 align="center">Cadastro de Livro</h1>

<a href="index.php?link=0">Home</a>|<a href="index.php?link=5">Novo Cadastro</a>
<table border="1px" width="100%">
    <tr>
        <td width="5%">ID</td>
        <td width="45%">Livro</td>
        <td width="35%">Autor</td>
        <td colspan='2' width="15%">Opções</td>
    </tr>
    <?php
    if ($livro) {
        foreach ($livro as $linha) {
            ?>
            <tr>
                <td><?php echo $linha["id_livro"]; ?></td>
                <td><?php echo $linha["livro"]; ?></td>
                <td><?php echo $linha["autor"]; ?></td>
                <td><a href="<?php echo "index.php?link=5&acao=Editar&id=" . $linha["id_livro"] ?>">Editar</a></td>
                <td><a href="<?php echo "index.php?link=5&acao=Excluir&id=" . $linha["id_livro"]; ?>">Excluir</a></td>
            </tr>
        <?php
        }
    } else {
        echo "<p>Não existe nenhum livro cadastrados no banco de dados no momento.</p>";
    }
    ?>
</table>

