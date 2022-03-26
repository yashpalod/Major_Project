<?php
include('isvalid.php');
include("db/connection.php");

if (isset($_POST['submit'])) {
    $subid = $_POST['subid'];
    echo $subid;

    if (!empty($_POST['quizcheck'])) {
        $count = count($_POST['quizcheck']);
        echo "You Attempt " . $count . " Questions";

        $result = 0;
        $i = 1;

        $selected = $_POST['quizcheck'];
        echo "<br>";
        print_r($selected);

        $sql = "SELECT * FROM questions1";
        $qry = mysqli_query($db_conn, $sql);

        $sql1 = "SELECT * FROM answers1";
        $qry1 = mysqli_query($db_conn, $sql1);
        $row1 = mysqli_fetch_array($qry1);

        while ($row = mysqli_fetch_array($qry)) {
            echo "<br>";
            print_r($row['corr_ans_id']);
            $checked = $row['corr_ans_id'] = $selected[$i];
            echo "<br>";
            print_r($selected[$i]);
            $sql2 = "INSERT INTO user_ans VALUES('','$row[qid]','$selected[$i]')";
            $qry2 = mysqli_query($db_conn, $sql2);

            if ($checked) {
                $result++;
            }
            $i++;
        }
        echo "</br>Total score:" . $result;
    }
}

$name = $_SESSION['USNM'];
$finalresult = "INSERT INTO user1 VALUES('','$name','3','$result') ";
$queryresult = mysqli_query($db_conn, $finalresult);
      // if($queryresult){
      // 	echo "successssss";
      // }