<?php 
include("conexao.php");

$consulta = "SELECT * FROM cadastro LIMIT 10" ; // LIMITA A QUANTIDADE DE EXIBIÇÃO;
//essa variavel consulta vai selecionar todas as linhas e todas as colunas da tabela cadastro;
//vou chamar a função que vai rodar:
$con = $mysqli->query($consulta) or die($mysqli->error);
/**
 * @var Criação de lista de constantes:
 */
        const text = array('N°','Nome Completo','Endereco','telefone fixo','email oficial');
 /**                        0       1             2          3       4      5      6
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
    <link rel="shortcut icon" href="./img/favi_icon1.png">
    <link rel="stylesheet" type="text/css" href="../style/style.css" media="screen">
    
</head>
<body>
    <header>
     cabeçalho da Pagina
    </header>
    <main>
    <table>
        <tr>
            <td><?php echo text[0];?></td>
            <td><?php echo text[1];?></td>
            <td><?php echo text[2];?></td>
            <td><?php echo text[3];?></td>
            <td><?php echo text[4];?></td>
            <td><?php echo ucwords("<b> ações: </b>") ?></td>
        </tr><!--//dentro do while eu vou criar uma variavel que vou puxar do banco de dados -->
        <?php while($dado = $con->fetch_array()){  ?>
            <!-- A variavel dados que recebe a variavel $con = $mysqli->query($consulta) que contem $consulta--> 
    </table>
    <table>
        <tr >
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
