<?php

	include("conexao.php");
	mysql_set_charset('utf8');
    
    $sqlc = mysql_query("SELECT * FROM caixa");

    echo "<ul id='produtos'>";

    	echo "<li><b>ID<b></li>";
    	echo "<li><b>NOME</b></li>";
    	echo "<li><b>OPÇÕES</b></li>";

    	echo "<li>&nbsp;</li>";
    	echo "<li>&nbsp;</li>";
    	echo "<li>&nbsp;</li>";

    while($rowc = mysql_fetch_array($sqlc)){


    	echo "<li>".$rowc['id']."</li>";
    	echo "<li><input type='text' value='{$rowc['nome']}' style='height:16px;' id='frutaa'></li>";
    	echo "<li><a onclick='excluirFruta({$rowc['id']})'>Excluir</a>&nbsp; | &nbsp;<a onclick='alterarFruta({$rowc['id']})'>Alterar</a></li>";
    	
    }

    echo "</ul>";

	

?>