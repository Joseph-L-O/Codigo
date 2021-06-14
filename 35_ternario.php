<?php

echo "<br>";

$A6 = "1";
$A7 = "1";
$J6 = "01";
$J7 = "99";
function ternario1(float  $valor1, float $valor2, float $valor3, float $valor4)
{
 global $A6, $A7, $J6, $J7;
 $valor1 = $A6;
 $valor2 = $A7;
 $valor3 = $J6;
 $valor4 = $J7;
switch($valor1){
case 0:
echo $A6 == '1'?'0':
($A6 == '2'  ? '5' :
($A6 == '3'  ? '9' :
($A6 == '4'  ? '0' : 
($A6 == '5'  ? '5' :
($A6 == '6'  ? '5' :
($A6 == '11' ? '0' :
($A6 == '12' ? '5' :
($A6 == '13' ? '9' :
($A6 == '14' ? '5' :
($A6 == '15' ? '2' : 
($A6 == '16' ? '2' :
($A6 == '17' ? '0' :
($A6 == '18' ? '5' :
($A6 == '19' ? '3' :
($A6 == '20' ? '5' :
($A6 == '21' ? '9' : " "))))))))))))))));
break;
case 1:
echo $A7 == '1'?'0':
($A7 == '2' ?  '5' :
($A7 == '3' ?  '9' :
($A7 == '4' ?  '0' : 
($A7 == '5' ?  '5' :
($A7 == '6' ?  '5' :
($A7 == '11' ? '0' :
($A7 == '12' ? '5' :
($A7 == '13' ? '9' :
($A7 == '14' ? '5' :
($A7 == '15' ? '2' : 
($A7 == '16' ? '2' :
($A7 == '17' ? '0' :
($A7 == '18' ? '5' :
($A7 == '19' ? '3' :
($A7 == '20' ? '5' :
($A7 == '21' ? '9' : " "))))))))))))))));
break;
case 2:
echo $J6 == '1'?'0':
($J6 == '2' ?  '5' :
($J6 == '3' ?  '9' :
($J6 == '4' ?  '0' : 
($J6 == '5' ?  '5' :
($J6 == '6' ?  '5' :
($J6 == '11' ? '0' :
($J6 == '12' ? '5' :
($J6 == '13' ? '9' :
($J6 == '14' ? '5' :
($J6 == '15' ? '2' : 
($J6 == '16' ? '2' :
($J6 == '17' ? '0' :
($J6 == '18' ? '5' :
($J6 == '19' ? '3' :
($J6 == '20' ? '5' :
($J6 == '21' ? '9' : " "))))))))))))))));
break;
echo $J7 == '1'?'0':
($J7 == '2' ?  '5' :
($J7 == '3' ?  '9' :
($J7 == '4' ?  '0' : 
($J7 == '5' ?  '5' :
($J7 == '6' ?  '5' :
($J7 == '11' ? '0' :
($J7 == '12' ? '5' :
($J7 == '13' ? '9' :
($J7 == '14' ? '5' :
($J7 == '15' ? '2' : 
($J7 == '16' ? '2' :
($J7 == '17' ? '0' :
($J7 == '18' ? '5' :
($J7 == '19' ? '3' :
($J7 == '20' ? '5' :
($J7 == '21' ? '9' : " "))))))))))))))));
break;
default:
echo "Rode novamente o codigo";
break;
       }
}			   
//chamar a função:


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>IF TERNARIO PAGINA</title>
    <meta charset="utf-8">
    <style>
    * {
      magin: 0;
      background-color:pink;
      text-aling:auto;
      text-decoration:none;
    }
    #result1 {
      padding-top:3px;
      padding:auto;
      font-family:arial;
      font-size:20px;
      text-align:left;
      color:red;
      shadow:auto;
      
    }
    #result2 {
      padding-top:3px;
      padding:auto;
      font-family:arial;
      font-size:20px;
      text-align:left;
      color:red;
      shadow:auto;
    }
    #result3 {
      padding-top:3px;
      padding:auto;
      font-family:arial;
      font-size:20px;
      text-align:left;
      color:red;
      shadow:auto;
    }
    #result4 {
      text-align:center;
      padding-top:3px;
      padding:auto;
      font-family:Lucida, Sans-serif, Verdana;
      color:yellow;

    }

    </style>
    </head>
    <body>
    <h3 id="result1"> Resultado do if ternario projeto Karstem remessa:    <?    ?> <br></h3>
    <br>
    <hr>
    <h3 id="result2"> Resultado do if ternario projeto karstem remessa(TAG):<?    ?> <br></h3>
    <br>
    <hr>
    <h3 id="result3"> Resultado do if ternario projeto Karstem Retorno:     <?        ?> <br></h3>
    <br>
    <hr>
    <h1 id="result4"> FIM DO TERNARIO </h1>
    <br> 
  </body>
</html>


