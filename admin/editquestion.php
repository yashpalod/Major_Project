<?php
include('isvalid.php');
include('connection.php');

if (isset($_GET['qid'])) {
    $cd = $_GET['qid'];
    $sql = "select * from quiz where qid='$cd'";
    $res = mysqli_query($db_conn, $sql);
    $row = mysqli_fetch_assoc($res);
}

// if (isset($_POST['submit'])) {
//     $sid = $_POST['sname'];
//     $question_text = $_POST['question_text'];
//     $correct_choice = $_POST['correct_choice'];

//     $choice1 = $_POST['choice1'];
//     $choice2 = $_POST['choice2'];
//     $choice3 = $_POST['choice3'];
//     $choice4 = $_POST['choice4'];


//     $sql = "insert into quiz values('','$sid','$question_text','$choice1','$choice2','$choice3','$choice4','$correct_choice')";
//     $res = mysqli_query($db_conn, $sql);
//     if (mysqli_affected_rows($db_conn)) {
//         header("Location:demo.php");
//     }
// }

?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Question</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include('sidebar.php');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include('menu.php');
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <div class="login-form bg-light mt-p-4">
                                <form action="editquestions.php" method="POST" class="row-g-3">
                                    <div class="text-center">
                                        <h4>Edit Questions</h4>
                                    </div>
                                    <hr>
                                    <div class="col-12">
                                        <input type="hidden" value="<?php echo $row['qid'];  ?>" name="qid" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label>Question</label>
                                        <textarea name="question_text" class="form-control" cols="10" rows="5"><?php echo $row['ques'];  ?></textarea>
                                    </div><br>
                                    <div class="col-12">
                                        <label>Option1</label>
                                        <textarea name="choice1" class="form-control" cols="10" rows="2"><?php echo $row['opt1'];  ?></textarea>
                                    </div><br>
                                    <div class="col-12">
                                        <label>Option2</label>
                                        <textarea name="choice2" class="form-control" cols="10" rows="2"><?php echo $row['opt2'];  ?></textarea>
                                    </div><br>
                                    <div class="col-12">
                                        <label>Option3</label>
                                        <textarea name="choice3" class="form-control" cols="10" rows="2"><?php echo $row['opt3'];  ?></textarea>
                                    </div><br>
                                    <div class="col-12">
                                        <label>Option4</label>
                                        <textarea name="choice4" class="form-control" cols="10" rows="2"><?php echo $row['opt4'];  ?></textarea>
                                    </div><br>
                                    <div class="col-12">
                                        <label>Correct Option</label>
                                        <input type="text" name="correct_choice" class="form-control" value="<?php echo $row['corr'];  ?>">
                                    </div><br>
                                    <div class="col-12">
                                        <label>Select Category</label>
                                        <select name="sname" class="form-control">
                                            <?php
                                            $sql = "select * from subject";
                                            $res = mysqli_query($db_conn, $sql);
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                echo "<option value=" . $row['sid'] . ">" . $row['subname'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div><br>

                                    <div class="col-12">
                                        <input type="submit" class="btn btn-primary mx-auto w-100" name="submit" value="Add">
                                    </div><br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include('footer.php');
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


</body>

</html>