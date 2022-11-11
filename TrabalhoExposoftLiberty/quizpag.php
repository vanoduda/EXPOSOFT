<?php
$conexao=mysqli_connect("localhost","root","","liberty");
if (isset($_POST['enviar'])){

$nome=$_POST["nome"];
$email=$_POST["email"];
$telefone=$_POST["telefone"];

    $sql="INSERT INTO quizpag (nome,email,telefone) 
    value('$nome','$email','$telefone')";
    $result=mysqli_query($conexao, $sql);
    echo"<script>alert('Feito! Faça o pagamento abaixo!')</script>";
    echo "<script>window.location.href='pagamento.php'</script>"; 
}
?>