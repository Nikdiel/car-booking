<?php 
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "car-booking";

    $conn = new mysqli($host, $db_user, $db_password, $db_name);

    if($conn->connect_errno!=0){
        echo "Ошибка: ".$conn->connect_errno . "<br>";
        echo "Описание: " . $conn->connect_error;
    }
?>