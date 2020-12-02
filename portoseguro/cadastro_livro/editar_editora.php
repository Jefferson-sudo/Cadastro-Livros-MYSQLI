<?php
//Criando conexão com o banco de dados
$host = "localhost";
$user = "root";
$password = "";
$database = "cadastro_livro";

$conexao = @mysqli_connect($host, $user, $password, $database);
mysqli_set_charset($conexao, 'utf8') or die(mysqli_connect_errno($conexao));

if (isset($_POST["enviado"])) {
    $txt_editora = $_POST["txt_editora"];
    $sql = "INSERT INTO editora (editora) VALUES ('$txt_editora')";
    $qry = mysqli_query($conexao, $sql);
}

if (isset($_GET["id"])) {
    $sql = "SELECT * FROM editora WHERE id_editora = " . $_GET["id"];
    $qry = mysqli_query($conexao, $sql);
    $editora = mysqli_fetch_array($qry);
}
if ($qry) {
    echo"Editado com sucesso!";
} else {
    echo  "Erro ao editar";
}
$txt_editora = isset($editora["editora"]) ? $editora["editora"] : NULL;
$id_editora = isset($editora["id_editora"]) ? $editora["id_editora"] : NULL;
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso mysqli Cadastro de Livro</title>
    </head>
    <body>
        <h1 align="center">Editar editora</h1>
        <hr>
        <br>
        <a href="lista_editora.php">Lista de Editoras</a>
        <form method="post">
            <tr>
                Editora: <td><input type="text" name="txt_editora" value="<?php echo $txt_editora ?>"></td>
                <td><input type="hidden" name="enviado" value="ok"></td>
                <td><input type="hidden" name="id" value="<?php echo $id_editora ?>"></td>
                <td><input type="submit" value="Editar"></td>
            </tr>
        </form>
    </body>
</html>