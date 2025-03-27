<?php
    session_start();
    require "connect.php";
    $user_id = $_SESSION["user_id"];

    $user = "SELECT * FROM users WHERE id = ?";
    $user_stmt = $conn->prepare($user);
    $user_stmt->bind_param("i", $user_id);
    $user_stmt->execute();
    $user_res = $user_stmt->get_result();
    $ud = $user_res->fetch_assoc();

    $book = "SELECT * FROM book WHERE user_id = ? ORDER BY id DESC";
    $stmt = $conn->prepare($book);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $res = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="css/account.css">
</head>
<body>
    <?php include "header.html";?>

    <main>
        <section class="section profile">
            <span>Добро пожаловать, <?=$ud["login"]?>!</span>
            <form action="logout.php" method="post">
                <button class="logout-btn" type="submit">Выйти</button>
            </form>
        </section>

        <section class="section user-info">
            <h2>Ваш профиль</h2>
            <ul>
                <li><strong>Имя:</strong> <?=$ud["name"]?></li>
                <li><strong>Email:</strong> <?=$ud["email"]?></li>
                <li><strong>Дата регистрации:</strong> <?=$ud["reg-date"]?></li>
            </ul>
        </section>

        <section>
            <h1>История бронирования:</h1>
            <table>
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
                            $date = new DateTime($row['date']); 
                            $date->modify('+'.$row["duration"].' days');
                            $now = new DateTime();
                            if($now < $date){
                                $valid = "Активна";
                            }else{
                                $valid = "Не активна";
                            }
                            echo '
                            <tr>
                                <td>'.$row["car"].'</td>
                                <td>'.$row["price"].'</td>
                                <td>'.$row["date"].'</td>
                                <td>'.$row["duration"].' дн</td>
                                <td>'.$valid.'</td>
                            </tr>';
                        }
                    ?>
                </tbody>
            </table>
        </section>
        
    </main>

    <?php include "footer.html";?>
</body>
</html>