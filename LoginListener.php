<?php

session_start();

$str = "dbname=rockstar user=postgres  password=postgres host=localhost port=5432";
$conn= pg_connect($str) or die ("Erro na ligacao");

?>

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


        /* Caixa grey baixo */

        .password {
            box-sizing: border-box;

            position: absolute;
            width: 442px;
            height: 51px;
            left: 828px;
            top: 608px;

            background: #EAE4E1;
            border: 2px solid #FFFFFF;
        }

        /* Caixa grey cima */

        .username {
            box-sizing: border-box;

            position: absolute;
            width: 442px;
            height: 51px;
            left: 828px;
            top: 529px;

            background: #EAE4E1;
            border: 2px solid #FFFFFF;
        }

        /* Username: */

        .texto_username {
            position: absolute;
            width: 167px;
            height: 45px;
            left: 643px;
            top: 526px;

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
            left: 643px;
            top: 602px;

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
            width: 200px;
            height: 66px;
            left: 875px;
            top: 753px;
        }

        /* Botão login */

        .botao_login {
            position: absolute;
            width: 200px;
            height: 66px;
            left: 1100px;
            top: 753px;
        }
    </style>

</head>
<body>

<?php

if(isset($_POST['username']) && isset($_POST['password'])){
    $username= $_POST['username'];
    $password= $_POST['password'];

    $user= pg_query($conn, "select * from User_, client where username = '$username' and password = '$password' and client.user__username = User_.username"  );
    if(pg_fetch_array($user)!=false){
        $_SESSION['nome'] = $username;
        $_SESSION['artist'] = false;
        header("Location: Homepage.php");
    }else{
        print "<script>alert('Esse username ainda não se encontra registado, por favor escolha outro');</script>";
    }
}

?>

<header>
    <!-- Logo -->
    <img id=logo src="Icones%20Rockstar%20Inc/footer/logo%20com%20texto%20footer.png" height="60" width="auto"/>
</header>

<main>
    <div class="container">

        <div class="caixa"></div>

        <h1 class="login" >Login</h1>

        <!--Caixas de texto-->

        <form id="form_login" method="post" action="">

        <input type="text" name="username" required placeholder="" class="username">
        <input type="password" name="password" required placeholder="" class="password">

        </form>

        <!--Texto-->

        <div class="texto_password">Password:</div>
        <div class="texto_username">Username:</div>

        <!--Botões-->

        <div class="botao_register"><a href="RegisterListener.php"><img src="Icones%20Rockstar%20Inc/Login/botao%20register.png" height="auto" width="179" alt="img"></a></div>
        <div class="botao_login"><img src="Icones%20Rockstar%20Inc/Login/botao%20login.png" height="auto" width="197" alt="img" onclick="javascript:document.getElementById('form_login').submit()" ></div>

    </div>
</main>
</body>
</html>