<?php

session_start();

$user= $_SESSION['nome'];

$str = "dbname=rockstar user=postgres  password=postgres host=localhost port=5432";
$conn= pg_connect($str) or die ("Erro na ligacao");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="img/png" href="Icones%20Rockstar%20Inc/header%20login%20e%20register/icon%20logo.png">
    <link href="CSS/geral.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Album - Rockstar</title>

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
        /* foto artista */
        .foto_perfil img{
            position: absolute;
            width: 438px;
            height: 441px;
            left: 160px;
            top: 213px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Caixa musicas */
        .caixa_dir {
            box-sizing: border-box;

            position: absolute;
            width: 1102px;
            height: 687px;
            left: 660px;
            top: 183px;

            background: #B3B7A8;
            border: 4px solid #FFFFFF;
            border-radius: 36px;
        }


        /* Singles */

        .songs {
            position: absolute;
            width: 279px;
            height: 51px;
            left: 712px;
            top: 240px;
        }

        /* Rectangle dir */

        .ret_1 {
            box-sizing: border-box;

            position: absolute;
            width: 1044px;
            height: 57px;
            left: 687px;
            top: 345px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle dir */

        .ret_2 {
            box-sizing: border-box;

            position: absolute;
            width: 1044px;
            height: 57px;
            left: 687px;
            top: 408px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle dir */

        .ret_3 {
            box-sizing: border-box;

            position: absolute;
            width: 1044px;
            height: 57px;
            left: 687px;
            top: 471px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_4 {
            box-sizing: border-box;

            position: absolute;
            width: 1044px;
            height: 57px;
            left: 687px;
            top: 534px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_5 {
            box-sizing: border-box;

            position: absolute;
            width: 1044px;
            height: 57px;
            left: 687px;
            top: 597px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_6 {
            box-sizing: border-box;

            position: absolute;
            width: 1044px;
            height: 57px;
            left: 687px;
            top: 660px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_7 {
            box-sizing: border-box;

            position: absolute;
            width: 1044px;
            height: 57px;
            left: 687px;
            top: 723px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* 3 pontinhos */

        .pont_2 {
            position: absolute;
            left: 1701px;
            top: 361px;

            /* 3 pontinhos */
        }

        .pont_3 {
            position: absolute;
            left: 1701px;
            top: 424px;
        }

        /* 3 pontinhos */

        .pont_4 {
            position: absolute;
            left: 1701px;
            top: 424px;
        }

        /* 3 pontinhos */

        .pont_5 {
            position: absolute;
            left: 1701px;
            top: 488px;
        }

        /* 3 pontinhos */

        .pont_6 {
            position: absolute;
            left: 1701px;
            top: 550px;
        }

        /* 3 pontinhos */

        .pont_7 {
            position: absolute;
            left: 1701px;
            top: 613px;
        }

        /* 3 pontinhos */

        .pont_8 {
            position: absolute;
            left: 1701px;
            top: 676px;
        }

        /* 3 pontinhos */

        .pont_9 {
            position: absolute;
            left: 1701px;
            top: 739px;
        }


        /* Stuffed & Ready */
        h1{
            position: absolute;
            width: 438px;
            height: 45px;
            left: 160px;
            top: 675px;

            font-family: 'Franklin Gothic Heavy';
            font-style: normal;
            font-weight: 400;
            font-size: 50px;
            line-height: 57px;
            text-align: center;

            color: #566D49;
        }

        /* Cherry Glazerr */

        h2{
            position: absolute;
            width: 420px;
            height: 45px;
            left: 160px;
            top: 738px;

            font-family: 'Franklin Gothic Medium';
            font-style: italic;
            font-weight: 400;
            font-size: 40px;
            line-height: 45px;
            text-align: center;

            color: #566D49;
        }


        /* Come Back Around - Moon Boots, ... */

        .texto_ret_1 {
            position: absolute;
            width: 600px;
            height: 24px;
            left: 719px;
            top: 359px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }



        /* My Friend of Misery - Cherry Glazerr */

        .texto_ret_2 {
            position: absolute;
            width: 544px;
            height: 24px;
            left: 719px;
            top: 422px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Soft Drink - Cherry Glazerr */

        .texto_ret_3 {
            position: absolute;
            width: 544px;
            height: 24px;
            left: 719px;
            top: 486px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Big Bang - Cherry Glazerr */

        .texto_ret_4 {
            position: absolute;
            width: 544px;
            height: 24px;
            left: 719px;
            top: 548px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Rabbit Hole - Cherry Glazerr */

        .texto_ret_5 {
            position: absolute;
            width: 544px;
            height: 24px;
            left: 719px;
            top: 613px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Call Me (feat. Portugal. The Man)... */

        .texto_ret_6 {
            position: absolute;
            width: 800px;
            height: 24px;
            left: 719px;
            top: 675px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Daddy (Reggie Watts Remix) - ... */

        .texto_ret_7 {
            position: absolute;
            width: 544px;
            height: 24px;
            left: 719px;
            top: 737px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }

    </style>

</head>

<body>
<header>
    <div id="headerL">
        <div id="user">
            <!-- username -->
            <?php

            print '<a href="ArtistPage.php"><h4>' . $user . '</h4></a>';
            ?>
        </div>

        <div >
            <h4 id="ident">Artist</h4>
        </div>

        <div id="logout">
            <!-- logout -->
            <a  href="Logout.php"><img src="Icones%20Rockstar%20Inc/header%20resto%20das%20paginas/icon%20logout%20header.png" height="30" width="auto">
            </a>
        </div>
    </div>
    <div id="headerR">
        <!-- home -->
        <a id="home" href="ArtistPage.php"><img src="Icones%20Rockstar%20Inc/header%20resto%20das%20paginas/homepage.png" height="30" width="auto"></a>

    </div>
</header>

<main>
    <div class="container">
        <?php

        $album_name= $_GET['album'];

        print '<h1>' . $album_name . '</h1>';
        print '<h2>' . $user . '</h2>';

        $foto= pg_query($conn, "select foto from album where album_name='$album_name'" );
        $foto= pg_fetch_array($foto);

        print '<div class="foto_perfil"><img src=' . $foto['foto'] . '" height="441" width="auto" alt="img"></div>';

        ?>
        <div class="caixa_esq" ></div>
        <div class="caixa_dir" ></div>

        <!--Musicas-->

        <div class="ret_1"></div>
        <div class="ret_2"></div>
        <div class="ret_3"></div>
        <div class="ret_4"></div>
        <div class="ret_5"></div>
        <div class="ret_6"></div>
        <div class="ret_7"></div>

        <!--Texto Musicas-->

        <div class="texto_ret_1">Come Back Around - Moon Boots, Cherry Glazerr</div>
        <div class="texto_ret_2">My Friend of Misery - Cherry Glazerr</div>
        <div class="texto_ret_3">Soft Drink - Cherry Glazerr</div>
        <div class="texto_ret_4">Big Bang - Cherry Glazerr</div>
        <div class="texto_ret_5">Rabbit Hole - Cherry Glazerr</div>
        <div class="texto_ret_6">Call Me (feat. Portugal. The Man) - Cherry Glazerr, Portugal. The Man</div>
        <div class="texto_ret_7">Daddy (Reggie Watts Remix) - Cherry Glazerr</div>

        <!--Três pontinhos-->

        <div class="pont_1"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_2"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_3"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_4"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_5"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_6"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_7"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_8"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_9"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>

        <!--Títulos-->

        <div class="songs"><img src="Icones%20Rockstar%20Inc/album/songs.png" height="auto" width="279" alt="img"></div>

    </div>
</main>

<footer>
    <div class="foter">
        <div id="musica">
            <p class="tipo2">Nome musica</p>
            <p class="tipo3">Nome artista</p>
        </div>

        <div class="space"></div>

        <!-- botoes play -->
        <div class="botoes">
            <a class="play_left"><img src="Icones%20Rockstar%20Inc/footer/botao%20left%20play.png" height="30" width="auto"></a>
            <a class="play" ><img src="Icones%20Rockstar%20Inc/footer/play.png" height="50" width="auto"></a>
            <a class="play_right" ><img src="Icones%20Rockstar%20Inc/footer/botao%20right%20play.png" height="30" width="auto"></a>
        </div>

        <div class="space"></div>

        <div id=logo >
            <!-- Logo -->
            <a href="Home.php">
                <img src="Icones%20Rockstar%20Inc/footer/logo%20com%20texto%20footer.png" height="60" width="auto"/>
            </a>
        </div>
    </div>
</footer>

</body>
</html>
