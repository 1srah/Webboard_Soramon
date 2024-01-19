<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Webboard 1srah</h1>
    <hr>
    <form>
        หมวดหมู่:
        <select name="category" id="">
            <option value="all">--ทั้งหมด--</option>
            <option value="general">เรื่องทั่วไป</option>
            <option value="study">เรื่องเรียน</option>
        </select>
        <?php
        if(!isset($_SESSION['id'])){
            echo "<a href=login.php style='float: right;'>เข้าสู่ระบบ</a>";

        }
        else{
            echo "<div style='float: right;'> ผู้ใช้งานระบบ : $_SESSION[username] &nbsp;&nbsp; <a href=logout.php '>ออกจากระบบ</a></div>";
            echo "<div> <a href=newpost.php>สร้างกระทู้ใหม่</a></div>";
        }
        ?>
        
        
    </form>
    <br>
    <ul>
        <?php
        for($i = 1;$i<=10;$i++){
            echo "<li><a href=post.php?id=$i>กระทู้ที่ $i</a>";
            if(isset($_SESSION['id']) && $_SESSION['role'] == 'a'){
                echo "&nbsp <a href=delete.php?id=$i>ลบ</a>";
            }
            echo "</li>";
        }
        ?>
        
    </ul>
</body>
</html>