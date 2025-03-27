<?php
    session_start();
    require "connect.php";

    $login = $_POST["login"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql1 = "SELECT * FROM `users` WHERE login = '$login'";

    if($res = $conn->query($sql1)){
        $usersCount = $res->num_rows;
        if($usersCount>0){
            echo "bar";
            header("Location: register.php");
            exit();
        }
    }

    $sql = "INSERT INTO users (login, password, name, email, reg_date) VALUES (?, ?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);

    if($stmt){
        $stmt->bind_param("ssss", $login, $password, $name, $email);
        if($stmt->execute()){
            header("location: login.php");
            exit();
        }
    }
    
?>
