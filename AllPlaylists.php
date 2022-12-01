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
    <title>All Playlists - Rockstar</title>

    <style>

        /------ARTISTS------/

        #artists{
            padding: 5vh 0;
            text-align: center;
        }

        .fots{
            margin-top: 5%;
            display: grid;
            grid-template-columns:1fr 1fr 1fr 1fr 1fr;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            font-size: 12px;
        }

        #asc{
            position: absolute;
            width: 40px;
            height: 40px;
            left: 0px;
            top: -10px;
        }

        #desc{
            position: absolute;
            width: 40px;
            height: 40px;
            left: 50px;
            top: -10px;
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
            <button class="button" type="submit" ><a href="Search.php"><img src="Icones%20Rockstar%20Inc/header%20resto%20das%20paginas/search%20header.png" height="18" width="auto"></a></button>
        </div>
    </div>
</header>

<main>

    <section id="artists">
        <div class="fots">

            <?php


            if(isset($_GET["inverse"]) && $_GET["inverse"] == 1) {
                $playlist_name= pg_query($conn, "select playlist_name,foto from playlist where client_user__username='$user' order by playlist_name desc");
            }
            else {
                $playlist_name= pg_query($conn, "select playlist_name,foto from playlist where client_user__username='$user' order by playlist_name asc" );
            }

            $playlist_name= pg_fetch_all($playlist_name);
            for ($i=0; $i<count($playlist_name); $i++){
                print '<div class="foto"><a  href="Artist.php?artist=' . $playlist_name[$i]['playlist_name'] . '"><img src="' . $playlist_name[$i]['foto'] . '" height="226" width="226" alt="img"></a></div>';
            }

            for ($i=0; $i<count($playlist_name); $i++){
                print '<h4 class="texto_foto" >' . $playlist_name[$i]['playlist_name'] . '</h4>';
            }

            ?>

        </div>
    </section>

    <button type="button" value="A-Z" id="asc" ><a href="AllArtist.php">A-Z</a></button>
    <button type="button" value="Z-A" id="desc"><a href="?inverse=1">Z-A</a></button>


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