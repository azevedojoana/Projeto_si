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

        .foto_perfil {
            position: absolute;
            width: 547px;
            height: 24px;
            left: 1297px;
            top: 309px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }

        .texto_foto_6 {

            position: absolute;
            width: 187px;
            height: 34px;
            left: 1082px;
            top: 517px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 41px;

            color: #EAE4E1;
        }


    </style>

</head>
<body>

<?php


if(isset($_POST['playlist_name']) && isset($_FILES['foto_name_playlist'])){
    $playlist_name= $_POST['playlist_name'];

    $target_dir = "playlist_fotos/";
    $imageFileType = strtolower(pathinfo($_FILES['foto_name_playlist']['name'],PATHINFO_EXTENSION));
    $target_file = $target_dir . $playlist_name . $user . "." . $imageFileType;

    if (!move_uploaded_file($_FILES["foto_name_playlist"]["tmp_name"], $target_file)) {
        echo "<script> alert('Sorry, there was an error uploading your file.') </script>";
    }else{
        $ins = pg_query($conn, "insert into playlist (playlist_name, foto,client_user__username) values('$playlist_name', '$target_file','$user') returning id" );
        $ins = pg_fetch_array($ins);

        $playlist_id = $ins["id"];
        $_SESSION['playlist_id'] = $playlist_id;
        $_SESSION['playlist_name'] = $playlist_name;
        $_SESSION['playlist_photo'] = $target_file;
    }
}


print '<h1>' . $_SESSION['playlist_name'] . '</h1>';
print '<div class="foto_perfil"><img src="' . $_SESSION['playlist_photo'] . '" height="193" width="193" alt="img"></div>';


if(isset($_POST['song_id'])) {
    $id_playlist=$_SESSION['playlist_id'];

    $song_id= $_POST['song_id'] ;

        $ins = pg_query($conn, "select * from music where id=$song_id" );
        $ins = pg_fetch_array($ins);

        $song_id = $ins["id"];
        pg_query($conn, "insert into playlist_music (playlist_id, music_id) values($id_playlist, $song_id)" );
}



?>

<?php

require_once 'HeaderListener.php';

?>
<main>
    <div class="container">

        <div class="caixa"></div>


        <form id="upload_playlist_name_part2" method="post" action="" enctype="multipart/form-data">
            <!--Caixas de texto-->

            <select class="song_genre" name="song_id" >
                <?php

                $song= pg_query($conn, "select * from music order by artist_user__username,song_name asc");
                $song= pg_fetch_all($song);
                foreach ($song as $music){
                    print '<option value="' . $music['id'] . '">' . $music['song_name'] . '"- "' . $music['artist_user__username'] .'</option>';
                }
                ?>
            </select>

        </form>

        <!--Texto-->

        <div class="texto_song_name">Choose song:</div>

        <!--Botões-->

        <button class="botao_upload_album"><a href="Playlist.php">Upload Playlist</a></button>
        <div class="botao_add_song" onclick="javascript:document.getElementById('upload_playlist_name_part2').submit()"><img src="Icones%20Rockstar%20Inc/upload%20album/botao%20add%20song.png" height="38" width="auto" alt="img"></div>

        <div class="titulo"><img src="Icones%20Rockstar%20Inc/upload%20album/upload%20an%20album.png" height="auto" width="570" alt="img"></div>
    </div>
</main>

</body>
</html>