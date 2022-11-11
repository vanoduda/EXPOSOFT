<?php
$conexao=mysqli_connect("localhost","root","","liberty");
if (isset($_POST['enviar'])){

  
$nome=$_POST["nome"];
$cpf=$_POST["cpf"];
$email=$_POST["email"];
$senha=$_POST["senha"];
$confsenha=$_POST["confsenha"];

   $sql="SELECT * FROM cadastrarusuario WHERE email ='$email'";
   $result=mysqli_query($conexao,$sql);
    $loginencontrado=mysqli_num_rows($result);
     if ($loginencontrado>0){
         echo"Login já existente";
     }
else{
    if(
    $senha == $confsenha
    ){
    $sql1="INSERT INTO cadastrarusuario (nome,cpf,email,senha) value('$nome','$cpf','$email','$senha')";
    $result1=mysqli_query($conexao, $sql1);
    echo"<script>alert('Se cadastre')</script>";
    echo "<script>window.location.href='minhaconta.php'</script>";
}
    else{
        echo"<script>alert('Senhas incorretas')</script>";
        echo "<script>window.location.href='minhaconta.php'</script>"; 
    }
echo "<script>window.location.href='blog.php'</script>"; 
}
    
}
?>