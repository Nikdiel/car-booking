<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form action="registerValidation.php" method="post">
        <h1>Регистрация</h1>
        <label for="login">Логин:</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label for="password">Пароль:</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Зарегистрироваться</button>
        <a href="login.php">Уже есть аккаунт</a>
    </form>
</body>
</html>