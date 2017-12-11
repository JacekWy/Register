<?php
require_once ('Connect.php');


$user = $_POST['User'];
$pass1 = $_POST['password'];
$pass2 = $_POST['passwordr'];

$conn->query("insert into uzytkownicy (User, Password, PasswordR) VALUES ('$user','$pass1','$pass2')");
$conn->close();



echo 'User: '.$user.'<br>';
echo 'Password1: '.$pass1.'<br>';
echo 'Password2: '.$pass2.'<br>';


?>


