<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <script src="script.js" defer></script>
    <title>Вход</title>
</head>
<body>
    <div class="login-container">
        <form action="csait.php" method="post" class="login-form">
            <h2>Авторизация</h2>
            <label for="username">Почта</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Войти</button>
        </form>
    </div>
</body>
</html>