<?php
    session_start();
    require "connect.php";

    $login = $_POST["login"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `users` WHERE login = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $login, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if($row){
        $_SESSION["logged-in"] = true;
        $_SESSION["user"] = $login;
        $_SESSION["user_id"] = $row["id"];
        header("Location: index.php");
        exit();
    }
    $stmt->close();
    $conn->close();
?>