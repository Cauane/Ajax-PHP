<?php

	include("conexao.php");
	ini_set('default_charset','UTF-8');
    mysql_set_charset('utf8');

    $frutas = array("Abacaxi", "Banana", "Maça", "Melância", "Pêra", "Morango", "Uva", "Mamão");

    $frutaa = $_REQUEST["frutaa"];
    $ida = $_REQUEST["ida"];

    $frutaa = ucfirst(strtolower($frutaa));

    if ($frutaa !== "") {

        if(in_array($frutaa, $frutas)){

            mysql_query("UPDATE caixa SET nome='$frutaa' WHERE id='$ida'");    

            $fruta = "Alterado com sucesso";

            echo $fruta;

        }else{

            $fruta = "Esta fruta não existe na base de dados!!";

            echo $fruta;
        }

    }







  
    
    


	

?>