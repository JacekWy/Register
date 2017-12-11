<?php
require_once ('Connect.php');
session_start();

echo 'Zalogowany '.$_SESSION['User'].'<br>';
$name = $_SESSION['User'];


$result = $conn->query("select * from magazyn,uzytkownicy where magazyn.id=uzytkownicy.id AND uzytkownicy.User = '$name'");


if($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {
       echo 'Masz: '.$row['Wood'].' Drewna'.'<br>';
       echo 'Masz: '.$row['Food'].' Jedzenia'.'<br>';
       echo 'Masz: '.$row['Iron'].' Zelaza'.'<br>';

    }
}

echo '<a href="Logout.php">logout</a>';




