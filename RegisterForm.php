<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<h1>Rejestracja</h1>

<form action="Register.php" method="post">
    <p>User: <input type="text" name="User" class="form" required/><br><br></p>
    <p>Password: <input type="password" name="password" class="form" required/><br><br></p>
    Repeat Password: <input type="password" name="passwordr" class="form" required/><br><br>
    <input type="submit" name="send" value="Send" class="form"/><br><br>
</form>





</body>
</html>