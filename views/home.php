<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
</head>
<body>
    <h1>Главная страница</h1>
    <hr>
    <h2>Список пользователей</h2>
    <?php
        foreach ($users as $user) {
            echo '<h3>' . $user['name'] . '</h3>';
        }
    ?>
    <hr>
    <p>&copy; Все права защищены</p>
</body>
</html>

