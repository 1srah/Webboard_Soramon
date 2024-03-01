<?php
if(isset($_POST['login'])){
    $login=$_POST['login'];
    $password=$_POST['pwd'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");

    $sql = "INSERT INTO user (login, password, name, gender, email, role)
            VALUES ('$login','$password','$name','$gender','$email','m')";
    $conn->exec($sql);
    $conn=null;
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <div class="d-flex justify-content-center">
            <div class="alert alert-success w-50 ms-5" style="text-align:center ;">สมัครสมาชิกเรียบร้อย . . . . . . . กำลังกลับสู่หน้าล็อคอิน
            </div>
        </div>
    <?php
    header( "Refresh:2; url=login.php");
    die();
}
else{
    header("location:index.php");
    die();
}
?>