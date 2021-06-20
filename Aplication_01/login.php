<?php
/**
 * @internal incluindo meu arquivo de conexão com o Banco:
 */
include_once("./php/connectedBD.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="short icon" href="./icones/Favicons/restricted_folder_file_10341 (1).ico">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <script src="./js/file-01.js"></script>
  </head>
  <body id="corpo-1">
    <main>
      <article>
      <div id="box-1"><h2 id="title-0"> BEM VINDO AO BANCO DO ANDRE </h2></div>
         <div id="box-2"><h3 id="forms-1" name="titulo formulario"> FAÇA LOGIN NO SISTEMA </h3>
         <br><br>              
             <form method="POST" action=""> <!--Criado um Metodo de envio POST, sem action ainda-->
                <p><input  placeholder="Email" type="text"  name="email"></p>
                <br>
                <p><input  placeholder="Password" type="password"  alt="alternate" name="senha"></p>
                <br>
                <!--Acima forma criados 02 Labels com 02 IDs -->
                <p><a id="fogout-password" href="#"> Esqueceu sua senha </a></p>
                <br>
                <span><input class="botao" type="button" value="Entrar"></span>
                <span><input class="botao" type="button" value="Limpar"><span>
                <br>
                <!--Foi criado um Botão personalizado com efeito para enviar as informações -->
                <!--Foi adicionado uma classe para atender todos os padrãoes -->
            </form>
          </div>
       </div>
     </article>
   </main>
<footer>
  
</footer>          
  </body>
</html>
