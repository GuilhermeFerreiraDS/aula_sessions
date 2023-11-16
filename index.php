<?php
    session_start();

    $_SESSION['conectado'] = false;

    if($_POST['user'] == 'admin')
        if($_POST['password'] == '123')
            $_SESSION['conectado'] = true;

    if(!$_SESSION['conectado'])
        header('Location: login.php');

    include 'header.php';
    include 'content.php';
    include 'footer.php';
?>  