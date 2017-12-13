<?php
require_once('Connect.php');


$wood = $conn->query("update magazyn set Wood = Wood + 10 WHERE id = 1 ");
$food = $conn->query("update magazyn set Food = Food + 10 WHERE id = 1 ");
$iron = $conn->query("update magazyn set Iron = Iron + 10 WHERE id = 1 ");

