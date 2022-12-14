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
            left: 528px;
            top: 548px;
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


        /* Bot??o register */

        .create_album {
            position: absolute;
            width: 259px;
            height: 69px;
            left: 830px;
            top: 810px;
        }

        .create_album{
            position: absolute;
            width: 106px;
            height: 38px;
            left: 800px;
            top: 593px;
        }

        .add_file1{
            position: absolute;
            width: 159px;
            height: 38px;
            left: 528px;
            top: 638px;
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

<?php

require_once 'HeaderArtist.php';

?>
<main>
    <div class="container">

        <div class="caixa"></div>


        <form id="upload_album" method="post" action="UploadAlbum2.php" enctype="multipart/form-data">
            <!--Caixas de texto-->

            <input required type="text" placeholder="" class="album_name" name="album_name">

            <input class="add_file1" type="file" name="foto_album" accept=".jpg, .png">
            <button type="submit" class="create_album" name="create_album" value="Create Album" >Create Album</button>

        </form>

        <!--Texto-->

        <div class="texto_album_name">Album Name:</div>
        <div class="upload_cover">Upload Album Cover:</div>

        <!--Bot??es-->

        <div class="titulo"><img src="Icones%20Rockstar%20Inc/upload%20album/upload%20an%20album.png" height="auto" width="570" alt="img"></div>
    </div>
</main>

</body>
</html>