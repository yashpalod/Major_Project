<?php
include('isvalid.php');
include('connection.php');

if (isset($_GET['qid'])) {
    $cd = $_GET['qid'];
    $sql = "delete from quiz where qid='$cd'";
    $res = mysqli_query($db_conn, $sql);
    if (mysqli_affected_rows($db_conn) == 1) {
        header("Location:viewquestions.php");
    }
}
