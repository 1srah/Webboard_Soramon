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
        table{
            border: 2px solid black;
            width: 25%;
        }
    </style>
</head>
<body>
    <h1>Webboard 1srah</h1>
    <hr>
    <div style="text-align: center;"><?php echo "ต้องการดูกระทู้หมายเลข ".$_GET['id']."<br>";?></div>
    <br>
    <form>
        <table align="center">
            <tr><td colspan="2"  style="background-color: #6CD2FE;">แสดงความคิดเห็น</td></tr>
            <tr><td><textarea id="w3review" name="w3review" rows="20" cols="60"></textarea></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
        </table>
        <br>
        <div style="text-align: center;"><a href="index.html">กลับสู่หน้าหลัก</a></div>
    </form>
</body>
</html>