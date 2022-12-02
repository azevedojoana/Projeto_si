<?php

session_start();

$user= $_SESSION['nome'];

$str = "dbname=rockstar user=postgres  password=postgres host=localhost port=5432";
$conn= pg_connect($str) or die ("Erro na ligacao");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="CSS/geral.css" rel="stylesheet">
    <meta charset="UTF-8">

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

</header>

<footer>
    <div class="foter">
        <div id="musica">
            <p class="tipo2">Nome musica</p>
            <p class="tipo3">Nome artista</p>
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
            <a href="Home.php">
                <img src="Icones%20Rockstar%20Inc/footer/logo%20com%20texto%20footer.png" height="60" width="auto"/>
            </a>
        </div>
    </div>
</footer>

</body>
</html>