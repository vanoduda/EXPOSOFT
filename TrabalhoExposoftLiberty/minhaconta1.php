<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="minhaconta11.css?v2">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<?php
    include 'menu2.php';
?>
<body>
    <div class="container">
        <!-- Cadastro -->
        <div class="content first-content">
            <div class="first-column">
                <p class="description description-primary">Já tem cadastro?</p>
                <p class="description description-primary">se sua resposta for sim,</p>
                <button id="signin" class="btn btn-primary">Login</button>
            </div>    
            <div class="second-column">
                <form action="minhacontacad.php" method="POST" name="form1"class="form">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input name="nome" type="text" placeholder="Nome">
                    </label>
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input name="cpf" type="text" placeholder="CPF">
                    </label>
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input name="email" type="email" placeholder="Email">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input name="senha" type="password" placeholder="Senha">
                    </label>
                    
                      <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input name="confsenha" type="password" placeholder="Confirmar Senha">
                    </label>
                    <input type="submit" name="enviar" value="Enviar" class="btn btn-second">      
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <p class="description description-primary">Já tem Login?</p>
                <p class="description description-primary">se sua resposta for sim,</p>
                <button id="signup" class="btn btn-primary">Cadastro</button>
            </div>
            <!-- Login -->
            <div class="second-column">
                <form action="minhacontacons.php" method="POST" class="form">
                
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input name="email" type="email" placeholder="Email">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input name="senha" type="password" placeholder="Senha">
                    </label>
                
                    <a href="esqueceusenha.html" class="password" href="#">Esqueceu a senha?</a>
                    <input type="submit" name="enviar" value="Enviar" class="btn btn-second"> 
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="minhaconta.js"></script>
</body>
</html>