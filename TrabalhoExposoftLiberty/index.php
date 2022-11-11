<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="index.css?v2">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <title>MENU</title>
</head>
<?php
    include 'menu2.php';
?>
<body>
    <!--PARETE DO MEIO-->
    <div class="all"> <!--DIV QUE PEGA TUDO-->
        <!--MAPA-->
        <div class="mapa col-l-12 col-m-12 col-s-12">
            <img src="mapa.png" width="800px" class="img-mapa">
        </div>
        <!--TITULO-->
        <div class="titulo">
            <h2>PACOTES DE VIAGENS PROMOCIONAIS</h2>
        </div>
        <!--PACOTES-->
        <div class="pacotes col-l-12 col-m-12 col-s-12">
            <!--PACOTE PÃO DE AÇÚCAR-->
            <div class="pacote1">
                <div class="img-pacote col-l-12 col-m-12 col-s-12">
                    <img class="img-pacotes" src="paoAcucar.png" width="300px">
                </div>
                <div class="texto-pacote col-l-12 col-m-12 col-s-12">
                    <h5>Pão de Açúcar / RJ</h5>
                </div>
                <br>
                <div class="preco col-l-6 col-m-6 col-s-6">
                    <p>R$0,00</p>
                </div>
                <div class="comprar col-l-6 col-m-6 col-s-6">
                    <button class="btn-comprar">
                        <a href="#"><img src="carrinho.png" width="20px"></a>
                    </button>
                </div>
            </div>
            <!--PACOTE LENÇÓIS MARANHENCES-->
            <div class="pacote2 col-l-4 col-m-6 col-s-12">
                <div class="img-pacote col-l-12 col-m-12 col-s-12">
                    <img class="img-pacotes" src="lencois.jpg" width="300px">
                </div>
                <div class="texto-pacote col-l-12 col-m-12 col-s-12">
                    <h5>Lençóis Maranhenses / MA</h5>
                </div>
                <br><br>
                <div class="preco col-l-6 col-m-6 col-s-6">
                    <p>R$0,00</p>
                </div>
                <div class="comprar col-l-6 col-m-6 col-s-6">
                    <button class="btn-comprar">
                        <a href="#"><img src="carrinho.png" width="20px"></a>
                    </button>
                </div>
            </div>
            <!--PACOTE GRAMADO-->
            <div class="pacote3 col-l-4 col-m-6 col-s-12">
                <div class="img-pacote col-l-12 col-m-12 col-s-12">
                    <img class="img-pacotes" src="gramado.jpg" width="300px">
                </div>
                <div class="texto-pacote col-l-12 col-m-12 col-s-12">
                    <h5>Gramado / RS</h5>
                </div>
                <br>
                <div class="preco col-l-6 col-m-6 col-s-6">
                    <p>R$0,00</p>
                </div>
                <div class="comprar col-l-6 col-m-6 col-s-6">
                    <button class="btn-comprar">
                    <a href="#"><img src="carrinho.png" width="20px"></a>
                    </button>
                </div>
            </div>
        </div>
        <!--VER MAIS-->
        <div class="ver-mais">
        <a href="pacotes.php">Ver Mais</a>
        </div>
        <!--QUEM SOMOS-->
        <div class="quem-somos col-l-12 col-m-12 col-s-12">
            <video controls src="LIBERTY.mp4" type="video/mp4" width="900px" class="videozinho"></video>
        </div>
    </div> <!--DIV QUE PEGA TUDO-->

    <!-----FOOTER------>
    <footer class="footer col-l-12 col-m-12 col-s-12">
        <!--AVATARES-->
        <div class="avatar col-l-3 col-m-6 col-s-12">
            <!--ANA-->
            <div class="ana col-l-4 col-m-4 col-s-4">
                <img src="ana.jpg" class="foto-ana" width="60px">
                <div class="nome-ana">
                    <h5>Ana Júlia Melo</h5>
                </div>
            </div>
            <!--EDUARDA-->
            <div class="duda col-l-4 col-m-4 col-s-4">
                <img src="eduarda.jpg" class="foto-duda" width="60px">
                <div class="nome-duda">
                    <h5>Eduarda Vano</h5>
                </div>
            </div>
            <!--SOPHIA-->
            <div class="so col-l-4 col-m-4 col-s-4">
                <img src="sophia.jpg" class="foto-so" width="60px">
                <div class="nome-so">
                    <h5>Sophia Bergamo</h5>
                </div>
            </div>
        </div>
        <!--SOBRE NÓS-->
        <div class="sobre-nos col-l-3 col-m-6 col-s-12">
            <div class="titulo-nos">
                <h2>Sobre Nós</h2> 
            </div>
            <div class="texto2">
                <p>Somos uma Agência de viagens nacional que deseja oferecer pacotes de viagens pelo Brasil todo.</p>
            </div>
        </div>
        <!--REDES SOCIAIS-->
        <div class="redes-sociais col-l-2 col-m-6 col-s-12">
            
            <div class="whatsapp">
                <button class="whatsapp-btn"> 
                <a href="#"><img src="whatsapp.png" width="50px"></a>
                </button>
            </div>
            <div class="twitter">
                <button class="twitter-btn"> 
                <a href="#"><img src="twitter.png" width="45px"></a>
                </button>
            </div>
            <div class="instagram">
                <button class="instagram-btn"> 
                <a href="#"><img src="instagram.png" width="40px"></a>
                </button>
            </div>
        </div>
        <!--ENDERECO-->
        <div class="endereco col-l-4 col-m-6 col-s-12">
            <div class="lugar">
                <button class="cep">
                    <a href="#"><img src="endereco.png" width="20px"></a>
                </button>
                <div class="paragrafo">
                    <p>R. Emma, 500 - Campos Verdejantes, São Caetano do Sul - SP</p>
                </div>
            </div>
            <div class="telefone">   
                <button class="tel">
                <a href="#"><img src="telefone.png" width="20px"></a>
                </button>
                <div class="paragrafo">
                    <p>+55 11 9679-81669</p>
                </div>
            </div>
            <div class="email">
                <button class="sms">
                <a href="#"><img src="o-email.png" width="20px"></a>
                </button>
                <div class="paragrafo">
                    <p>liberty.viagens@gmail.com.br</p> 
                </div>   
            </div>
        </div>
    </footer>
    <script src="menu2.js"></script>
</body>

</html>