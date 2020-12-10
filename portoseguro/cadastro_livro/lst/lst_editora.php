<?php
//Criando conexão com o banco de dados
require("../config/config.php");
require ("../config/crud.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso mysqli Cadastro de Livro</title>
    </head>
    <body>
        <h1 align="center">Cadastro de Editora</h1>

        <a href="../index.php">Home</a>|<a href="../frm/nova_editora.php">Novo Cadastro</a>
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
                    <td><a href="<?php echo "../frm/frm_editora.php?id=" . $linha["id_editora"] ?>">Editar</a></td>
                    <td><a href="<?php echo "../op/excluir_editora.php?id=" . $linha["id_editora"]; ?>">Excluir</a></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
