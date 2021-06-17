<?php 
include("conexao.php");

$consulta = "SELECT * FROM cadastro LIMIT 10" ; // LIMITA A QUANTIDADE DE EXIBIÇÃO;
//essa variavel consulta vai selecionar todas as linhas e todas as colunas da tabela cadastro;
//vou chamar a função que vai rodar:
$con = $mysqli->query($consulta) or die($mysqli->error);
/**
 * @var Criação de lista de constantes:
 */
        $var1 = ucwords("<b> N° </b>");
        $var2 = ucwords("<b> nome Completo</b> ");
        $var3 = ucwords("<b> endereco Completo </b>");
        $var4 = ucwords("<b> telefone Celular </b>");
        $var5 = ucwords("<b> email Fixo </b>");
/**
 * @param While $dado = $con->fetch_array()){
 * @param Essa função pega todos os dados da minha tabela
 * @param e armazena na variavel $dado;
 * @param Cada vez que eu rodar o While, vou fazer isso pra cada uma das linhas.
 * @param 
 */
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/Projeto_/classe/img/favi_icon1.png">
    <link rel="stylesheet" type="text/css" href="/Projeto_/style/style.css" media="screen">
    
</head>
<body>
    <header>
     cabeçalho da Pagina
    </header>
    <main>
    <table #id="borda">
        <tr>
            <td><?php echo $var1;?></td>
            <td><?php echo $var2;?></td>
            <td><?php echo $var3;?></td>
            <td><?php echo $var4;?></td>
            <td><?php echo $var5;?></td>
            <td><?php echo ucwords("<b> ações: </b>") ?></td>
        </tr><!--//dentro do while eu vou criar uma variavel que vou puxar do banco de dados -->
        <?php while($dado = $con->fetch_array()){  ?>
            <!-- A variavel dados que recebe a variavel $con = $mysqli->query($consulta) que contem $consulta--> 
    </table>
    <table border="1">
        <tr>
            <td><?php echo $dado["codigo"];?></td>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["adress"];?></td>
            <td><?php echo $dado["telephone"];?></td>
            <td><?php echo $dado["email"];?></td>
            <td><a href="editar.php?codigo=<?php echo $dado["codigo"];?>">Editar</a></td>
            <td><a href="Excluir.php?codigo=<?php echo $dado["codigo"];?>">Excluir</a></td>
            <!--  echo $dado date("d/m/y", strtotime($dado[datadecadastro])); ?> -->
            <!-- ela formata essa string num formato por data por segundos -->
        </tr>
        <?php } ?>
    </table>
    </main>
    <footer>
        Rodapé d Pagina
    </footer>
</body>
</html>