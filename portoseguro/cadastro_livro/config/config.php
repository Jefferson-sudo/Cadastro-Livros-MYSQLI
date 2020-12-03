<?php

/* PROGRAMADOR RESPONSAVEL
 * Analista Desenvolvedor Jefferson Mateus
 * Matipó MG  02/12/2020 às 14:52  
 */

//Criando conexão com o banco de dados

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "cadastro_livro");

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
mysqli_set_charset($conexao, 'utf8') or die(mysqli_connect_errno($conexao));
