<?php
/*https://www.youtube.com/watch?v=3UtB4QS6EAg*/
require('../db.php');
global $conn;

$login = filter_var(trim($_POST['login']));
$pass = filter_var(trim($_POST['pass']));
$pass = md5($pass."rtytryt777");

$result = mysqli_query($conn,"SELECT name FROM users WHERE login = '$login' AND pass = '$pass' LIMIT 1");
$userName = $result->fetch_column(0);

if(!$userName) {
    echo "пользователь не найден";
    exit();
}
setcookie('user', $userName, time() + 3600, "/");
header('location: ../index.php');
