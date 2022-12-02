<?php

session_start();

if(!isset($_SESSION['nome'])){
    header("Location: Login.php");
}

$user= $_SESSION['nome'];

$str = "dbname=rockstar user=postgres  password=postgres host=localhost port=5432";
$conn= pg_connect($str) or die ("Erro na ligacao");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="CSS/geral.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>HomePage - Rockstar</title>

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

        /* Caixa verde esq */

        .caixa_esq {


            box-sizing: border-box;

            position: absolute;
            width: 821px;
            height: 798px;
            left: 91px;
            top: 126px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 36px;
        }


        /* Caixa verde dir */

        .caixa_dir {
            box-sizing: border-box;

            position: absolute;
            width: 821px;
            height: 798px;
            left: 1009px;
            top: 126px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 36px;
        }


        /* Playlists */

        .playlists {

            position: absolute;
            width: 357px;
            height: 52px;
            left: 316px;
            top: 182px;
        }

        /* Artistas */

        .artists {
            position: absolute;
            width: 323px;
            height: 42px;
            left: 1233px;
            top: 180px;
        }

        /* Rectangle esq */

        .foto_1 img{

            position: absolute;
            width: 224px;
            height: 224px;
            left: 134px;
            top: 279px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle esq */

        .foto_2 img{

            position: absolute;
            width: 224px;
            height: 224px;
            left: 391px;
            top: 279px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle esq */

        .foto_3 img{

            position: absolute;
            width: 224px;
            height: 224px;
            left: 645px;
            top: 279px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle esq */

        .foto_4 img{

            position: absolute;
            width: 224px;
            height: 224px;
            left: 134px;
            top: 595px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle esq */

        .foto_4 img{

            position: absolute;
            width: 224px;
            height: 224px;
            left: 134px;
            top: 595px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle esq */

        .foto_5 img{

            position: absolute;
            width: 224px;
            height: 224px;
            left: 390px;
            top: 595px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .foto_6 img{

            position: absolute;
            width: 224px;
            height: 224px;
            left: 1051px;
            top: 279px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .foto_7 img{
            position: absolute;
            width: 224px;
            height: 224px;
            left: 1305px;
            top: 279px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .foto_8 img{
            position: absolute;
            width: 224px;
            height: 224px;
            left: 1561px;
            top: 279px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        .foto_9 img{
            position: absolute;
            width: 224px;
            height: 224px;
            left: 1051px;
            top: 594px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        .foto_10 img{
            position: absolute;
            width: 224px;
            height: 224px;
            left: 1305px;
            top: 594px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Pop */

        .texto_foto_1 {


            position: absolute;
            width: 72px;
            height: 34px;
            left: 213px;
            top: 514px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 41px;

            color: #EAE4E1;
        }


        /* #13 */

        .texto_foto_2 {


            position: absolute;
            width: 216px;
            height: 34px;
            left: 390px;
            top: 514px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 41px;
            text-align: center;

            color: #FFFFFF;
        }


        /* Casa das... */

        .texto_foto_3 {

            position: absolute;
            width: 216px;
            height: 34px;
            left: 644px;
            top: 515px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 41px;
            text-align: center;

            color: #EAE4E1;
        }


        /* Studying */

        .texto_foto_4 {

            position: absolute;
            width: 216px;
            height: 34px;
            left: 134px;
            top: 833px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 41px;
            text-align: center;

            color: #EAE4E1;
        }

        /* Chill */

        .texto_foto_5 {

            position: absolute;
            width: 216px;
            height: 34px;
            left: 390px;
            top: 834px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 41px;
            text-align: center;

            color: #EAE4E1;
        }

        /* The Police */

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

        /* Bjork */

        .texto_foto_7 {

            position: absolute;
            width: 216px;
            height: 34px;
            left: 1310px;
            top: 517px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 41px;
            text-align: center;

            color: #EAE4E1;
        }

        /* Charlotte... */

        .texto_foto_8 {

            position: absolute;
            width: 216px;
            height: 34px;
            left: 1566px;
            top: 518px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 41px;
            text-align: center;

            color: #EAE4E1;

        }

        /* Remi Wolf */

        .texto_foto_9 {

            position: absolute;
            width: 216px;
            height: 34px;
            left: 1055px;
            top: 835px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 41px;
            text-align: center;

            color: #EAE4E1;
        }

        /* Men I Trust */

        .texto_foto_10 {

            position: absolute;
            width: 216px;
            height: 34px;
            left: 1308px;
            top: 836px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 41px;
            text-align: center;

            color: #EAE4E1;
        }

        .mais{
            position: absolute;
            width: 124px;
            height: 122px;
            left: 695px;
            top: 603px;
        }

        .see_all{
            position: absolute;
            width: 179px;
            height: 58px;
            left: 667px;
            top: 750px;
        }

        .see_more{
            position: absolute;
            width: 197px;
            height: 64px;
            left: 1575px;
            top: 675px;
        }

        .contPopup{
            display:none;
        }

        /* Caixa grey */
        .popup{
            z-index:1;
            position: absolute;
            width: 752px;
            height: 450px;
            left: 584px;
            top: 315px;
            background: #EAE4E1;
            border-radius: 33px;
        }

        /* Playlist */
        .playTitle{
            z-index:1;
            position: absolute;
            width: 454px;
            height: 33px;
            left: 763px;
            top: 350px;
        }

        /* Botão add playlist genre */

        .botao_add_playlist_genre{
            z-index:1;
            position: absolute;
            width: 106px;
            height: 37px;
            left: 1153px;
            top: 448px;
        }

        /* Botão create new playlist */

        .botao_add_playlist_name{
            z-index:1;
            position: absolute;
            width: 200px;
            height: 37px;
            left: 1071px;
            top: 592px;
        }

        /* Botão search baixo */
        .playContSearch>img{
            z-index:1;
            position: absolute;
            width: 105px;
            height: 37px;
            left: 1166px;
            top: 670px;
        }

        /* caixa texto by genre */
        .playContGenre>form>.songs_number{
            z-index:1;
            box-sizing: border-box;
            position: absolute;
            width: 261px;
            height: 38px;
            left: 782px;
            top: 448px;
            background: #FFFFFF;
            border: 1px solid #39542A;
            border-radius: 7px 0px 0px 7px;
        }

        .submeter_foto_genre{
            z-index:1;
            position: absolute;
            width: 261px;
            height: 38px;
            left: 782px;
            top: 400px;
        }


        /* caixa texto playlist name */
        .playContName>form>.playlist_name{
            z-index:1;
            box-sizing: border-box;
            position: absolute;
            width: 261px;
            height: 38px;
            left: 802px;
            top: 592px;
            background: #FFFFFF;
            border: 1px solid #39542A;
            border-radius: 7px 0px 0px 7px;
        }

        .submeter_foto_name{
            z-index:1;
            position: absolute;
            width: 261px;
            height: 38px;
            left: 802px;
            top: 692px;
        }

        /* caixa genero de musicas */

        .song_genre{
            z-index:1;
            box-sizing: border-box;
            position: absolute;
            width: 100px;
            height: 38px;
            left: 1053px;
            top: 448px;
            background: #FFFFFF;
            border: 1px solid #39542A;
            border-radius: 0px 7px 7px 0px;
        }

        /* caixa texto search songs */
        .playContSearch>textarea {
            z-index:1;
            box-sizing: border-box;
            position: absolute;
            width: 354px;
            height: 38px;
            left: 802px;
            top: 670px;
            background: #FFFFFF;
            border: 1px solid #39542A;
            border-radius: 7px 0px 0px 7px;
        }

        /* Line 1 */
        .playLinha{
            z-index:1;
            position: absolute;
            width: 751px;
            height: 0px;
            left: 585px;
            top: 511px;
            border: 2px solid #39542A;
        }

        /* Playlist Name: */
        .playContName>label{
            z-index:1;
            position: absolute;
            width: 249px;
            height: 45px;
            left: 632px;
            top: 592px;
            font-family: 'Franklin Gothic Medium';
            font-style: italic;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;
            color: #566D49;
        }

        /* Search Songs: */
        .playContSearch>label{
            z-index:1;
            position: absolute;
            width: 249px;
            height: 45px;
            left: 630px;
            top: 668px;
            font-family: 'Franklin Gothic Medium';
            font-style: italic;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;
            color: #566D49;
        }


        /* By Genre: */
        .playContGenre>label{
            z-index:1;
            position: absolute;
            width: 249px;
            height: 45px;
            left: 666px;
            top: 452px;
            font-family: 'Franklin Gothic Medium';
            font-style: italic;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;
            color: #566D49;
        }

        .fechar{
            z-index: 1;
            width:40px;
            height: 40px;
            border:3px beige solid;
            background-color: green;
            color:beige;
            top: 350px;
            left:1230px;
            box-sizing: border-box;
            position: absolute;
            border-radius: 50px;
        }
    </style>
</head>

<body>

<?php

if(isset($_FILES['foto_genre_playlist']) && isset($_POST['songs_number']) && isset($_POST['song_genre'])) {

    $song_genre= $_POST['song_genre'];
    $playlist_name= $_POST['song_genre'];
    $number= $_POST['songs_number'];

    $target_dir = "playlist_fotos/";
    $imageFileType = strtolower(pathinfo($_FILES['foto_genre_playlist']['name'],PATHINFO_EXTENSION));
    $target_file = $target_dir . $playlist_name . $user . "." . $imageFileType;

    if (!move_uploaded_file($_FILES["foto_genre_playlist"]["tmp_name"], $target_file)) {
        echo "<script> alert('Sorry, there was an error uploading your file.') </script>";
    }else{
        $ins = pg_query($conn, "insert into playlist (playlist_name, foto,client_user__username) values('$playlist_name', '$target_file','$user') returning id" );
        $ins = pg_fetch_array($ins);
        $playlist_id = $ins["id"];


        $musicas = pg_query($conn, "select id from music where genre_genre_name='$song_genre' LIMIT $number" );
        $musicas = pg_fetch_all($musicas);
        foreach ($musicas as $songs){
            $song_id = $songs['id'];
            pg_query($conn, "insert into playlist_music (playlist_id, music_id) values('$playlist_id', '$song_id')" );
        }

    }
}


?>

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
            <input class="searchbar" name="email" type="email" placeholder="search here">
            <button class="button" type="submit" ><a href="Search.php"><img src="Icones%20Rockstar%20Inc/header%20resto%20das%20paginas/search%20header.png" height="18" width="auto"></a></button>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <div class="caixa_esq" ></div>
        <div class="caixa_dir" ></div>

        <!--Playlists-->

        <?php

        $playlist= pg_query($conn, "select playlist_name,foto, id from playlist" );
        $playlist= pg_fetch_all($playlist);
        for ($i=0; $i<count($playlist) && $i<5; $i++){
            print '<div class="foto_' . strval(1 + $i) . '"><a  href="Playlist.php?playlist=' . strval($playlist[$i]['id']) . '"><img src="' . $playlist[$i]['foto'] . '" height="226" width="226" alt="img"></a></div>';
        }

        ?>

        <?php

        for ($i=0; $i<count($playlist)&& $i<5; $i++){
            print '<div style="text-transform: capitalize;" class="texto_foto_' . strval(1 + $i) . '">' . $playlist[$i]['playlist_name'] . '</div>';
        }

        ?>


        <!--Artistas-->

        <?php

        $playlist= pg_query($conn, "select user__username,foto from artist" );
        $playlist= pg_fetch_all($playlist);
        for ($i=0; $i<count($playlist) && $i<5; $i++){
            print '<div class="foto_' . strval(6 + $i) . '"><a  href="Artist.php?artist=' . $playlist[$i]['user__username'] . '"><img src="' . $playlist[$i]['foto'] . '" height="226" width="226" alt="img"></a></div>';
        }

        ?>

        <?php

        for ($i=0; $i<count($playlist)&& $i<5; $i++){
            print '<div class="texto_foto_' . strval(6 + $i) . '">' . $playlist[$i]['user__username'] . '</div>';
        }

        ?>

        <!--Títulos-->
        <div class="playlists"><img src="Icones%20Rockstar%20Inc/Homepage/playlist%20homepage.png" height="auto" width="357" alt="img"></div>
        <div class="artists"><img src="Icones%20Rockstar%20Inc/Homepage/artist%20homepage.png" height="auto" width="323" alt="img"></div>

        <!--Botões-->
        <div class="mais"><img src="Icones%20Rockstar%20Inc/Homepage/add%20playlist.png" height="124" width="auto" alt="img"></div>
        <div class="see_all"><a href="AllPlaylists.php"><img src="Icones%20Rockstar%20Inc/Homepage/botao%20see%20all.png" height="auto" width="179" alt="img"></a></div>
        <div class="see_more"><a href="AllArtist.php"><img src="Icones%20Rockstar%20Inc/Homepage/botao%20see%20more.png" height="auto" width="197" alt="img"></a></div>

        <div class="contPopup">
            <div class="popup">
            </div>
            <div class="playTitle">
                <img src="Icones%20Rockstar%20Inc/Homepage/separador%20create%20new%20playlist/create%20new%20playlist.png"  height="40" width="auto" alt="img">
            </div>
            <div class="playContGenre">
                <label>By Genre:</label>
                <form id="upload_playlist_genre" method="post" action="" enctype="multipart/form-data">

                    <input required type="text" placeholder="" class="songs_number" name="songs_number">
                    <input class="submeter_foto_genre" type="file" name="foto_genre_playlist" accept=".jpg, .png">
                    <select class="song_genre" name="song_genre" >
                        <?php

                        $genre= pg_query($conn, "select genre_name from genre order by genre asc");
                        $genre= pg_fetch_all($genre);
                        foreach ($genre as $genero){
                            print '<option value="' . $genero['genre_name'] . '">' . $genero['genre_name'] . '</option>';
                        }
                        ?>
                    </select>
                    <button class="botao_add_playlist_genre" type="submit" name="create_playlist">Add playlist</button>
                </form>
            </div>
            <div class="playLinha"></div>
            <div class="playContName">
                <label>Playlist Name:</label>

                <!--Criar playlist por NOME-->

                <form id="upload_playlist_name" method="post" action="UploadPlaylistName.php" enctype="multipart/form-data">

                    <input required type="text" placeholder="" class="playlist_name" name="playlist_name">

                    <input class="submeter_foto_name" type="file" name="foto_name_playlist" accept=".jpg, .png">
                    <button class="botao_add_playlist_name" type="submit" name="create_playlist">Add playlist</button>

                </form>

            </div>
            <button class="fechar">
            </button>
        </div>

    </div>

</main>

<footer>
    <div class="foter">
        <div id="musica">
            <a href="Album.php"><p class="tipo2">Nome musica</p></a>
            <a href="Artist.php"><p class="tipo3">Nome artista</p> </a>
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
            <a href="Homepage.php">
                <img src="Icones%20Rockstar%20Inc/footer/logo%20com%20texto%20footer.png" height="60" width="auto"/>
            </a>
        </div>
    </div>
</footer>
</body>

<script>

    document.querySelector(".mais").addEventListener('click',function(){
        document.querySelector(".contPopup").style.cssText="display:block";

        document.querySelector(".fechar").addEventListener('click',function(){
            document.querySelector(".contPopup").style.cssText="display:none";

        });
    });

</script>
</html>