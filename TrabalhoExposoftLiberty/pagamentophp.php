<?php
$conexao=mysqli_connect("localhost","root","","liberty");
if (isset($_POST['pagar'])){

$nomcard=$_POST["nomcard"];
$nuncard=$_POST["nuncard"];
$codseg=$_POST["codseg"];
$bandeira=$_POST["bandeira"];
$parcelamento=$_POST["parcelamento"];
$validade=$_POST["validade"];
    
   $sql="SELECT * FROM pagamento WHERE nuncard ='$nuncard'";
   $result=mysqli_query($conexao,$sql);
    $numerocartao=mysqli_num_rows($result);
     if ($numerocartao>0){
         echo"Cartão já existente";
     }
else{
    $sql1="INSERT INTO pagamento (nomcard,nuncard,codseg,bandeira,parcelamento,validade) value('$nomcard','$nuncard','$codseg','$bandeira','$parcelamento','$validade')";
    $result1=mysqli_query($conexao, $sql1);
    echo"<script>alert('Pagamento Realizado')</script>";
    echo "<script>window.location.href='index.php'</script>"; 
}
}
?>