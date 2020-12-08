<?php
//Criando conexão com o banco de dados
require("config/config.php");
require ("config/crud.php");


$id_editora = isset($_GET["id"]) ? $_GET["id"] : NULL;
if (isset($_POST["enviado"])) {
    $txt_editora = $_POST["txt_editora"];

    $dados = array(
        "editora" => $txt_editora
    );
    $qry = updateData("editora", $dados, "id_editora` =" . $id_editora);

    if ($qry) {
        echo "Editado com sucesso";
    } else {
        echo"erro ao editar";
    }
}
if (isset($id_editora)) {
    $editora = queryData("`editora` WHERE `id_editora`= $id_editora");
}

$txt_editora = isset($editora[0]["editora"]) ? $editora[0]["editora"] : NULL;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar de Editora</title>
    </head>
    <body>
        <h1 align="center">Nome da editora</h1>
        <hr>
        <br>
        <a href="lista_editora.php">Lista de Editoras</a>
        <a href="index.php">Home</a>
        <form method="post">
            <tr>
                Editora: <td><input type="text" name="txt_editora" value="<?php echo $txt_editora; ?>"></td>
                <td><input type="hidden" name="enviado" value="ok"></td>
                <td><input type="submit" value="Editar"></td>
            </tr>
        </form>
    </body>
</html>