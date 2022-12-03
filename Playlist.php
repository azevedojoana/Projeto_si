<?php

session_start();

$user= $_SESSION['nome'];

$str = "dbname=rockstar user=postgres  password=postgres host=localhost port=5432";
$conn= pg_connect($str) or die ("Erro na ligacao");

$playlist_id= $_GET['playlist'];

$playlist= pg_query($conn, "select foto, playlist_name from playlist where id='$playlist_id'" );
$playlist= pg_fetch_array($playlist);

print '<title>' . $playlist["playlist_name"] . ' - Rockstar</title>';


if(isset($_POST["delete"])) {
    pg_query($conn, "delete from playlist_music where playlist_id='$playlist_id'" );
    pg_query($conn, "delete from playlist where id='$playlist_id'" );

    header("Location: Homepage.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="CSS/geral.css" rel="stylesheet">
    <meta charset="UTF-8">


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

        /* foto artista */



        .foto_perfil img{
            position: absolute;
            width: 438px;
            height: 441px;
            left: 160px;
            top: 213px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }



        /* Caixa musicas */

        .caixa_dir {
            box-sizing: border-box;

            position: absolute;
            width: 1102px;
            height: 687px;
            left: 660px;
            top: 183px;

            background: #B3B7A8;
            border: 4px solid #FFFFFF;
            border-radius: 36px;
        }


        /* Singles */

        .playlist {
            position: absolute;
            width: 302px;
            height: 51px;
            left: 701px;
            top: 241px;
        }

        /* Rectangle dir */

        .ret_1 {
            box-sizing: border-box;

            position: absolute;
            width: 1044px;
            height: 57px;
            left: 687px;
            top: 345px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle dir */

        .ret_2 {
            box-sizing: border-box;

            position: absolute;
            width: 1044px;
            height: 57px;
            left: 687px;
            top: 408px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle dir */

        .ret_3 {
            box-sizing: border-box;

            position: absolute;
            width: 1044px;
            height: 57px;
            left: 687px;
            top: 471px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_4 {
            box-sizing: border-box;

            position: absolute;
            width: 1044px;
            height: 57px;
            left: 687px;
            top: 534px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_5 {
            box-sizing: border-box;

            position: absolute;
            width: 1044px;
            height: 57px;
            left: 687px;
            top: 597px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_6 {
            box-sizing: border-box;

            position: absolute;
            width: 1044px;
            height: 57px;
            left: 687px;
            top: 660px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_7 {
            box-sizing: border-box;

            position: absolute;
            width: 1044px;
            height: 57px;
            left: 687px;
            top: 723px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* 3 pontinhos */

        .pont_2 {
            position: absolute;
            left: 1701px;
            top: 361px;

            /* 3 pontinhos */
        }

        .pont_3 {
            position: absolute;
            left: 1701px;
            top: 424px;
        }

        /* 3 pontinhos */

        .pont_4 {
            position: absolute;
            left: 1701px;
            top: 424px;
        }

        /* 3 pontinhos */

        .pont_5 {
            position: absolute;
            left: 1701px;
            top: 488px;
        }

        /* 3 pontinhos */

        .pont_6 {
            position: absolute;
            left: 1701px;
            top: 550px;
        }

        /* 3 pontinhos */

        .pont_7 {
            position: absolute;
            left: 1701px;
            top: 613px;
        }

        /* 3 pontinhos */

        .pont_8 {
            position: absolute;
            left: 1701px;
            top: 676px;
        }

        /* 3 pontinhos */

        .pont_9 {
            position: absolute;
            left: 1701px;
            top: 739px;
        }


        /* Stuffed & Ready */
        h1{
            position: absolute;
            width: 438px;
            height: 45px;
            left: 160px;
            top: 675px;

            font-family: 'Franklin Gothic Heavy';
            font-style: normal;
            font-weight: 400;
            font-size: 50px;
            line-height: 57px;
            text-align: center;

            color: #566D49;
        }

        /* Cherry Glazerr */

        h2{
            position: absolute;
            width: 420px;
            height: 45px;
            left: 160px;
            top: 738px;

            font-family: 'Franklin Gothic Medium';
            font-style: italic;
            font-weight: 400;
            font-size: 40px;
            line-height: 45px;
            text-align: center;

            color: #566D49;
        }


        /* Come Back Around - Moon Boots, ... */

        .texto_ret_1 {
            position: absolute;
            width: 600px;
            height: 24px;
            left: 719px;
            top: 359px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }



        /* My Friend of Misery - Cherry Glazerr */

        .texto_ret_2 {
            position: absolute;
            width: 544px;
            height: 24px;
            left: 719px;
            top: 422px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Soft Drink - Cherry Glazerr */

        .texto_ret_3 {
            position: absolute;
            width: 544px;
            height: 24px;
            left: 719px;
            top: 486px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Big Bang - Cherry Glazerr */

        .texto_ret_4 {
            position: absolute;
            width: 544px;
            height: 24px;
            left: 719px;
            top: 548px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Rabbit Hole - Cherry Glazerr */

        .texto_ret_5 {
            position: absolute;
            width: 544px;
            height: 24px;
            left: 719px;
            top: 613px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Call Me (feat. Portugal. The Man)... */

        .texto_ret_6 {
            position: absolute;
            width: 800px;
            height: 24px;
            left: 719px;
            top: 675px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Daddy (Reggie Watts Remix) - ... */

        .texto_ret_7 {
            position: absolute;
            width: 544px;
            height: 24px;
            left: 719px;
            top: 737px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }

    </style>

</head>

<body>

<?php

require_once 'HeaderListener.php';

?>

<main>
    <div class="container">
        <div class="foto_perfil"><img src="imagens/playlist%204.jpg" height="441" width="auto" alt="img"></div>

        <div class="caixa_esq" ></div>
        <div class="caixa_dir" ></div>

        <?php

        print '<h2>' . $user . '</h2>';


        print '<h1 style="text-transform: capitalize;">' . $playlist["playlist_name"]  . '</h1>';


        print '<div class="foto_perfil"><img src="' . $playlist['foto'] . '" height="441" width="auto" alt="img"></div>';

        $song= pg_query($conn, "select music_id,song_name from playlist_music,music where playlist_id=$playlist_id and  id=music_id" );
        $song= pg_fetch_all($song);

        for ($i=0; $i<count($song); $i++){

            print '<div class="ret_' . strval(1 + $i) . '">' . $song[$i]['song_name'] . '</div>';
            print '<div class="pont_' . strval(1 + $i) . '"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>';
        }

        ?>

        <!--Títulos-->

        <div class="playlist"><img src="Icones%20Rockstar%20Inc/playlist/playlist.png" height="auto" width="302" alt="img"></div>

        <form id="delete_playlist" method="post" action="" enctype="multipart/form-data">

            <button class="delete" type="submit" name="delete">Delete Playlist</button>
        </form>

    </div>
</main>

<?php

require_once 'Footer.php';

?>
</body>
</html>