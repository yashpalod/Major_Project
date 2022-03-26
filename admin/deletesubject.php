<?php
include('isvalid.php');
include('connection.php');

if (isset($_GET['sid'])) {
    $cd = $_GET['sid'];
    $sql = "delete from subject where sid='$cd'";
    $res = mysqli_query($db_conn, $sql);
    if (mysqli_affected_rows($db_conn) == 1) {
        header("Location:viewsubject.php");
    }
}
