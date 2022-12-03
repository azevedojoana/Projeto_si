<?php

session_start();

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
    <title>Artist - Rockstar</title>

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
            width: 193px;
            height: 193px;
            left: 227px;
            top: 207px;

            border-radius: 50%;
            border: 4px solid #FFFFFF;
        }


        /* Caixa albums */

        .caixa_esq {
            box-sizing: border-box;

            position: absolute;
            width: 1060px;
            height: 464px;
            left: 130px;
            top: 449px;

            background: #B3B7A8;
            border: 4px solid #FFFFFF;
            border-radius: 36px;
        }


        /* Caixa musicas */

        .caixa_dir {
            box-sizing: border-box;

            position: absolute;
            width: 535px;
            height: 731px;
            left: 1245px;
            top: 182px;

            background: #B3B7A8;
            border: 4px solid #FFFFFF;
            border-radius: 36px;
        }


        /* Albums */

        .albums {
            position: absolute;
            width: 301px;
            height: 41px;
            left: 512px;
            top: 481px;
            align-content: center;

        }

        /* Singles */

        .songs {
            position: absolute;
            width: 304px;
            height: 53px;
            left: 1362px;
            top: 216px;
            align-content: center;

        }

        /* Rectangle esq */

        .foto_1 img{

            position: absolute;
            width: 213px;
            height: 213px;
            left: 678px;
            top: 575px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle esq */

        .foto_2 img{

            position: absolute;
            width: 213px;
            height: 213px;
            left: 437px;
            top: 575px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle esq */

        .foto_3 img{

            position: absolute;
            width: 213px;
            height: 213px;
            left: 196px;
            top: 575px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle dir */

        .ret_1 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 293px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle dir */

        .ret_2 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 358px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle dir */

        .ret_3 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 423px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_4 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 488px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_5 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 553px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_6 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 618px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_7 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 683px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_8 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 748px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_9 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 813px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle esq */

        .foto_4 img{

            position: absolute;
            width: 213px;
            height: 213px;
            left: 925px;
            top: 575px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* 3 pontinhos */

        .pont_1 {
            position: absolute;
            left: 1725px;
            top: 309px;
        }

        /* 3 pontinhos */

        .pont_2 {
            position: absolute;
            left: 1725px;
            top: 375px;

            /* 3 pontinhos */
        }

        .pont_3 {
            position: absolute;
            left: 1725px;
            top: 440px;
        }

        /* 3 pontinhos */

        .pont_4 {
            position: absolute;
            left: 1725px;
            top: 504px;
        }

        /* 3 pontinhos */

        .pont_5 {
            position: absolute;
            left: 1725px;
            top: 569px;
        }

        /* 3 pontinhos */

        .pont_6 {
            position: absolute;
            left: 1725px;
            top: 634px;
        }

        /* 3 pontinhos */

        .pont_7 {
            position: absolute;
            left: 1725px;
            top: 698px;
        }

        /* 3 pontinhos */

        .pont_8 {
            position: absolute;
            left: 1725px;
            top: 764px;
        }

        /* 3 pontinhos */

        .pont_9 {
            position: absolute;
            left: 1725px;
            top: 830px;
        }

        /* Stuffed & Ready */

        .texto_foto_1 {
            position: absolute;
            width: 213px;
            height: 80px;
            left: 196px;
            top: 796px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 33.83px;
            line-height: 38px;
            text-align: center;

            color: #EAE4E1;
        }


        /* Haxel Princess */

        .texto_foto_2 {
            position: absolute;
            width: 213px;
            height: 38px;
            left: 437px;
            top: 795px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 33.83px;
            line-height: 38px;
            text-align: center;

            color: #EAE4E1;
        }


        /* Papa Cremp */

        .texto_foto_3 {
            position: absolute;
            width: 213px;
            height: 80px;
            left: 678px;
            top: 795px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 33.83px;
            line-height: 38px;
            text-align: center;

            color: #EAE4E1;
        }


        /* Apocalipstic */

        .texto_foto_4 {
            position: absolute;
            width: 213px;
            height: 80px;
            left: 925px;
            top: 795px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 33.83px;
            line-height: 38px;
            text-align: center;

            color: #EAE4E1;

        }


        /* Cherry Glazerr */

        h1{
            position: absolute;
            width: 654px;
            height: 65px;
            left: 461px;
            top: 200px;

            font-family: 'Franklin Gothic Heavy';
            font-style: normal;
            font-weight: 400;
            font-size: 90px;
            line-height: 102px;

            color: #566D49;
        }


        /* Come Back Around - Moon Boots, ... */

        .texto_ret_1 {
            position: absolute;
            width: 547px;
            height: 24px;
            left: 1297px;
            top: 306px;

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
            width: 547px;
            height: 24px;
            left: 1297px;
            top: 371px;

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
            width: 547px;
            height: 24px;
            left: 1297px;
            top: 437px;

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
            width: 547px;
            height: 24px;
            left: 1297px;
            top: 500px;

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
            width: 547px;
            height: 24px;
            left: 1297px;
            top: 566px;

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
            width: 517px;
            height: 24px;
            left: 1297px;
            top: 630px;

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
            width: 547px;
            height: 24px;
            left: 1297px;
            top: 695px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Juicy Socks - Cherry Glazerr */

        .texto_ret_8 {
            position: absolute;
            width: 517px;
            height: 24px;
            left: 1297px;
            top: 760px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Territorial Pissings - Cherry Glazerr */

        .texto_ret_9 {
            position: absolute;
            width: 547px;
            height: 24px;
            left: 1297px;
            top: 827px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }

        .see_more{
            position: absolute;
            width: 197px;
            height: 64px;
            left: 875px;
            top: 450px;
        }

        .see_all{
            position: absolute;
            width: 179px;
            height: 58px;
            left: 1467px;
            top: 850px;
        }

    </style>

</head>

<body>
<?php

require_once 'HeaderListener.php';

?>
<main>
    <div class="container">

        <?php

        $artista= $_GET['artist'];

        print '<h1>' . $artista . '</h1>';

        $foto= pg_query($conn, "select foto from artist where user__username = '$artista'"  );
        $foto= pg_fetch_array($foto);
        print '<div class="foto_perfil"><img src="' . $foto['foto'] . '" height="193" width="193" alt="img"></div>';


        ?>

        <div class="caixa_esq" ></div>
        <div class="caixa_dir" ></div>

        <?php

        $album= pg_query($conn, "select album_name,foto, id from album where artist_user__username='$artista'" );
        $album= pg_fetch_all($album);
        for ($i=0; $i<count($album) && $i<4;$i++){
            print '<div class="foto_' . strval(1 + $i) . '"><a  href="AlbumListener.php?album=' . strval($album[$i]['id']) . '"><img src="' . $album[$i]['foto'] . '" height="216" width="216" alt="img"></a></div>';

        }

        ?>

        <?php

        for ($i=0; $i<count($album) && $i<4;$i++){
            print '<div class="texto_foto_' . strval(1 + $i) . '">' . $album[$i]['album_name'] . '</div>';
        }

        $song= pg_query($conn, "select song_name,file from music where single='true' and artist_user__username='$artista'" );


        //   print pg_affected_rows($song);

        //   exit();
        $song= pg_fetch_all($song);

        for ($i=0; $i<count($song) && $i<8;$i++){
            print '<div class="ret_' . strval(1 + $i) . '">' . $song[$i]['song_name'] . '</div>';
            print '<audio style="scale: 70%;position: absolute;left: 1470px;top: 260 ' . strval(65 * $i) . 'px;"class="pont_' . strval(1 + $i) . '" controls>
                       <source src="' . $song[$i]['file'] . '" type="audio/mpeg">
                       Your browser does not support the audio element.
                   </audio>';
        }
        ?>

        <!--Títulos-->

        <div class="albums"><img src="Icones%20Rockstar%20Inc/artist/albums.png" height="auto" width="301" alt="img"></div>
        <div class="songs"><img src="Icones%20Rockstar%20Inc/artist/singles.png" height="auto" width="304" alt="img"></div>

    </div>

    <?php
        print ' <div class="see_more"><a href="AllAlbumsListener.php?artista=' . $artista . '"><img src="Icones%20Rockstar%20Inc/Homepage/botao%20see%20more.png" height="auto" width="197" alt="img"></a></div>';
        print '<div class="see_all"><a href="AllSongsListener.php?artista=' . $artista . '"><img src="Icones%20Rockstar%20Inc/Homepage/botao%20see%20all.png" height="auto" width="179" alt="img"></a></div>';
    ?>
</main>

<?php

require_once 'Footer.php';

?>

</body>
</html>