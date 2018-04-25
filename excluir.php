<?php

	include("conexao.php");
	ini_set('default_charset','UTF-8');
    mysql_set_charset('utf8');

    $e = $_REQUEST["e"];
    
    $sqlc = mysql_query("DELETE FROM caixa WHERE id='$e'");

    echo "Excluido com Sucesso!!";
	

?>