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


if(isset($_POST['album_name']) && isset($_FILES['foto_album'])){
    $album_name= $_POST['album_name'];

    $target_dir = "album_fotos/";
    $imageFileType = strtolower(pathinfo($_FILES['foto_album']['name'],PATHINFO_EXTENSION));
    $target_file = $target_dir . $album_name . $user . "." . $imageFileType;

    if (!move_uploaded_file($_FILES["foto_album"]["tmp_name"], $target_file)) {
        echo "<script> alert('Sorry, there was an error uploading your file.') </script>";
    }else{
        $ins = pg_query($conn, "insert into Album (album_name, foto,artist_user__username) values('$album_name', '$target_file','$user') returning id" );
        $ins = pg_fetch_array($ins);

        $album_id = $ins["id"];
        $_SESSION['album_id'] = $album_id;
        $_SESSION['album_name'] = $album_name;
        $_SESSION['album_photo'] = $target_file;
    }
}

print '<h1>' . $_SESSION['album_name'] . '</h1>';
print '<div class="foto_perfil"><img src="' . $_SESSION['album_photo'] . '" height="193" width="193" alt="img"></div>';


if(isset($_POST['song_name']) && isset($_POST['song_genre']) && isset($_FILES['song'])) {
    $id_album=$_SESSION['album_id'];

    $song_name= $_POST['song_name'] ;
    $song_genre= $_POST['song_genre'];

    $target_dir = "musicas/";
    $musicFileType = strtolower(pathinfo($_FILES['song']['name'],PATHINFO_EXTENSION));
    $target_file = $target_dir . $song_name . $user . "." . $musicFileType;
    $var = move_uploaded_file($_FILES["song"]["tmp_name"], $target_file);

    if (!$var) {
        echo "<script> alert('Sorry, there was an error uploading your file.') </script>";
    }
    else{
        $ins = pg_query($conn, "insert into music (song_name, file, genre_genre_name,single,artist_user__username) values('$song_name', '$target_file','$song_genre','false','$user') returning id" );
        $ins = pg_fetch_array($ins);

        $song_id = $ins["id"];
        pg_query($conn, "insert into album_music (album_id, music_id) values('$id_album', '$song_id')" );
    }
}



?>

<header>
    <div id="headerL">
        <div id="user">
            <!-- username -->
            <?php

            print '<h1>' . $user . '</h1>';
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

        <div class="caixa"></div>


        <form id="upload_album_part2" method="post" action="" enctype="multipart/form-data">
        <!--Caixas de texto-->

            <input required type="text" placeholder="" class="song_name" name="song_name">

            <select class="song_genre" name="song_genre" >
                <?php

                $genre= pg_query($conn, "select genre_name from genre order by genre asc");
                $genre= pg_fetch_all($genre);
                foreach ($genre as $genero){
                    print '<option value="' . $genero['genre_name'] . '">' . $genero['genre_name'] . '</option>';
                }
                ?>
            </select>

            <input class="add_file2" type="file" name="song" accept="mp3">

        </form>

        <!--Texto-->


        <div class="texto_song_name">Song Name:</div>
        <div class="texto_song_genre">Song Genre:</div>
        <div class="upload_song">Upload Song:</div>

        <!--Botões-->

        <div class="botao_upload_album"><a href="ArtistPage.php"><img src="Icones%20Rockstar%20Inc/upload%20album/botao%20upload%20album.png" height="69" width="auto" alt="img"></a></div>
        <div class="botao_add_song" onclick="javascript:document.getElementById('upload_album_part2').submit()"><img src="Icones%20Rockstar%20Inc/upload%20album/botao%20add%20song.png" height="38" width="auto" alt="img"></div>

        <div class="titulo"><img src="Icones%20Rockstar%20Inc/upload%20album/upload%20an%20album.png" height="auto" width="570" alt="img"></div>
    </div>
</main>

</body>
</html>