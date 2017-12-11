<?php
require_once ('Connect.php');

echo 'Zalogowwny'.'<br>';
echo 'Twoje konto'.'<br>';

$result = $conn->query("select * from magazyn");

if($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {
       echo 'Masz: '.$row['Wood'].' Drewna'.'<br>';
       echo 'Masz: '.$row['Food'].' Jedzenia'.'<br>';
       echo 'Masz: '.$row['Iron'].' Zelaza'.'<br>';

    }
}

