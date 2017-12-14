<?php
require_once('Connect.php');
session_start();

if (isset($_POST["send"]))
{
    $check = true;

    if (empty($_POST["User"]))
    {
        $check = false;
    }
    else
        {
        $check = true;
    }
    if($_POST['password'] == $_POST['passwordr'])
    {
        $check = true;
    }else{
        $check = false;
        //$_SESSION['error'] = 'Hasla nie sa takie same';
        header('Location: RegisterForm.php');
    }


    if($check){
        $user = $_POST['User'];
        $pass1 = $_POST['password'];


        $conn->query("insert into uzytkownicy (User, Password) VALUES ('$user','$pass1')");
        $conn->query("insert into magazyn (Wood, Food, Iron) VALUES (10,10,10)");

        $conn->close();

        header('Location: Index.html');
    }else{
        echo 'Nieprawda';
    }
}






?>


