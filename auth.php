<?php
$nicename =  $_POST['u_nicename'];
$pass = $_POST['u_pass'];
$connect =mysqli_connect('localhost', 'root', '', 'testdatabase');
$sql = $connect->query("SELECT * FROM `users` WHERE `nicename` ='{$nicename}' AND `pass` = '{$pass}'");
$user = $sql->fetch_assoc();
if(count($user)==0){
    echo "Такой пользователь не найден.<br>Поля пустые введите логин и пароль";
    echo "<p>Не ваш аккаунт? Выход <a href='login.php'>здесь</a></p>";
    exit();
}
echo "<p>Здравствуйте $nicename чтобы выйти нажмите <a href='exit.php'>здесь</a></p>";
header('Location: /igra.php');
setcookie('user', $user['u_nicename'], time() + 3600*24, "/");
?>

