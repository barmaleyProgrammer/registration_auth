<?php
global $conn;
$login = filter_var(trim($_POST['login']));
$name = filter_var(trim($_POST['name']));
$pass = filter_var(trim($_POST['pass']));
if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "недопустимая длинна логина меньше 5 не больше 90";
   exit();
}else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "недопустимая длинна имени меньше 3 не больше 50";
    exit();
}else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 8) {
    echo "недопустимая длинна пароля от 2 до 8";
   exit();
}
$pass = md5($pass."rtytryt777");
require('../db.php');

$mysql = mysqli_query( $conn,"INSERT INTO users (login, name, pass) VALUES ('$login', '$name', '$pass')");

//$sql= "INSERT INTO users (login,name,pass) VALUES ('".$_POST['login']."','".$_POST['name']."','".$_POST['pass']."')";
//$sql= "INSERT INTO users (login,name,pass) VALUES ('".$_POST['login']."','".$_POST['name']."','".$_POST['pass']."')";
require('../index.php');
//echo ('tttt');


//$result = mysqli_query(
  //  mysql: $conn,
  //  query: $sql
//);

//header('location: ./index.php');
//
//$result = mysqli_query(
   // mysql: $conn,
    //query: 'SELECT name FROM dict WHERE name LIKE \'%x\' ORDER BY name DESC;'
//);


//$result = mysqli_query($conn, "INSERT INTO users (login, pass, name)
//    VALUES('$login','$pass','$name')");
//$result->close();
//while ($row = mysqli_fetch_assoc($result)) {
//    echo $row['name'].'<br>'."\n";
?>