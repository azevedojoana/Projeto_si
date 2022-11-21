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
            <input class="searchbar" name="email" type="email" placeholder="search here">
            <button class="button" type="submit" ><a href="Search.html"><img src="Icones%20Rockstar%20Inc/header%20resto%20das%20paginas/search%20header.png" height="18" width="auto"></a></button>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <div class="caixa_esq" ></div>
        <div class="caixa_dir" ></div>

        <!--Playlists esq-->
        <div class="foto_1"><a  href="Playlist.php"><img src="imagens/playlist%201.jpg" height="226" width="226" alt="img"></a></div>
        <div class="foto_2"><a  href="Playlist.php"><img src="imagens/playlist%202.jpg" height="226" width="226" alt="img"></a></div>
        <div class="foto_3"><a  href="Playlist.php"><img src="imagens/playlist%203.jpg" height="226" width="226" alt="img"></a></div>
        <div class="foto_4"><a  href="Playlist.php"><img src="imagens/playlist%204.jpg" height="226" width="226" alt="img"></a></div>
        <div class="foto_5"><a  href="Playlist.php"><img src="imagens/playlist%205.jpg" height="226" width="226" alt="img"></a></div>


        <!--Texto Playlists esq-->
        <div class="texto_foto_1">Pop </div>
        <div class="texto_foto_2">#13</div>
        <div class="texto_foto_3">Casa das...</div>
        <div class="texto_foto_4">Studying</div>
        <div class="texto_foto_5">Chill</div>


        <?php

        $artist_name= pg_query($conn, "select user__username,foto from artist" );
        $artist_name= pg_fetch_all($artist_name);
        for ($i=0; $i<count($artist_name) && $i<5;$i++){
            print '<div class="foto_' . strval(6 + $i) . '"><a  href="Artist.php?artist=' . $artist_name[$i]['user__username'] . '"><img src="' . $artist_name[$i]['foto'] . '" height="226" width="226" alt="img"></a></div>';
        }

        ?>

        <?php

        for ($i=0; $i<count($artist_name);$i++){
            print '<div class="texto_foto_' . strval(6 + $i) . '">' . $artist_name[$i]['user__username'] . '</div>';
        }

        ?>

        <!--Títulos-->
        <div class="playlists"><img src="Icones%20Rockstar%20Inc/Homepage/playlist%20homepage.png" height="auto" width="357" alt="img"></div>
        <div class="artists"><img src="Icones%20Rockstar%20Inc/Homepage/artist%20homepage.png" height="auto" width="323" alt="img"></div>

        <!--Botões-->
        <div class="mais"><img src="Icones%20Rockstar%20Inc/Homepage/add%20playlist.png" height="124" width="auto" alt="img"></div>
        <div class="see_all"><a href="Search.php"><img src="Icones%20Rockstar%20Inc/Homepage/botao%20see%20all.png" height="auto" width="179" alt="img"></a></div>
        <div class="see_more"><a href="Search.php"><img src="Icones%20Rockstar%20Inc/Homepage/botao%20see%20more.png" height="auto" width="197" alt="img"></a></div>
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
</html>