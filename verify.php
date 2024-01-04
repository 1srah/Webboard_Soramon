<?php
$username = $_POST['login'];
$pwd = $_POST['pwd'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard 1srah</h1>
    <hr>
    <div style="text-align:center;">เข้าสู่ระบบด้วย<br>
    <?php
        echo "Login = $username <br>";
        echo "Password = $pwd";
    ?></div>
</body>
</html>