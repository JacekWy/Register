<?php
require_once('Connect.php');

session_start();

$user = $_POST['User'];
$password = $_POST['password'];


$sql = $conn->query("select * from uzytkownicy where User='$user' and Password = '$password'");
$row = $sql->num_rows;

$_SESSION['User'] = $user;
if($row > 0){
    header('Location: OsadnicyGame.php');
}else{
    header('Location: Login.html');
}

