<?php
session_start();
?>


<?php $host = 'localhost'; // имя хоста
$user = 'root'; // имя пользователя
$pass = ''; // пароль
$name = 'bd'; // имя базы данных
$link = mysqli_connect($host, $user, $pass, $name);

if (!empty($_POST['login']) and !empty($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $query = "INSERT INTO users SET login='$login', pass='$password'";
    $result = mysqli_query($link, $query);


}

if (empty($_GET)) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>

    </head>

    <body>

        <form action="" method="GET">
            <h1>Авторизация</h1>
            <p>Введите логин</p>
            <input name="login" placeholder="Login">
            <p>Введите пароль</p>
            <input name="password" type="password" placeholder="Password">
            <input type="submit" class=btn>
            <a href='register.php' class="reg">Зарегистрироваться</a>
        </form>

        <?php
} else {
    if (!empty($_GET['password']) and !empty($_GET['login'])) {
        $login = $_GET['login'];
        $password = $_GET['password'];
        $query = "SELECT * FROM users WHERE login='$login' AND pass='$password'";
        $result = mysqli_query($link, $query);
        $user = mysqli_fetch_assoc($result);


        $_SESSION['success'] = true;
        $_SESSION['login'] = $login;
        ?>
            <a href='final.php'>Account</a>
            <?php
            ?>
            <?php

    }
}

?>
</body>

</html>