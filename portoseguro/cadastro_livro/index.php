<!DOCTYPE html>
<?php
require("config/config.php");
require ("config/crud.php");
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>JM ligando você ao mundo do conhecimento</title>
    </head>
    <body>


        <table border="1" align="center" width="100%" cellpading="0" cellspacing="0" >
            <tr>
                <td>
                    <table border="1" align="center" width="750" cellpadding="0" cellspacing="1">
                        <tr><td colspan="2"><?php include 'cabecalho.php' ?></td></tr>
                        <tr>
                            <td width="140" ><?php include 'menu.php' ?></td>
                            <td>
                                <table width="600" cellpacing="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <?php
                                            @$link = filter_input(INPUT_GET, "link");

                                            $pag [1] = "home.php";
                                            $pag [2] = "lst/lst_editora.php";
                                            $pag [3] = "frm/frm_editora.php";
                                            $pag [4] = "lst/lst_livro.php";
                                            $pag [5] = "frm/frm_livro.php";
                                            $pag [6] = "erro.php";


                                            if (!empty($link)) {
                                                if (file_exists($pag[$link])) {
                                                    include $pag[$link];
                                                } else {
                                                    include "home.php";
                                                }
                                            } else {
                                                include "home.php";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td colspan="2"><?php include 'rodape.php' ?></td></tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
