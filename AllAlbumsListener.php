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

<?php

require_once 'HeaderListener.php';

?>

<main>

    <section id="artists">
        <div class="fots">

            <?php

            $artista= $_GET['artista'];

            $album_name= pg_query($conn, "select album_name,foto, id from album where artist_user__username= '$artista'" );
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

<?php

require_once 'Footer.php';

?>
</body>
</html>