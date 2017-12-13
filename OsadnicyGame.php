<?php
require_once ('Connect.php');
session_start();
$name = $_SESSION['User'];

$result = $conn->query("select * from magazyn,uzytkownicy where magazyn.id=uzytkownicy.id AND uzytkownicy.User = '$name'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Osadnicy</title>
    <link rel="stylesheet" type="text/css" href="osadnicy_style.css">
</head>
<body>
<header>
    <h1>Osadnicy</h1>
</header>
<nav>
   <?php if($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            echo 'Drzewo: '.$row['Wood'].' ';
            echo 'Food: '.$row['Food'].' ';
            echo 'Zelazo: '.$row['Iron'].' ';
            echo '<a href="Logout.php">logout</a>';
        }
    }

    ?>
</nav>
<div id="game">
    <div id="game1">
        <img src="ss_2.jpg">
    </div>
    <div id="gameoption">
        <h2>Dodawanie</h2>

    </div>


</div>
<footer>
    stopka
</footer>

</body>
</html>








