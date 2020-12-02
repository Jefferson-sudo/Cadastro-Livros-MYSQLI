<?php
/* PROGRAMADOR RESPONSAVEL
 * Analista Desenvolvedor Jefferson Mateus
 * Matipó MG  02/12/2020 às 14:52  
 */    
//Criando conexão com o banco de dados
$host = "localhost";
$user = "root";
$password = "";
$database = "cadastro_livro";

$conexao = @mysqli_connect($host, $user, $password, $database);
mysqli_set_charset($conexao, 'utf8') or die(mysqli_connect_errno($conexao));

$id_editora = isset($_GET["id"]) ? $_GET["id"] : NULL;
/*
 * Se o id for um _GET  $id_editora recebe _GET. Se não ele recebe NULL
 */

if (isset($_POST["enviado"])) {// Se o post recebido for igual a ["enviado"]
    /*
     * Pega os valores pelo metado post.
     * $id_editora  guarda o id 
     * $txt_editora guarda o novo nome da editora
     */
    $id_editora = $_POST["id"];
    $txt_editora = $_POST["txt_editora"];
    
    $sql = " UPDATE `editora` SET `editora`= '$txt_editora' WHERE `id_editora` = '$id_editora' ";
    $qry = mysqli_query($conexao, $sql);
    /*
     * Query para manda o comando para atualizar os dados mandando os valores contidos nas variaveis:
     * $txt_editora com o novo nome da editora
     * $id_editora para saber qual id vai ser alterado no banco de dados
     */
    if ($qry) {
        header("location:lista_editora.php");
    } else {
        $editado = "Erro ao atualizar dados";
    }
}

if (isset($id_editora)) {
    /*Se $id_editora for verdadeira pega os dados e coloca dentro da $editora para mostrar
     */
    $sql = "SELECT * FROM editora WHERE id_editora = " . $id_editora;
    $qry = mysqli_query($conexao, $sql);
    $editora = mysqli_fetch_array($qry);
}

$txt_editora = isset($editora["editora"]) ? $editora["editora"] : NULL; 
/*Coloca os dados do array $editora no indice ["editora"]
 *  dentro da variavel $txt_edirora */
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso mysqli Cadastro de Livro</title>
        <style>
            p{
                color:#1E8836;
            }
        </style>
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
        <p> <?php echo @$editado; //Imprime se a alteração foi realizada com sucesso ?></p>
    </body>
</html>
