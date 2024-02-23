<?php
session_start();
if (isset($_SESSION['id'])) {
    header("location:index.php");
    die();
}
$username = $_POST['login'];
$pwd = $_POST['pwd'];
?>
<?php
if ($username == "admin" && $pwd == "ad1234") {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "a";
    $_SESSION['id'] = session_id();
    header("location:index.php");
    die();
} else if ($username == "member" && $pwd == "mem1234") {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "m";
    $_SESSION['id'] = session_id();
    header("location:index.php");
    die();
} else {
    $_SESSION['error'] = 'error';
    header("location:login.php");
    die();
}
?>