<?php

include("conexao.php");
include("ajax.php");

    /* Utilizando jQuery, PHP e MySQL, crie um cadastro simples (CRUD) com as opções de INSERT, UPDATE, DELETE.

     * Imagine que você esteja fazendo um sistema para o caixa de um hortifruti. A base de produtos se encontra
     * no arquivo ajax.php e apenas itens desta base podem ser registrados no caixa.
     * 
     * Você precisa fazer um código que o atendente do caixa irá digitar as frutas que o cliente está comprando.
     * Caso a fruta exista, deixe cadastrar. Caso não exista, exiba um alerta na tela para o usuário informando que
     * esta fruta não existe na base de dados.
     * 
     * Este cadastro deve ser feito inteiro utilizando AJAX para executar todos os métodos.
     * 
     * Preferências:
     * jQuery: v1.11 ou superior
     * PHP: 5.6.26+
     * MySQL: 5.0+
     * 
     */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
<head>

     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <title>Prova</title>
     <link rel="stylesheet" href="estilo.css" />
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

     <script type="text/javascript">

      function showFruta() {

          str = document.getElementById("fruta").value;
        
         if (str.length == 0) { 
             return;
         } else {
             var xmlhttp = new XMLHttpRequest();
             xmlhttp.onreadystatechange = function() {
                 if (this.readyState == 4 && this.status == 200) {
                     alert(this.responseText);
                 }
             };
             xmlhttp.open("GET", "ajax.php?q=" + str, true);
             xmlhttp.send();
         }
         
     }

     // ********* //

     $(document).ready(function(){

          $.ajax({
              url: "retorno.php",
              type: "POST",              
              dataType: "html"

          }).done(function(resposta) {
              console.log(resposta);

          });                  
                     
     });
    </script>
</head>
<body>

     <div class="util" id="form_fruta">


          <p class="titulo">CAIXA:</p> <br>

          <form>

               <input type="text" id="fruta" placeholder="Insira nome da Fruta:"> <br><br>

               <input type="button" value="Enviar" onclick="showFruta()">

          </form>

          <br><br>

          <hr>

          <br><br>

          <p class="titulo">LISTA DE PRODUTOS CADASTRADO:</p> <br>

          <div id="mensagem"></div>

          
     </div>


</body>
</html>