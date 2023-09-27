<?php
session_start();
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
    <div class="container">


        <div class="wrapper">
            <?php
            if (!empty($_SESSION['success'])) {
                echo "Логин: " . ($_SESSION['pass'])  ;
            } else {
                echo "Авторизуйтесь, чтобы узнать информацию";

            }
            ?>

            <a href="login.php">Выйти с аккаунта</a><br>
        </div>

    </div>

</body>

</html>