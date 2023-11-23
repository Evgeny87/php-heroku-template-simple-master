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
        <input type="text" name="name" id="name" required>
        </br>
        <label for="pass">Пароль:</label>
        <input type="pass" name="pass" id="pass" required>
        </br>
        <input type="submit" value="Зарегистрироваться">
    </form>
</body>
</html>
