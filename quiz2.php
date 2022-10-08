<?php
include('isvalid.php');
include('db/connection.php');
if (isset($_GET['sid'])) {
    $sid = $_GET['sid'];
    //echo $sid;
}
// if (isset($_GET['testid'])) {
//     $testid = $_GET['testid'];
//     echo $testid;
// }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <?php
    include('menu.php');
    ?>
    <div id="timer" style="position:fixed;"></div><br>
    <div class="container">
        <div class="col-lg-8 m-auto d-block">
            <div class="card mt-4">
                <h3 class="text-center card-header">Welcome <?php echo $_SESSION['USNM']; ?></h3>
            </div><br>
            <form id="myform" action="check2.php" method="POST">

                <?php

                $sql = "SELECT * FROM questions2 WHERE sid=$sid order by RAND() LIMIT 4";
                $qry = mysqli_query($db_conn, $sql);
                $num_row = mysqli_num_rows($qry);
                if ($num_row == 0) {
                    echo "Sorry No Questions Available";
                } else {
                    $j = 1;
                    while ($row = mysqli_fetch_array($qry)) {
                ?>
                        <input type="text" value="<?php echo $row['id'] ?>" name="qid[<?php echo $row['id'] ?>]">
                        <input type="hidden" value="<?php echo $sid ?>" name="subid">
                        <div class="card">
                            <h4 class="card-header"><?php echo "Q." . $j . " " . $row['question_text']; ?></h4>
                            <?php
                            $sql1 = "SELECT * FROM answers2 WHERE ques_id= $row[id]";
                            $qry1 = mysqli_query($db_conn, $sql1);

                            while ($row1 = mysqli_fetch_array($qry1)) {

                            ?>
                                <div class="card-body">
                                    <input type="radio" name="quizcheck[<?php echo $row1['ques_id'] ?>]" value="<?php echo $row1['id'];  ?>"> <?php echo $row1['coption']; ?>
                                </div>

                        <?php
                            }
                            $j++;
                        }

                        ?>

                    <?php
                }

                    ?>
                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success m-auto d-block">
            </form>
        </div>
    </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        var total_seconds = 50;
        var c_minutes = parseInt(total_seconds / 60);
        var c_seconds = parseInt(total_seconds % 60);

        function CheckTime() {
            document.getElementById('timer').innerHTML = 'TIME LEFT:' + ' ' + c_minutes + '   ' + 'min' + ' ' + c_seconds + '  ' + 'sec';
            if (total_seconds <= 30) {
                {
                    timer.style.color = '#f90';
                }
            }
            if (total_seconds <= 10) {

                {
                    timer.style.color = 'red';
                }
            }
            if (total_seconds <= 0) {

                //alert("Sorry your time is over!!!");
                //$("#submit").click();
                //this code is used for submitting form it requires Jquery CDN 

            } else {
                total_seconds = total_seconds - 1;
                c_minutes = parseInt(total_seconds / 60);
                c_seconds = parseInt(total_seconds % 60);
                setTimeout("CheckTime()", 1000);
            }
        }
        setTimeout("CheckTime()", 1000);

        window.onbeforeunload = function() {
            return "Data will be lost if you leave the page, are you sure?";
        };
    </script>

</body>

</html>

</body>

</html>