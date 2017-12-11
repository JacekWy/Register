<?php
require_once ('Connect.php');

$user = $_POST['user'];
$password = $_POST['password'];

$sql = $conn->query("select * from uzytkownicy where User='$user' and Password = '$password'");
$row = $sql->num_rows;

if($row == 1){
    header('Location: OsadnicyGame.php');
}else{
    header('Location: Login.html');
}

