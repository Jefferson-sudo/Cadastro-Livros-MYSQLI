<?php
//Criando conexão com o banco de dados
/* Proxima aula 16
 * 
 */
require("../config/config.php");
require("../config/crud.php");

if (isset($_GET["id"])) {//sql delete 
    /* $sql = "DELETE FROM `editora` WHERE `editora`.`id_editora` = " . $_GET["id"];
      $qry = mysqli_query($conexao, $sql); */

    $id_editora = $_GET["id"];
    $qry = deleteData("editora", "id_editora = " . $id_editora);
    if ($qry) {
        $excluido = "<style> p{color:#227C2C; } </style><p>Exluido com sucesso!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso mysqli Cadastro de Livro</title>
    </head>
    <body>
        <a href="../lst/lista_editora.php">Voltar</a>
        <!--Mostro a tabela atualizada-->
        <table border="1px" width="50%">
            <tr>
                <td width="5%">ID</td>
                <td width="30%">Editora</td>
                <td colspan='2' width="15%">Opções</td>
            </tr>
            <?php
            /* $qry = mysqli_query($conexao, "SELECT * FROM `editora`");
              while ($linha = mysqli_fetch_array($qry)) */

            $editora = queryData("editora");
            foreach ($editora as $linha) {
                ?>
                <tr>
                    <td><?php echo $linha["id_editora"]; ?></td>
                    <td><?php echo $linha["editora"]; ?></td>
                    <td><a href="<?php echo "../frm/frm_editora.php?id=" . $linha["id_editora"] ?>">Editar</a></td>
                    <td><a href="<?php echo "excluir_editora.php?id=" . $linha["id_editora"]; ?>">Excluir</a></td>
                </tr>
            <?php } ?>
        </table>
        <?php echo $excluido ?>
    </body>
</html>