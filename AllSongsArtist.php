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
            display: flex;
            margin-top: 5%;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            font-size: 12px;
        }

        .ret{
            box-sizing: border-box;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

    </style>
</head>

<body>

<?php

require_once 'HeaderArtist.php';

?>

<main>

    <section id="artists">
        <div class="fots">

            <?php

            $song_name= pg_query($conn, "select song_name from music where single='true' and artist_user__username='$user'" );
            $song_name= pg_fetch_all($song_name);

            for ($i=0; $i<count($song_name); $i++){
                print '<h4 class="ret" >' . $song_name[$i]['song_name'] . '</h4>';
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