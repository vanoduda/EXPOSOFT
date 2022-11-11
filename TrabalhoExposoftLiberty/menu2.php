<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="menuresponsivov2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <title>MENU</title>
</head>

<body>
    <header>
        <nav class="container-menu">
            <div class="logo-nome">
                <div class="logo">
                    <img src="logo.png" width="160px" height="160px">
                </div>
                <div class="nome-site">
                    <a  class="aliberty" href="index.php"><h1 class="h1liberty">LIBERTY</h1></a>
                </div>
            </div>
            <div class="menu-options">
                <ul>
                    <li class="option"><a href="">Viagens</a></li>
                    <li class="option"><a href="cartaopresente.php">Cartão</a></li>
                    <li class="option"><a href="dicas.php">Dicas</a></li>
                </ul>
            </div>
            <div id="menu-right">
                <a href="carrinho20.php"><img class="botao-carrinho" src="carrinho.png" width="40px"></a>
                <a href="minhaconta1.php"><img class="botao-login" src="privado.png" width="50px"></a>  
            </div>
            <!-- para a responsividade -->
            <div class="mobile-menu-icon">
                <button onclick="aparecer()"><img class="icon" src="white_menu.svg"></button>
            </div   >
        </nav>

        <div class="mobile-menu">
            <ul>
                <li><a href="">Viagens</a></li>
                <li><a href="cartaopresente.php">Cartão</a></li>
                <li><a href="dicas.php">Dicas</a></li>
            </ul>
        </div>
        <div class="submenu">
            <div class="submenu-texto">
                Aqui você encontra os melhores pacotes para viajar pelo Brasil!
            </div>
        </div>
    </header>
    <script src="menu.js">
    </script>
</body>

</html>