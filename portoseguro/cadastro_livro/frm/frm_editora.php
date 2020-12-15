<?php
$id_editora = isset($_GET["id"]) ? $_GET["id"] : NULL;
$acao = isset($_GET["acao"]) ? $_GET["acao"] : "Inserir";

if (isset($id_editora)) {
    $editora = queryData("`editora` WHERE `id_editora`= $id_editora");
}

$txt_editora = isset($editora[0]["editora"]) ? $editora[0]["editora"] : NULL;
?>

<h1 align="center"><?php echo $acao ?> editora</h1>

<a href="index.php?link=2">Lista de Editoras</a>
<a href="index.php?link=1">Home</a>
<form method="post" action="op/op_editora.php">
    <table>
        <tr>
            <td>Editora:</td>
            <td><input type="text" name="txt_editora" value="<?php echo $txt_editora; ?>"></td>
            <td><input type="hidden" name="enviado" value="ok"></td>
            <td><input type="hidden" name="acao" value="<?php echo $acao ?>"></td>
            <td><input type="hidden" name="id" value="<?php echo $id_editora ?>"></td>
            <td><input type="submit" value="<?php echo $acao ?>"></td>
        </tr>
    </table>
</form>
<br>