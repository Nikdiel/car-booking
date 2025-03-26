<?php
    session_start();
    require "connect.php";

    $login = $_POST["login"];
    $password = $_POST["password"];

    $sql1 = "SELECT * FROM `users` WHERE login = '$login'";

    if($res = $conn->query($sql1)){
        $usersCount = $res->num_rows;
        if($usersCount>0){
            echo "bar";
            header("Location: register.php");
            exit();
        }
    }else{
        $sql = "INSERT INTO users (login, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);

        if($stmt){
            $stmt->bind_param("ss", $login, $password);
            if($stmt->execute()){
                header("location: login.php");
                exit();
            }
        }
    }
    
?>
