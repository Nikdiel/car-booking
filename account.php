<?php
    session_start();
    require "connect.php";
    $user_id = $_SESSION["user_id"];

    $book = "SELECT * FROM book WHERE user_id = ?";
    $stmt = $conn->prepare($book);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $res = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
</head>
<body>
    <?php include "header.html";?>

    <main>
        <table border="1px">
            <thead>
                <tr>
                    <th>Модель</th>
                    <th>Цена</th>
                    <th>Дата бронирования</th>
                    <th>Период</th>
                    <th>Действиетльность</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $res->fetch_assoc()){
                        echo '
                        <tr>
                            <td>'.$row["car"].'</td>
                            <td>'.$row["price"].'</td>
                            <td>'.$row["date"].'</td>
                            <td>'.$row["duration"].'</td>
                            <td></td>
                        </tr>';
                    }
                ?>
            </tbody>
        </table>
    </main>

    <?php include "footer.html";?>
</body>
</html>