<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cartao.css?v2">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Nanum+Myeongjo&family=Petit+Formal+Script&display=swap"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <title>Cartão Presente</title>
</head>
<div class="menu">
<?php
    include 'menu2.php';
?>
</div>
<br><br>
<body>
    <h1 class="nome">CARTÃO PRESENTE</h1>

    <div class="funcionamento">
        <div class="titulo">Funcionamento do cartão</div>
        <br>
        <div class="texto2">
            O Cartão Presente funciona como uma maneira divertida e criativa para
            dar um presente diferente.<br>
            Criamos um cartão presente com um propósito de elaborar uma possibilidade a mais
            para você dar de <br> presente em um aniversário, lua de mel ou outra data comemorativa
            de seu gosto.
            Temos três tipos de <br>cartões e com finalidades
            distintas, podendo variar de limites.
        </div>
    </div>
    <br><br>
    <b><div class="escolha">Qual cartão deseja escolher?</div></b>
    <br><br>
    <div class="all">
        <div class="imgcartao">
            <img src="luademel.png">
        </div>
        <div class="textluademel">
            <h2 class="titles">Cartão Lua de Mel</h2>
            <p class="descriptions">Como o próprio nome já explica, o cartão Lua De Mel foi feito para presentear alguém que casou
                recentemente. Como utilidade, serve para demonstrar um ato de acolher e consentir o patrimônio do
                casal
                escolhido para presentear. O limite é de R$10,000, com mínimo de R$500,00, podendo ser parcelado em até 5x SEM JUROS, 
            </p>
        </div>
    </div>
    <br>
    <br>
    <!--Primavera-->
    <div class="all">
        <div class="textgold">
            <h2 class="titles">Cartão Premium</h2>
            <p class="descriptions"> Cartão PREMIUM tem como objetivo ser de alto padrão e estar atualizado para o presenteado. Com o
                limite
                um pouco mais alto, o PREMIUM serve para compras de presentes variadas e com preços em até R$10,000.
                Com o PREMIUM, o limite é
                de R$15,000,
                podendo haver parcelas de até 10x SEM JUROS e de 11 à
                18 vezes COM JUROS.
            </p>
        </div>
        <div class="imgcartao1">
            <img src="premium.png">
        </div>
    </div>
    <br>
    <br>
    <div class="all">
        <div class="imgcartao">
            <img src="gold.png">
        </div>
        <div class="textgold">
            <h2 class="titles">Cartão Gold</h2>
            <p class="descriptions">
                GOLD é o nosso cartão mais premiado e inovador, o mais alto padrão e recente, nossa
                marca
                registrada e o mais aclamado pelo público. Com o padrão mais elevado dos outros dois, o GOLD
                pode ser utilizado para uma só viagem ou para mais de uma variadas. Limite de R$20,000, com o
                parcelamento de até
                10x SEM JUROS e de 11 à 18 vezes COM JUROS.
            </p>
        </div>
    </div>
    <br><br>
        <div class="escolhas">
        <input class="radios" name="ga" type="radio" value="lua de mel">Lua de Mel
        <input class="radios" name="ga" type="radio" value="premium">Premium
        <input class="radios" name="ga" type="radio" value="gold">Gold
    </div>
    
    <div class="pagina">
        <div id="presenteado">
                <br>
            <form class="formulario" action="cartaophp.php" method="POST">
            <div class="card-header">
                  <h2>Dados do presenteado</h2>
                </div>
            <label>Nome:
        <input class="forminputs" name="nome" type="text" /></label><br/>
        <label>Nascimento:
        <input class="forminputs" name="data" type="date" /></label><br/>
        <label>E-mail:
        <input class="forminputs" name="email" type="text" /></label><br/>
        <label>Cep:
        <input name="cep" type="text" id="cep" class="forminputs"  maxlength="9"
               onblur="pesquisacep(this.value);"placeholder=".....-.." /></label>
        <br>
        <label>Número:
        <input class="forminputs" name="numero" type="text"/></label><br/>
        <label>Complemento:
        <input class="forminputs" name="complemento" type="text" /></label><br/>
        <label>Rua:
        <input class="forminputs" id="rua" name="rua" type="text" ></label><br/>
        <label>Bairro:
        <input class="forminputs" id="bairro" name="bairro" type="text"/></label><br/>
        <label>Cidade:
        <input class="forminputs" id="cidade" name="cidade" type="text"/></label><br/>
        <label>Estado:
        <input class="forminputs" id="estado" name="estado" type="text"/></label><br/>
        <label>Preço
        <input class="forminputs" id="preco" name="preco" type="text"/></label><br/>
        <br>
        <input href="pagamento.php" type="submit" class="enviar" name="enviar" value="ENVIAR">
        </form>
        </div>
    </div> 
    <br>
    
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
<script src="cep.js"></script>
    </body>
</html>
