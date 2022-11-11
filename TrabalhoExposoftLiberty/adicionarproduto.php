<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<? session_start();  ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <link rel="stylesheet" type="text/css" href=cssphpalterar.css>
<title>Carrinho de Viagens</title>
</head>
<body> 
<center>
<?php
$qtd=0;
require("conexaocarrinho.php");
$sql = "SELECT * FROM agencia";
$qr = mysqli_query($conexao,$sql) ;
while($Linha = mysqli_fetch_assoc($qr)){
    
floatval($Linha['preco']);
echo "<h2>".$Linha['idagencia']."</h2>";
echo "<br><br>"; 
echo "<h2>".$Linha['nome']."</h2>";
echo "<br><br>";
echo "Preço :" . $Linha['preco'];
echo "<br><br>";
echo "<img src=".$Linha['imagem']." />";
echo "<br><br>";
echo "<a href=carrinho20.php?acao=add&id=".$Linha['idagencia'].">Comprar</a>";
echo "<hr>";
}
?>
    </center>
</body>
</html>