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
    <title>All Artists - Rockstar</title>

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

            $album_name= pg_query($conn, "select album_name,foto, id from album where artist_user__username= '$user'" );
            $album_name= pg_fetch_all($album_name);
            for ($i=0; $i<count($album_name); $i++){
                print '<div class="foto"><a  href="AlbumArtist.php?album=' . strval($album_name[$i]['id']) . '"><img src="' . $album_name[$i]['foto'] . '" height="226" width="226" alt="img"></a></div>';
            }

            ?>

            <?php

            for ($i=0; $i<count($album_name); $i++){
                print '<h4 class="texto_foto" >' . $album_name[$i]['album_name'] . '</h4>';
            }

            ?>

        </div>
    </section>

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