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
                $artist_name= pg_query($conn, "select user__username,foto from artist  order by user__username desc");
            }
            else {
                $artist_name= pg_query($conn, "select user__username,foto from artist order by user__username asc" );
            }

            $artist_name= pg_fetch_all($artist_name);
            for ($i=0; $i<count($artist_name);$i++){
                print '<div class="foto"><a  href="Artist.php?artist=' . $artist_name[$i]['user__username'] . '"><img src="' . $artist_name[$i]['foto'] . '" height="226" width="226" alt="img"></a></div>';
            }

            for ($i=0; $i<count($artist_name);$i++){
                print '<h4 class="texto_foto" >' . $artist_name[$i]['user__username'] . '</h4>';
            }

            ?>

        </div>
    </section>

    <button type="button" value="A-Z" id="asc" ><a href="AllArtist.php">A-Z</a></button>
    <button type="button" value="Z-A" id="desc"><a href="?inverse=1">Z-A</a></button>


</main>

<?php

require_once 'Footer.php';

?>
</body>


</html>