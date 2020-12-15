<?php

require("../config/config.php");
require ("../config/crud.php");

$id_editora = isset($_POST["id"]) ? $_POST["id"] : NULL;
$acao = isset($_POST["acao"]) ? $_POST["acao"] : "Inserir";

$dados = array(
    "editora" => trim(filter_input(INPUT_POST,"txt_editora"))
);


if ($acao == "Inserir") {
    insertData("editora", $dados, true);
    $ok = true;
}

if ($acao == "Editar") {
    updateData("editora", $dados, "id_editora` =" . $id_editora);
    $ok = true;
}

if ($acao == "Excluir") {
    deleteData("editora", "id_editora = " . $id_editora);
    $ok = true;
}
if($ok){
    $url = URL_BASE."index.php?link=2&?ok=S";
}else{
    $url = URL_BASE. "index.php?link=2";
}

header("location:$url");
