<?php
include('isvalid.php');
include('connection.php');

if (isset($_POST['submit'])) {
    $question_number = $_POST['question_number'];
    $sid = $_POST['sid'];
    $question_text = $_POST['question_text'];
    $correct_choice = $_POST['correct_choice'];
    // Choice Array
    $choice = array();
    $choice[1] = $_POST['choice1'];
    $choice[2] = $_POST['choice2'];
    $choice[3] = $_POST['choice3'];
    $choice[4] = $_POST['choice4'];

    // echo $question_number . "</br>";
    // echo $sid . "</br>";
    // echo $question_text . "</br>";
    // echo $correct_choice . "</br>";
    // echo $choice[1] . "</br>";
    // echo $choice[2] . "</br>";
    // echo $choice[3] . "</br>";
    // echo $choice[4] . "</br></br>";

    $query = "INSERT INTO questions2 VALUES ('$question_number','$sid','$question_text') ";

    $result = mysqli_query($db_conn, $query);

    if ($result) {
        foreach ($choice as $option => $value) {
            if ($value != "") {
                if ($correct_choice == $option) {
                    $is_correct = 1;
                } else {
                    $is_correct = 0;
                }


                $query1 = "INSERT INTO answers2 (";
                $query1 .= "ques_id,is_correct,coption)";
                $query1 .= " VALUES (";
                $query1 .=  "'{$question_number}','{$is_correct}','{$value}' ";
                $query1 .= ")";

                $insert_row = mysqli_query($db_conn, $query1);

                if ($insert_row) {
                    continue;
                } else {
                    die("2nd Query for Choices could not be executed" . $query);
                }
            }
        }
    }
}
