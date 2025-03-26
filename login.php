<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form action="loginValidation.php" method="post">
        <h1>Вход</h1>
        <label for="login">Логин:</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label for="password">Пароль:</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <a href="register.php">Зарегистрироваться</a>
    </form>
</body>
</html>