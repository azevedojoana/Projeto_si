<?php
session_start();

print "Ciau " . $_SESSION['nome'];
session_destroy();
header("Location: Login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ciau!!!!!!!!!</title>
</head>
<body>
<div>

</div>
</body>
</html>