<?php
require_once('Connect.php');

session_start();

$user = mysqli_real_escape_string($conn,$_POST['User']);
$password = mysqli_real_escape_string($conn,$_POST['password']);


$sql = $conn->query("select * from uzytkownicy where User='$user' and Password = '$password'");

$row = $sql->num_rows;

$_SESSION['User'] = $user;
if($row > 0){
    header('Location: OsadnicyGame.php');
}else{
    header('Location: Login.html');
}
