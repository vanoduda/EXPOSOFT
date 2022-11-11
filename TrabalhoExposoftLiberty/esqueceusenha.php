<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Esqueceu senha</title>
    <link rel="stylesheet" href="recuperar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<?php
    include 'menu2.php';
?>
<body>
<form>
<fieldset>
        <legend>Recuperar Senha </legend>

        <input type="password" placeholder="Senha" id="password" required>
        <input type="password" placeholder="Confirme Senha" id="confirm_password" required>

        <button type="submit" class="confirma">Confirmar</button>
    </fieldset>
    </form>

    <div class="botoes">
<a href="minhaconta.php" class="botao-volta" onclick="volta()">Voltar para o site</a>
</div>
<script src="recuperar.js"></script>
    </body>
    </html>