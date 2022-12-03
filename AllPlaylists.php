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
    <link rel="shortcut icon" type="img/png" href="Icones%20Rockstar%20Inc/header%20login%20e%20register/icon%20logo.png">
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

<?php

require_once 'HeaderListener.php';

?>

<main>

    <section id="artists">
        <div class="fots">

            <?php


            if(isset($_GET["inverse"]) && $_GET["inverse"] == 1) {
                $playlist_name= pg_query($conn, "select playlist_name,foto, id from playlist where client_user__username='$user' order by playlist_name desc");
            }
            else {
                $playlist_name= pg_query($conn, "select playlist_name,foto, id from playlist where client_user__username='$user' order by playlist_name asc" );
            }

            $playlist_name= pg_fetch_all($playlist_name);
            for ($i=0; $i<count($playlist_name); $i++){
                print '<div class="foto"><a  href="Playlist.php?playlist=' . strval($playlist_name[$i]['id']) . '"><img src="' . $playlist_name[$i]['foto'] . '" height="226" width="226" alt="img"></a></div>';
            }

            for ($i=0; $i<count($playlist_name); $i++){
                print '<h4 class="texto_foto" >' . $playlist_name[$i]['playlist_name'] . '</h4>';
            }

            ?>

        </div>
    </section>

    <button type="button" value="A-Z" id="asc" ><a href="AllPlaylists.php">A-Z</a></button>
    <button type="button" value="Z-A" id="desc"><a href="?inverse=1">Z-A</a></button>


</main>

<?php

require_once 'Footer.php';

?>
</body>


</html>