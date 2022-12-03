<?php

session_start();

$user= $_SESSION['nome'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="img/png" href="Icones%20Rockstar%20Inc/header%20login%20e%20register/icon%20logo.png">
    <link href="CSS/login.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Register - Rockstar</title>

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
            width: 979px;
            height: 732px;
            left: 471px;
            top: 244px;

            background: #B3B7A8;
            border: 4px solid #FFFFFF;
            border-radius: 36px;
        }

        /* Register */

        .register {
            position: absolute;
            width: 295px;
            height: 45px;
            left: 543px;
            top: 272px;

            font-family: 'Franklin Gothic Heavy';
            font-style: normal;
            font-weight: 400;
            font-size: 60px;
            line-height: 68px;

            color: #FFFFFF;
        }


        /* Botão register */

        .botao_register {
            position: absolute;
            width: 226px;
            height: 73px;
            left: 1055px;
            top: 859px;
        }

        .botao_login {
            position: absolute;
            width: 226px;
            height: 73px;
            left: 805px;
            top: 859px;
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

        <h1 class="register" >Register</h1>

        <!--Botões-->

        <div class="botao_login"><a href="Login.php"><img src="Icones%20Rockstar%20Inc/Login/botao%20login.png" height="70" width="auto" alt="img"></a></div>
        <div class="botao_listener"><a  href="RegisterListener.php"><img src="Icones%20Rockstar%20Inc/Register/botao%20listener.png" height="77" width="auto" alt="img"></div>
        <div class="botao_artist"><a  href="RegisterArtist.php"><img src="Icones%20Rockstar%20Inc/Register/botao%20artist.png" height="77" width="auto" alt="img"></div>
    </div>
</main>

</body>
</html>