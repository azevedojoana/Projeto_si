<?php

session_start();

$user= $_SESSION['nome'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="CSS/geral.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Upload Album - Rockstar</title>

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
            width: 1430px;
            height: 720px;
            left: 245px;
            top: 220px;

            background: #B3B7A8;
            border: 4px solid #FFFFFF;
            border-radius: 36px;
        }


        /* Caixa album */

        .album_name {
            box-sizing: border-box;

            position: absolute;
            width: 391px;
            height: 38px;
            left: 528px;
            top: 459px;

            background: #EAE4E1;
            border: 1px solid #516843;
            border-radius: 8px;
        }

        /* Caixa artist */

        .artist {
            box-sizing: border-box;

            position: absolute;
            width: 391px;
            height: 38px;
            left: 528px;
            top: 548px;

            background: #EAE4E1;
            border: 1px solid #516843;
            border-radius: 8px;
        }

        /* album */

        .texto_album_name {
            position: absolute;
            width: 167px;
            height: 45px;
            left: 351px;
            top: 463px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;
            text-align: right;

            color: #516843;
        }


        /* artist */

        .texto_artist {
            position: absolute;
            width: 167px;
            height: 45px;
            left: 351px;
            top: 550px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;
            text-align: right;

            color: #516843;
        }

        /* Caixa song name */

        .song_name {
            box-sizing: border-box;

            position: absolute;
            width: 344px;
            height: 38px;
            left: 1232px;
            top: 459px;

            background: #EAE4E1;
            border: 1px solid #516843;
            border-radius: 8px;
        }

        /* Caixa song genre */

        .song_genre {
            box-sizing: border-box;

            position: absolute;
            width: 344px;
            height: 38px;
            left: 1232px;
            top: 536px;

            background: #EAE4E1;
            border: 1px solid #516843;
            border-radius: 8px;
        }

        /* song name */

        .texto_song_name {
            position: absolute;
            width: 167px;
            height: 45px;
            left: 1206px;
            top: 423px;

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
            left: 1206px;
            top: 499px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;
            text-align: right;

            color: #516843;
        }

        .upload_cover{
            position: absolute;
            width: 238px;
            height: 45px;
            left: 280px;
            top: 634px;

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
            left: 1009px;
            top: 420px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;
            text-align: right;

            color: #516843;
        }


        /* Botão register */

        .botao_upload_album {
            position: absolute;
            width: 259px;
            height: 69px;
            left: 830px;
            top: 810px;
        }

        .botao_add_song{
            position: absolute;
            width: 106px;
            height: 38px;
            left: 1470px;
            top: 593px;
        }

        .add_file1{
            position: absolute;
            width: 159px;
            height: 38px;
            left: 528px;
            top: 638px;
        }

        .add_file2{
            position: absolute;
            width: 159px;
            height: 39px;
            left: 1024px;
            top: 459px;
        }

        .titulo{
            position: absolute;
            width: 570px;
            height: 49px;
            left: 680px;
            top: 302px;
        }

    </style>

</head>
<body>
<header>
    <div id="headerL">
        <div id="user">
            <!-- username -->
            <a href="Homepage.php"><h4>Username</h4></a>
        </div>

        <div >
            <h4 id="ident">Listener</h4>
        </div>

        <div id="logout">
            <!-- logout -->
            <a  href="Login.php"><img src="Icones%20Rockstar%20Inc/header%20resto%20das%20paginas/icon%20logout%20header.png" height="30" width="auto">
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

        <input required type="text" placeholder="" class="album_name">
        <input required type="text" placeholder="" class="artist">
        <input required type="text" placeholder="" class="song_name">
        <input required type="text" placeholder="" class="song_genre">

        <!--Texto-->

        <div class="texto_album_name">Album Name:</div>
        <div class="texto_artist">Artist:</div>
        <div class="texto_song_name">Song Name:</div>
        <div class="texto_song_genre">Song Genre:</div>
        <div class="upload_cover">Upload Album Cover:</div>
        <div class="upload_song">Upload Song:</div>

        <!--Add File-->

        <div class="add_file1"><img src="Icones%20Rockstar%20Inc/upload%20album/add%20file.png" height="38" width="auto" alt="img"></div>
        <div class="add_file2"><img src="Icones%20Rockstar%20Inc/upload%20album/add%20file.png" height="38" width="auto" alt="img"></div>

        <!--Botões-->

        <div class="botao_upload_album"><img src="Icones%20Rockstar%20Inc/upload%20album/botao%20upload%20album.png" height="69" width="auto" alt="img"></div>
        <div class="botao_add_song"><img src="Icones%20Rockstar%20Inc/upload%20album/botao%20add%20song.png" height="38" width="auto" alt="img"></div>

        <div class="titulo"><img src="Icones%20Rockstar%20Inc/upload%20album/upload%20an%20album.png" height="auto" width="570" alt="img"></div>
    </div>
</main>

</body>
</html>