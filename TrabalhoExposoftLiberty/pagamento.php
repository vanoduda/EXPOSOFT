<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="paga2.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Nanum+Myeongjo&family=Petit+Formal+Script&display=swap"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <title>Pagamento</title>
</head>
<?php
    include 'menu2.php';
?>
<br>
<body>
    <h1>Resumo da sua viagem</h1>
<br>
<br>
<div id="dados">
    <form class="formulario" action="quizpag.php" method="post">
          <h3 class="quem">Quem vai viajar?</h3>
          <br>
          <div class="nome">Nome
          <input type="text" id="usuario" name="nome" autocomplete="off"></div>
          <div>E-mail
          <input type="text" id="usuario" name="email" autocomplete="off"></div>
          <div>Telefone
          <input type="text" id="usuario" name="telefone" autocomplete="off"></div>
          <br>
          <input class="pagar" type="submit" name="enviar" value="Enviar">  
    </form>

    <div class="total">
        Total a pagar:
        <div><input type="text" id="precopagar" name="nome" autocomplete="off"></div>
    </div>
</div>

<div class="escolhas">
        <input class="radios" name="ba" type="radio" value="lua de mel">Cartão de débito
        <input class="radios" name="ba" type="radio" value="premium">Cartão de crédito
        <input class="radios" name="ba" type="radio" value="gold">Boleto
    </div>

<div id="final">
<h2 class="quem">Informe seus dados:</h2>
<br>
    <form class="forms" action="pagamentophp.php" method="post">
          <br>
          <div><input type="text" id="carton" name="nomcard" autocomplete="off" placeholder="Nome do cartão"></div><br>
          <div><input type="text" id="carton" name="nuncard" autocomplete="off" placeholder="Número no cartão"></div><br>  
          <div><input type="text" id="carton" name="codseg" autocomplete="off" placeholder="Código de segurança"></div><br>
          <div><input type="text" id="carton" name="bandeira" autocomplete="off" placeholder="Bandeira"></div><br>
          <div><input type="text" id="carton" name="parcelamento" autocomplete="off" placeholder="Parcelamento"></div><br>
          <div><input type="text" id="carton" name="validade" autocomplete="off" placeholder="Validade"></div><br>
          <input class="pagar" type="submit" name="pagar" value="Pagar">  
    </form>
</div>
<br><br>

<br><br>
<footer>
    <div class="tudo">
        <div class="ana">
        <img class="fotinho-ana" src="ana.jpg" width="60px">
        <p>
        Ana Júlia Melo
        </p>
        </div>

        <div class="duda">
        <img class="fotinho-duda" src="eduarda.jpg" width="60px">
        <p>
        Eduarda Vano
        </p>
        </div>

        <div class="so">
        <img class="fotinho-so" src="sophia.jpg" width="60px">
        <p>
        Sophia Bergamo
        </p>
       </div>

        <div class="sobre-nos">
        <h2>Sobre Nós</h2> 
        <p class="text">Somos uma Agência de viagens nacional que <br> deseja oferecer pacotes de viagens pelo Brasil todo.</p>
        </div>

        <div class="redes-sociais">
        <button class="twitter-btn"> 
         <a href="#"><img class="tt" src="twitter.png" width="30px"></a>
        </button>

        <button class="instagram-btn"> 
        <a href="#"><img class="insta" src="instagram.png" width="30px"></a>
        </button>

        <button class="whatsapp-btn"> 
        <a href="#"><img class="whats" src="whatsapp.png" width="30px"></a>
        </button>
        </div>

        <div class="endereco">
        <div class="cep">
        <a href="#"><img class="cep" src="endereco.png" width="20px"></a>
        <p>
            R. Emma, 500 - Campos Verdejantes, São Caetano do Sul - SP
        </p>
    </div>
    
    <div class="tel">
        <a href="#"><img class="tel" src="telefone.png" width="20px"></a>
        <p>
            +55 11 9679-81669
        </p>
        </div>

        <div class="tel">
        <a href="#"><img class="email" src="o-email.png" width="20px"></a>
        <p>liberty.viagens@gmail.com.br</p>
        </div>
        </div>
    </div>
</footer>
<script src="menu.js"></script>
</body>
</html>