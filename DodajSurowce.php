<?php
require_once('Connect.php');
session_start();

$sur = $_POST['Liczba_a'];
$surowiec = $_POST['wybor'];
$id = $_SESSION['User'];

$conn->query("update magazyn, uzytkownicy set $surowiec = $surowiec + $sur WHERE uzytkownicy.User = '$id'");

header('Location: OsadnicyGame.php');


