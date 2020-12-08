<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Работа с БД Menti4u</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Текущее состояние базы данных Menti4u</h2>
    <div>
        <?php
            include 'main.php';
        ?>
    </div>
    <div>
        <form name="adding.php" method="POST">
            <fieldset>
                    <legend>Введите данные нового пользователя</legend>
                    <p><label for="name">Имя:</label>
                        <input type = "text" name = "name" id = "name" autofocus  required></p>
                    <p><label for="phoneNum">Номер телефона:</label>
                        <input type = "text" name="phoneNum" id = "phoneNum" placeholder="+7(900)1234567" required></p>                   
                    <p><label for="username">Логин:  </label>
                       <input type="text" name='login' id="username" required></p>
                    <p><label for="password">Пароль:</label>
                       <input type="password"  name='password' id="password" required></p>
                     <p><input type="submit" value="Добавить данные нового пользователя в БД"></p>
            </fieldset>
        </form>
    </div>
</body>
</html>
