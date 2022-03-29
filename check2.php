<?php
include('isvalid.php');
include("db/connection.php");

if (isset($_POST['submit'])) {
    $subid = $_POST['subid'];
    echo $subid . "<br>";

    if (!empty($_POST['quizcheck'])) {
        $count = count($_POST['quizcheck']);
        echo "You Attempt " . $count . " Questions";

        $result = 0;
        $i = 1;

        $selected = $_POST['quizcheck'];
        echo "<br>";
        print_r($selected);

        $sql = "SELECT * FROM questions2 WHERE sid=$subid";
        $qry = mysqli_query($db_conn, $sql);
        $row = mysqli_fetch_array($qry);
        $qid = $row['id'];

        $sql1 = "SELECT * FROM answers2 WHERE ques_id='$qid' AND is_correct='1'";
        $qry1 = mysqli_query($db_conn, $sql1);

        while ($row1 = mysqli_fetch_array($qry1)) {
            echo "<br>";
            print_r($row1['id']);
            $checked = $row1['id'] = $selected[$i];
            echo "<br>";
            print_r($selected[$i]);

            //$sql2 = "INSERT INTO user_ans VALUES('','$row[qid]','$selected[$i]')";
            //$qry2 = mysqli_query($db_conn, $sql2);

            if ($checked) {
                $result++;
            }
            $i++;
        }
        echo "</br>Total score:" . $result;
    }
}
