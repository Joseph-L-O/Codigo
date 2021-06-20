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
              
             <form method="POST" action=""> <!--Criado um Metodo de envio POST, sem action ainda-->
                <p><input  placeholder="Email" type="text"  name="email"></p>
                <p><input  placeholder="Password" type="password"  alt="alternate" name="senha"></p>
                <!--Acima forma criados 02 Labels com 02 IDs -->
                <p><a href=""> Esqueceu sua senha </a></p>
                <p><input type="button" value="Entrar"></p>
            </form>
          </div>
       </div>
     </article>
   </main>
<footer>
  
</footer>          
  </body>
</html>
