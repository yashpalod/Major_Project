<?php
include('isvalid.php');
include('db/connection.php');

if (isset($_POST['submit'])) {
    $uid = $_POST['uid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mob = $_POST['mobile'];
    $edu = $_POST['edu'];
    $pass = $_POST['pass'];

    $sql = "update users set name='$name',email='$email',mobile='$mob',education='$edu',password='$pass' where id='$uid'";
    $res = mysqli_query($db_conn, $sql);
    if (mysqli_affected_rows($db_conn) == 1) {
        header("Location:profile.php");
    }
}
