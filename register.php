<?php
$host = 'localhost'; // имя хоста
$user = 'root'; // имя пользователя
$pass = ''; // пароль
$name = 'bd'; // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <form action="login.php" method="POST">

        <h1>Регистрация</h1>
        <p>Введите логин</p>
        <input name="login" require placeholder="Login">
        <p>Введите пароль</p>
        <input name="password" type="password" require placeholder="Password">
        <input type="submit" class=btn>

    </form>

   
</body>

</html>