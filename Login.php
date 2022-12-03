<!DOCTYPE html>
<html lang="en">
<head>
    <link href="CSS/login.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Login - Rockstar</title>

    <style>

        .container{
            transform: translate(-50%, -50%);
            position: absolute;
            top: 50%;
            left: 50%;
            width: 1920px;
            height: 1080px;
            padding: 0;
            margin: 0;
        }

        /* Caixa login */

        .caixa {
            box-sizing: border-box;

            position: absolute;
            width: 774px;
            height: 535px;
            left: 573px;
            top: 328px;

            background: #E7B098;
            border: 2px solid #FFFFFF;
            border-radius: 36px;
        }

        /* Login */

        .login {
            position: absolute;
            width: 295px;
            height: 45px;
            left: 647px;
            top: 381px;

            font-family: 'Franklin Gothic Heavy';
            font-style: normal;
            font-weight: 400;
            font-size: 60px;
            line-height: 68px;

            color: #FFFFFF;
        }
        .botao_listener {
            position: absolute;
            width: 239px;
            height: 77px;
            left: 981px;
            top: 459px;
        }

        .botao_artist {
            position: absolute;
            width: 239px;
            height: 77px;
            left: 700px;
            top: 459px;
        }
    </style>

</head>
<body>


<?php

require_once 'HeaderLogin.php';

?>

<main>
    <div class="container">

        <div class="caixa"></div>

        <h1 class="login" >Login</h1>

        <!--Botões-->

        <div class="botao_listener"><a  href="LoginListener.php"><img src="Icones%20Rockstar%20Inc/Register/botao%20listener.png" height="77" width="auto" alt="img"></div>
        <div class="botao_artist"><a  href="LoginArtist.php"><img src="Icones%20Rockstar%20Inc/Register/botao%20artist.png" height="77" width="auto" alt="img"></div>

    </div>
</main>
</body>
</html>