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

    if ($qry) {
        echo "Inserido com sucesso";
    } else {
        echo"erro ao cadastrar";
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
        <h1 align="center">Nome da editora</h1>
        <hr>
        <br>
        <a href="lista_editora.php">Lista de Editoras</a>
        <form method="post">
            <tr>
                Editora: <td><input type="text" name="txt_editora"></td>
                <td><input type="hidden" name="enviado" value="ok"></td>
                <td><input type="submit" value="Cadastrar"></td>
            </tr>
        </form>
    </body>
</html>