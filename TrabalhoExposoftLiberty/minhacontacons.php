<?php
    $conexao=mysqli_connect("localhost","root","","liberty");
    if (isset($_POST['enviar'])){
    $email=$_POST['email'];
    $senha=$_POST['senha'];
   
    $sql="SELECT * FROM cadastrarusuario where email='$email'and senha='$senha'";
        
    $result=mysqli_query($conexao,$sql);
    $numlinha=mysqli_num_rows($result);
    if($numlinha>0){ 
        echo "<script>
        alert
            ('Login Encontrado');
    </script>";
    echo "<script>window.location.href='blog.php'</script>"; 
    }
    
else{
    echo "<script>
        alert
            ('Login Não Encontrado');
        </script>";  
    echo "<script>window.location.href='minhaconta.php'</script>"; 
}
    }

?>