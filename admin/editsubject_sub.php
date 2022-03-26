<?php
include('isvalid.php');
include('connection.php');

if (isset($_POST['sid'])) {
    $cd = $_POST['sid'];
    $cn = $_POST['sname'];

    $sql = "update subject set subname='$cn' where sid='$cd'";
    $res = mysqli_query($db_conn, $sql);
    if (mysqli_affected_rows($db_conn) == 1) {
        header("Location:viewsubject.php");
    }
}
