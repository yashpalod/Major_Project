<?php
include('isvalid.php');
include("db/connection.php");

if (isset($_POST['submit'])) {
    $subid = $_POST['subid'];
    // echo $subid . "<br>";

    if (!empty($_POST['quizcheck'])) {
        $que = $_POST['qid'];

        $count = count($_POST['quizcheck']);
        echo "You Attempt " . $count . " Questions";

        $result = 0;
        $i = 1;

        $selected = $_POST['quizcheck'];
        echo "<br>";
        print_r($selected);
        echo "<br>";
        foreach ($que as $qs) {
            echo $qs . "<br>";
        }
        foreach ($selected as $qst) {
            $xyz[] = $qst;
            echo $qst . "<br>";
        }

        //echo $xyz[2];

        $sql = "SELECT * FROM questions2 WHERE sid=$subid";
        $qry = mysqli_query($db_conn, $sql);
        $row = mysqli_fetch_array($qry);
        $qid = $row['id'];


        // $sql1 = "SELECT * FROM answers2 WHERE ques_id='$qid' AND is_correct='1'";
        // $qry1 = mysqli_query($db_conn, $sql1);

        // while ($row1 = mysqli_fetch_array($qry1)) {
        //     echo "<br>";
        //     print_r($row1['id']);
        //     $checked = $row1['id'] = $selected[$i];
        //     echo "<br>";
        //     print_r($selected[$i]);

        //     //$sql2 = "INSERT INTO user_ans VALUES('','$row[qid]','$selected[$i]')";
        //     //$qry2 = mysqli_query($db_conn, $sql2);

        //     if ($checked) {
        //         $result++;
        //     }
        //     $i++;
        // }
        // echo "</br>Total score:" . $result;

        // $sql1 = "SELECT * FROM answers2 WHERE ques_id='$qid' AND is_correct='1'";
        // $qry1 = mysqli_query($db_conn, $sql1);
        // $row1 = mysqli_fetch_array($qry1);


        foreach ($selected as $key => $value) {

            $sql1 = "SELECT * FROM answers2 WHERE ques_id='$key' AND is_correct='1'";
            $qry1 = mysqli_query($db_conn, $sql1);
            $row1 = mysqli_fetch_array($qry1);
            echo $row1[0];

            $yp = $_SESSION['USNM'];

            $sql2 = "INSERT INTO user_ans
                  SET uname = '$yp', subid='$subid', qid = '$key',
                  aid = '$value', corr_aid = '$row1[0]'";
            $qry2 = mysqli_query($db_conn, $sql2);
        }

        // --- for next page result ---

        // $sql3 = "SELECT * FROM user_ans where uname = '$yp' AND subid='$subid' AND aid=corr_aid ";
        // $qry3 = mysqli_query($db_conn, $sql3);
        // $row3 = mysqli_fetch_array($qry3);
        // $num_res =  mysqli_num_rows($qry3);
        // echo "<br>";
        // echo $num_res;

        // $sql4 = "SELECT * FROM user_ans where uname = '$yp' AND subid='$subid'";
        // $qry4 = mysqli_query($db_conn, $sql4);
        // $row4 = mysqli_fetch_array($qry4);
        // $tot_res =  mysqli_num_rows($qry4);
        // echo "<br>";
        // echo $tot_res;

        // $wrong_res = $tot_res - $num_res;

        // $sql5 = "INSERT INTO result VALUES ('','$subid','$tot_res','$num_res','$wrong_res')";
        // $qry4 = mysqli_query($db_conn, $sql5);
    }
}
