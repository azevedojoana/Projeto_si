<?php

session_start();

$user= $_SESSION['nome'];

$str = "dbname=rockstar user=postgres  password=postgres host=localhost port=5432";
$conn= pg_connect($str) or die ("Erro na ligacao");

$album_id= $_GET['album'];

$album= pg_query($conn, "select foto, id, artist_user__username, album_name from album where id='$album_id'" );
$album= pg_fetch_array($album);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="img/png" href="Icones%20Rockstar%20Inc/header%20login%20e%20register/icon%20logo.png">
    <link href="CSS/geral.css" rel="stylesheet">
    <meta charset="UTF-8">
    <?php

    print '<title>' . $album["album_name"] . ' - Rockstar</title>';

    ?>
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

        .songs {
            position: absolute;
            width: 279px;
            height: 51px;
            left: 712px;
            top: 240px;
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

        <div class="caixa_esq" ></div>
        <div class="caixa_dir" ></div>

        <!--Títulos-->

        <div class="songs"><img src="Icones%20Rockstar%20Inc/album/songs.png" height="auto" width="279" alt="img"></div>

        <?php

        print '<h1>' . $album["album_name"] . '</h1>';


        print '<h2>' . $album['artist_user__username'] . '</h2>';

        print '<div class="foto_perfil"><img src="' . $album['foto'] . '" height="441" width="auto" alt="img"></div>';

        $song= pg_query($conn, "select music_id,song_name,file from album_music,music where album_id=$album_id and  id=music_id" );
        $song= pg_fetch_all($song);

        for ($i=0; $i<count($song); $i++){

            print '<div class="ret_' . strval(1 + $i) . '">' . $song[$i]['song_name'] . '</div>';
            print '<audio style="scale: 70%;position: absolute;left: 1470px;top: 260 ' . strval(65 * $i) . 'px;"class="pont_' . strval(1 + $i) . '" controls>
                       <source src="' . $song[$i]['file'] . '" type="audio/mpeg">
                       Your browser does not support the audio element.
                   </audio>';
        }


        ?>
    </div>
</main>
<?php

require_once 'Footer.php';

?>

</body>
</html>
