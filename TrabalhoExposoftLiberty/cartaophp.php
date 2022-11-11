<?php
$conexao=mysqli_connect("localhost","root","","liberty");
if (isset($_POST['enviar'])){

$nome=$_POST["nome"];
$data=$_POST["data"];
$email=$_POST["email"];
$cep=$_POST["cep"];
$numero=$_POST["numero"];
$complemento=$_POST["complemento"];
$rua=$_POST["rua"];
$bairro=$_POST["bairro"];
$cidade=$_POST["cidade"];
$estado=$_POST["estado"];
$preco=$_POST["preco"];

    $sql="SELECT * FROM presente WHERE email ='$email'";
   $result=mysqli_query($conexao,$sql);
    $loginencontrado=mysqli_num_rows($result);
     if ($loginencontrado>0){
         echo"<script>alert('Email já cadastrado');</script>";
         echo "<script>window.location.href='cartaopresente.php'</script>";
     }
else{
    $sql1="INSERT INTO presente (nome,data,email,cep,numero,complemento,rua,bairro,cidade,estado,preco) 
    value('$nome','$data','$email','$cep','$numero','$complemento','$rua','$bairro','$cidade','$estado','$preco')";
    $result1=mysqli_query($conexao, $sql1);
        echo"<script>alert('Login efetuado com sucesso');</script>";
        echo "<script>window.location.href='pagamento.php'</script>";
 
}
}
?>