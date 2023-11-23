<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма для загрузки файла</title>
</head>
<body>
    <form action="post.php" method="post" enctype="multipart/form-data">
        
        <label for="name">Имя пользователя:</label>
        <input type="text" name="name" id="name" placeholder="Логин или email" required>
        </br>
        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password"  placeholder="Пароль" required>
        </br>
        <input type="submit" name="login" value="Войти">
        </br>
        <input type="submit" name="register" value="Зарегистрироваться">
    </form>
</body>
</html>
