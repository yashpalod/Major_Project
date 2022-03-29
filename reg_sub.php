<?php
include("admin/connection.php");
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $edu = $_POST['edu'];
    $pass = $_POST['pass'];

    $sql = "insert into users values ('','$name','$uname','$email','$mob','$edu','$pass')";
    $res = mysqli_query($db_conn, $sql);
    if (mysqli_affected_rows($db_conn)) {
        header('Location:login.php');
    }
}
