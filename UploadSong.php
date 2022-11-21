<?php

session_start();

$user= $_SESSION['nome'];

$str = "dbname=rockstar user=postgres  password=postgres host=localhost port=5432";
$conn= pg_connect($str) or die ("Erro na ligacao");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="CSS/geral.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Upload Song - Rockstar</title>

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

        /* Caixa  */

        .caixa {
            box-sizing: border-box;

            position: absolute;
            width: 1100px;
            height: 677px;
            left: 410px;
            top: 220px;

            background: #B3B7A8;
            border: 4px solid #FFFFFF;
            border-radius: 36px;
        }



        /* Caixa song name */

        .song_name {
            box-sizing: border-box;

            position: absolute;
            width: 391px;
            height: 38px;
            left: 840px;
            top: 437px;

            background: #EAE4E1;
            border: 1px solid #516843;
            border-radius: 8px;
        }

        /* Caixa song genre */

        .song_genre {
            box-sizing: border-box;

            position: absolute;
            width: 391px;
            height: 38px;
            left: 840px;
            top: 514px;

            background: #EAE4E1;
            border: 1px solid #516843;
            border-radius: 8px;
        }

        /* song name */

        .texto_song_name {
            position: absolute;
            width: 167px;
            height: 45px;
            left: 662px;
            top: 434px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;
            text-align: right;

            color: #516843;
        }


        /* song genre */

        .texto_song_genre {
            position: absolute;
            width: 167px;
            height: 45px;
            left: 662px;
            top: 512px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;
            text-align: right;

            color: #516843;
        }

        .upload_song{
            position: absolute;
            width: 167px;
            height: 45px;
            left: 662px;
            top: 597px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;
            text-align: right;

            color: #516843;
        }


        .botao_add_song{
            position: absolute;
            width: 259px;
            height: 69px;
            left: 830px;
            top: 747px;
        }

        .add_file{
            position: absolute;
            width: 159px;
            height: 38px;
            left: 840px;
            top: 602px;
        }

        .titulo{
            position: absolute;
            width: 570px;
            height: 49px;
            left: 675px;
            top: 286px;
        }

    </style>

</head>
<body>
<header>
    <div id="headerL">
        <div id="user">
            <!-- username -->
            <?php

            print '<a href="ArtistPage.php"><h1>' . $user . '</h1></a>';
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
            <input class="searchbar" name="email" type="email" placeholder="search here">
            <button class="button" type="submit" ><a href="Search.php"><img src="Icones%20Rockstar%20Inc/header%20resto%20das%20paginas/search%20header.png" height="18" width="auto"></a></button>
        </div>
    </div>
</header>
<main>
    <div class="container">

        <div class="caixa"></div>
        <!--Caixas de texto-->

        <input required type="text" placeholder="" class="song_name">
        <input required type="text" placeholder="" class="song_genre">

        <!--Texto-->


        <div class="texto_song_name">Song Name:</div>
        <div class="texto_song_genre">Song Genre:</div>
        <div class="upload_song">Upload Song:</div>

        <!--Add File-->

        <div class="add_file"><img src="Icones%20Rockstar%20Inc/upload%20album/add%20file.png" height="38" width="auto" alt="img"></div>

        <!--Botões-->

        <div class="botao_add_song"><img src="Icones%20Rockstar%20Inc/upload%20song/botao%20upload%20song.png" height="69" width="auto" alt="img"></div>

        <div class="titulo"><img src="Icones%20Rockstar%20Inc/upload%20song/upload%20a%20song.png" height="auto" width="570" alt="img"></div>
    </div>
</main>
</body>
</html>