<?php
$id_livro = isset($_GET["id"]) ? $_GET["id"] : NULL;
$acao = isset($_GET["acao"]) ? $_GET["acao"] : "Inserir";

if (isset($id_livro)) {
    $livro = queryData("`livro` WHERE `id_livro`= $id_livro");
}
$id_editora = isset($livro[0]["id_editora"]) ? $livro[0]["id_editora"] : NULL;
$txt_livro = isset($livro[0]["livro"]) ? $livro[0]["livro"] : NULL;
$txt_autor = isset($livro[0]["autor"]) ? $livro[0]["autor"] : NULL;
?>

<h1 align="center"><?php echo $acao ?> editora</h1>

<a href="index.php?link=4">Lista de livros</a>
<a href="index.php?link=1">Home</a>
<form method="post" action="op/op_livro.php">
    <table>
        <tr>
            <td>Editora:</td>
            <td>
                <select name="txt_id_editora">
                    <?php
                    $editoras = queryData("editora");
                    foreach ($editoras as $editora) {
                        $id_Editora = $editora ["id_editora"];
                        $txt_Editora = $editora["editora"];
                        $selecionado = ($id_Editora == $id_editora) ? "selected" : "";
                        echo "<option value='$id_Editora  $selecionado'>$txt_Editora</option>";
                    }
                    ?>
                </select>>
                <input type="text" name="txt_id_editora" value="<?php echo $id_editora; ?>"></td>
        </tr>
        <tr> 
            <td>Livro:</td>
            <td><input type="text" name="txt_livro" value="<?php echo $txt_livro; ?>"></td>
        </tr>
        <tr>
            <td>Autor:</td>
            <td><input type="text" name="txt_autor" value="<?php echo $txt_autor; ?>"></td>

            <td><input type="hidden" name="enviado" value="ok"></td>
            <td><input type="hidden" name="acao" value="<?php echo $acao ?>"></td>
            <td><input type="hidden" name="id" value="<?php echo $id_livro ?>"></td>
            <td colspan="2"><input type="submit" value="<?php echo $acao ?>"></td>
        </tr>
    </table>
</form>
<br>