<?php session_start(); 
if(!isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
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
        <table>
        <tr><td><?php echo "ผู้ใช้ : $_SESSION[username]";?></td></tr>
        <tr><td>หมวดหมู่ :</td><td><select name="category" id="">
                                  <option value="all">--ทั้งหมด--</option>
                                  <option value="general">เรื่องทั่วไป</option>
                                  <option value="study">เรื่องเรียน</option>
        </select></td></tr>
        <tr><td>หัวข้อ :</td><td><input type="text"></td></tr>
        <tr><td>เนื้อหา :</td><td><textarea name="" id="" cols="25" rows="3"></textarea></td></tr>
        <tr><td></td><td><input type="submit" value="บันทึกข้อความ"></td></tr>
        </table>
    </form>