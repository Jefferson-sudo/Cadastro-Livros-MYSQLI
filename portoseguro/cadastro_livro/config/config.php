<?php

/* PROGRAMADOR RESPONSAVEL
 * Analista Desenvolvedor Jefferson Mateus
 * Matipó MG  03/12/2020 às 15:01 
 */

//Criando conexão com o banco de dados

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "cadastro_livro");
define("CHATSET", "utd-8");

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
mysqli_set_charset($conexao, 'utf8') or die(mysqli_connect_errno($conexao));