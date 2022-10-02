<?php
setcookie('user', $user['u_nicename'], time() - 3600*24, "/");
header('Location: /gameover.php')
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выход</title>
</head>
<body>
<?php
echo "Вы вышли";
?>   
</body>
</html>