<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
            <form id="search" method="post" action="Search.php" enctype="multipart/form-data">

                <input class="searchbar" name="search" type="text" placeholder="search here">
                <button class="button" type="submit" ><img src="Icones%20Rockstar%20Inc/header%20resto%20das%20paginas/search%20header.png" height="18" width="auto"></button>

            </form>
        </div>
    </div>
</header>

</body>
</html>