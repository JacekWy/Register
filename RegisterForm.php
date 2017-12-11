<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
</head>
<body>
<h1>Rejestracja</h1>

<form action="Register.php" method="post">
    User: <input type="text" name="User" required/><br><br>
    Password: <input type="password" name="password" required/><br><br>
    Repeat Password: <input type="password" name="passwordr" required/><br><br>
    <input type="submit" name="send" value="Send"/><br><br>
</form>


</body>
</html>