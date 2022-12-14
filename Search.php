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
    <title>Results - Rockstar</title>

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
            width: 118px;
            height: 117px;
            left: 249px;
            top: 330px;

            border-radius: 50%;
            border: 4px solid #FFFFFF;
        }


        /* Caixa albums */

        .caixa_esq {
            box-sizing: border-box;

            position: absolute;
            width: 851px;
            height: 167px;
            left: 205px;
            top: 308px;

            background: #B3B7A8;
            border: 4px solid #FFFFFF;
            border-radius: 36px;
        }


        /* Rectangle dir */

        .ret_1 {
            box-sizing: border-box;

            position: absolute;
            width: 1180px;
            height: 57px;
            left: 205px;
            top: 496px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle dir */

        .ret_2 {
            box-sizing: border-box;

            position: absolute;
            width: 1180px;
            height: 57px;
            left: 205px;
            top: 561px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle dir */

        .ret_3 {
            box-sizing: border-box;

            position: absolute;
            width: 1180px;
            height: 57px;
            left: 205px;
            top: 625px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_4 {
            box-sizing: border-box;

            position: absolute;
            width: 1180px;
            height: 57px;
            left: 205px;
            top: 691px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_5 {
            box-sizing: border-box;

            position: absolute;
            width: 1180px;
            height: 57px;
            left: 205px;
            top: 755px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_6 {
            box-sizing: border-box;

            position: absolute;
            width: 1180px;
            height: 57px;
            left: 205px;
            top: 819px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_7 {
            box-sizing: border-box;

            position: absolute;
            width: 1180px;
            height: 57px;
            left: 205px;
            top: 883px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* 3 pontinhos */

        .pont_1 {
            position: absolute;
            left: 1349px;
            top: 512px;
        }

        /* 3 pontinhos */

        .pont_2 {
            position: absolute;
            left: 1349px;
            top: 577px;

            /* 3 pontinhos */
        }

        .pont_3 {
            position: absolute;
            left: 1349px;
            top: 642px;
        }

        /* 3 pontinhos */

        .pont_4 {
            position: absolute;
            left: 1349px;
            top: 706px;
        }

        /* 3 pontinhos */

        .pont_5 {
            position: absolute;
            left: 1349px;
            top: 770px;
        }

        /* 3 pontinhos */

        .pont_6 {
            position: absolute;
            left: 1349px;
            top: 835px;
        }

        /* 3 pontinhos */

        .pont_7 {
            position: absolute;
            left: 1349px;
            top: 899px;
        }


        /* Cherry Glazerr */

        h1{
            position: absolute;
            width: 654px;
            height: 65px;
            left: 404px;
            top: 320px;

            font-family: 'Franklin Gothic Heavy';
            font-style: normal;
            font-weight: 400;
            font-size: 60px;
            line-height: 68px;

            color: #566D49;
        }


        /* Come Back Around - Moon Boots, ... */

        .texto_ret_1 {
            position: absolute;
            width: 550px;
            height: 24px;
            left: 234px;
            top: 510px;

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
            width: 550px;
            height: 24px;
            left: 234px;
            top: 575px;

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
            width: 550px;
            height: 24px;
            left: 234px;
            top: 640px;

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
            width: 550px;
            height: 24px;
            left: 234px;
            top: 704px;

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
            width: 550px;
            height: 24px;
            left: 234px;
            top: 769px;

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
            width: 737px;
            height: 24px;
            left: 234px;
            top: 832px;

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
            width: 550px;
            height: 24px;
            left: 234px;
            top: 896px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }

        h2{
            position: absolute;
            width: 521px;
            height: 45px;
            left: 213px;
            top: 204px;

            font-family: 'Franklin Gothic Medium';
            font-style: italic;
            font-weight: 400;
            font-size: 45px;
            line-height: 51px;

            color: #566D49;
        }

        h3{
            position: absolute;
            width: 132px;
            height: 45px;
            left: 217px;
            top: 86px;

            font-family: 'Franklin Gothic Medium';
            font-style: italic;
            font-weight: 400;
            font-size: 35px;
            line-height: 40px;

            color: #566D49;
        }

        .artist{
            position: absolute;
            width: 142px;
            height: 47px;
            left: 357px;
            top: 118px;
        }

        .song{
            position: absolute;
            width: 143px;
            height: 47px;
            left: 520px;
            top: 118px;
        }

        .album{
            position: absolute;
            width: 142px;
            height: 47px;
            left: 685px;
            top: 118px;
        }

    </style>

</head>

<body>

<header>
    <div id="headerL">
        <div id="user">
            <!-- username -->
            <?php

            print '<h4>' . $user . '</h4>';

            ?>
        </div>

        <div >
            <h4 id="ident">Listener</h4>
        </div>

        <div id="logout">
            <!-- logout -->
            <a  href="Logout.php"><img src="Icones%20Rockstar%20Inc/header%20resto%20das%20paginas/icon%20logout%20header.png" height="30" width="auto">
            </a>
        </div>
    </div>
    <div id="headerR">
        <!-- home -->
        <a id="home" href="Homepage.php"><img src="Icones%20Rockstar%20Inc/header%20resto%20das%20paginas/homepage.png" height="30" width="auto"></a>

        <!-- search -->
        <div id="search">
            <form id="search" method="post" action="" enctype="multipart/form-data">

                <input class="searchbar" name="search" type="text" placeholder="search here">
                <button class="button" type="submit" ><img src="Icones%20Rockstar%20Inc/header%20resto%20das%20paginas/search%20header.png" height="18" width="auto"></button>

            </form>

        </div>
    </div>
</header>

<main>
    <div class="container">
        <?php


        if(isset($_POST['search'])) {
            $search = $_POST['search'];
            print '<h2>Results for: ' . $search . '</h2>';

            if(isset($_GET["filter"]) && $_GET["filter"] == 1) {
                $result = pg_query($conn, "select song_name, file from music where LOWER(artist_user__username) like LOWER('%$search%')");
                $result = pg_fetch_all($result);

                for ($i = 0; $i < count($result); $i++) {
                    print '<div class="ret_' . strval(1 + $i) . '">' . $result[$i]['song_name'] . '</div>';
                    print '<audio class="aud_' . strval(1 + $i) . '" controls>
                           <source src="' . $result[$i]['file'] . '" type="audio/mpeg">
                           Your browser does not support the audio element.
                       </audio>';
                }
            }

            else {
                $result = pg_query($conn, "select song_name, file from music where LOWER(song_name) like LOWER('%$search%')");
                $result = pg_fetch_all($result);

                for ($i = 0; $i < count($result); $i++) {
                    print '<div class="ret_' . strval(1 + $i) . '">' . $result[$i]['song_name'] . '</div>';
                    print '<audio class="aud_' . strval(1 + $i) . '" controls>
                           <source src="' . $result[$i]['file'] . '" type="audio/mpeg">
                           Your browser does not support the audio element.
                       </audio>';
                }
            }

        }

        ?>

        <!--Texto-->
        <h3>Sort by:</h3>

        <!--Botoes de filtro-->

        <button class="artist" type="button"><a href="?filter=1"><img src="Icones%20Rockstar%20Inc/search/botao%20artist.png" height="auto" width="142" alt="img"></a></button>
        <button class="song" type="button"><a href="Search.php"><img src="Icones%20Rockstar%20Inc/search/botao%20song.png" height="auto" width="142" alt="img"></a></button>

    </div>
</main>

<?php

require_once 'Footer.php';

?>

</body>
</html>