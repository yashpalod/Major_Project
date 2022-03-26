<?php
include('isvalid.php');
include('connection.php');
if (isset($_POST['submit'])) {
    $sn = $_POST['sname'];

    $sql = "insert into subject (subname) values ('$sn')";
    $res = mysqli_query($db_conn, $sql);
    if (mysqli_affected_rows($db_conn)) {
        header('Location:viewsubject.php');
    }
}
