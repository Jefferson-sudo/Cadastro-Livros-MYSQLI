<?php

require("../config/config.php");
require ("../config/crud.php");

$id_livro = isset($_POST["id"]) ? $_POST["id"] : NULL;
$acao = isset($_POST["acao"]) ? $_POST["acao"] : "Inserir";


$id_editora = trim(filter_input(INPUT_POST, "txt_id_editora"));
$livro = trim(filter_input(INPUT_POST, "txt_livro"));
$autor = trim(filter_input(INPUT_POST, "txt_autor"));

$dados = array(
    "id_editora" => $id_editora,
    "`livro" => $livro,
    "`autor" => $autor
);


if ($acao == "Inserir") {
    $dadosInsere = array(
        "`id_editora`" => $id_editora,
        "`livro`" => $livro,
        "`autor`" => $autor
    );

    insertData("livro", $dadosInsere, true);
    $ok = true;
}

if ($acao == "Editar") {
    $sql = updateData("livro", $dados, "id_livro` =" . $id_livro);
    $ok = true;
}

if ($acao == "Excluir") {
    deleteData("livro", "id_livro = " . $id_livro);
    $ok = true;
}
if ($ok) {
    $url = URL_BASE ."/index.php?link=4";
} else {
    $url = URL_BASE ."/index.php?link=5";
}

header("location:$url");


