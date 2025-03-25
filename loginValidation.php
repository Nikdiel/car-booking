<?php
    session_start();
    require "connect.php";

    $login = $_POST["login"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `user` WHERE login = '$login' AND password = '$password'";

    
?>