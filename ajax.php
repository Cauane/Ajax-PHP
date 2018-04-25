<?php

	include("conexao.php");
	mysql_set_charset('utf8');
    
    $frutas = array("Abacaxi", "Banana", "Maça", "Melância", "Pêra", "Morango", "Uva", "Mamão");

    @$q = $_REQUEST["q"];

    $q = ucfirst(strtolower($q));

    //$q = utf8_decode($q);

    if ($q !== "") {

		if(in_array($q, $frutas)){

			mysql_query("INSERT INTO caixa(nome) VALUES ('$q')");

		    $fruta = "Cadastro Efetuado com sucesso";

		    echo $fruta;

		}else{

			$fruta = "Esta fruta não existe na base de dados!!";

			echo $fruta;
		}

	}

	

?>