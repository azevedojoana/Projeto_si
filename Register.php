<!DOCTYPE html>
<html lang="en">
<head>
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


        /* Caixa grey baixo */

        .password {
            box-sizing: border-box;

            position: absolute;
            width: 442px;
            height: 51px;
            left: 836px;
            top: 710px;

            background: #EAE4E1;
            border: 2px solid #FFFFFF;
        }

        /* Caixa grey cima */

        .username {
            box-sizing: border-box;

            position: absolute;
            width: 442px;
            height: 51px;
            left: 836px;
            top: 631px;

            background: #EAE4E1;
            border: 2px solid #FFFFFF;
        }

        /* Username: */

        .texto_username {
            position: absolute;
            width: 167px;
            height: 45px;
            left: 651px;
            top: 628px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 35px;
            line-height: 40px;
            text-align: right;

            color: #FFFFFF;
        }


        /* Password: */

        .texto_password {

            position: absolute;
            width: 167px;
            height: 45px;
            left: 651px;
            top: 704px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 35px;
            line-height: 40px;
            text-align: right;

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
<header>
    <!-- Logo -->
    <img id=logo src="Icones%20Rockstar%20Inc/footer/logo%20com%20texto%20footer.png" height="60" width="auto"/>
</header>


<main>
    <div class="container">

        <div class="caixa"></div>

        <h1 class="register" >Register</h1>

        <!--Caixas de texto-->

        <form id="form_register" method="post" action="">

            <input required name="username" type="text" class="username">
            <input required name="password" type="password" class="password">

        </form>

        <?php

        if(isset($_POST['username']) && isset($_POST['password'])){
            $username= $_POST['username'];
            $password= $_POST['password'];

            $str = "dbname=rockstar user=postgres  password=postgres host=localhost port=5432";
            $conn= pg_connect($str) or die ("Erro na ligacao");
            echo "Ligação estabelecida";

            pg_query($conn, "insert into User_ (username, password) values('$username', '$password')");

        }

        ?>

        <!--Texto-->

        <div class="texto_password">Password:</div>
        <div class="texto_username">Username:</div>

        <!--Botões-->

        <div class="botao_register"><img src="Icones%20Rockstar%20Inc/Register/botao%20register2.png" height="73" width="auto" alt="img" onclick="javascript:document.getElementById('form_register').submit()" ></div>
        <div class="botao_login"><a href="Login.html"><img src="Icones%20Rockstar%20Inc/Login/botao%20login.png" height="70" width="auto" alt="img"></a></div>
        <div class="botao_listener"><img src="Icones%20Rockstar%20Inc/Register/botao%20listener.png" height="77" width="auto" alt="img"></div>
        <div class="botao_artist"><img src="Icones%20Rockstar%20Inc/Register/botao%20artist.png" height="77" width="auto" alt="img"></div>
    </div>
</main>

</body>
</html>