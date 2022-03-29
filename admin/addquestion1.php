<?php
include('isvalid.php');
include('connection.php');

if (isset($_GET['sid'])) {
    $cd = $_GET['sid'];
    $sql = "select * from subject where sid='$cd'";
    $res = mysqli_query($db_conn, $sql);
    $row = mysqli_fetch_assoc($res);
}

$query2 = "SELECT * FROM questions2";
$questions = mysqli_query($db_conn, $query2);
$total = mysqli_num_rows($questions);
$next = $total + 1;

?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Question</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <?php
        include('sidebar.php');
        ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php
                include('menu.php');
                ?>

                <div class="container">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <div class="login-form bg-light mt-p-4">
                                <form action="addquestion1_sub.php" method="POST" class="row-g-3">
                                    <div class="text-center">
                                        <h4>Add Questions</h4>
                                    </div>
                                    <hr>
                                    <input type="text" hidden value="<?php echo $cd; ?>" name="sid" class="form-control">
                                    <div class="col-12">
                                        <input type="number" name="question_number" class="form-control" value="<?php echo $next; ?>">
                                    </div><br>
                                    <div class="col-12">
                                        <label>Question</label>
                                        <textarea name="question_text" class="form-control" cols="10" rows="5"></textarea>
                                    </div><br>
                                    <div class="col-12">
                                        <label>Option1</label>
                                        <textarea name="choice1" class="form-control" cols="10" rows="2"></textarea>
                                    </div><br>
                                    <div class="col-12">
                                        <label>Option2</label>
                                        <textarea name="choice2" class="form-control" cols="10" rows="2"></textarea>
                                    </div><br>
                                    <div class="col-12">
                                        <label>Option3</label>
                                        <textarea name="choice3" class="form-control" cols="10" rows="2"></textarea>
                                    </div><br>
                                    <div class="col-12">
                                        <label>Option4</label>
                                        <textarea name="choice4" class="form-control" cols="10" rows="2"></textarea>
                                    </div><br>
                                    <div class="col-12">
                                        <label>Correct Option Number</label>
                                        <input type="number" name="correct_choice" class="form-control" min="1" max="4">
                                    </div><br>

                                    <div class="col-12">
                                        <input type="submit" class="btn btn-primary mx-auto w-100" name="submit" value="Add">
                                    </div><br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php
            include('footer.php');
            ?>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

</body>

</html>

<!-- <html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Question</title>

<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <?php
        // include('sidebar.php');
        ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php
                // include('menu.php');
                ?>

                <div class="container">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <div class="login-form bg-light mt-p-4">
                                <form action="addquestion1_sub.php" method="POST" class="row-g-3">
                                    <input type="hidden" value="<?php //echo $row['sid'];  
                                                                ?>" name="sid" class="form-control">
                                    <div class="text-center">
                                        <h4>Add Questions</h4>
                                    </div>
                                    <hr>
                                    <div class="col-12">
                                        <label>Question</label>
                                        <textarea name="question_text" class="form-control" cols="10" rows="5"></textarea>
                                    </div><br>
                                    <div class="col-12">
                                        <label>Option1</label>
                                        <textarea name="choice1" class="form-control" cols="10" rows="2"></textarea>
                                    </div><br>
                                    <div class="col-12">
                                        <label>Option2</label>
                                        <textarea name="choice2" class="form-control" cols="10" rows="2"></textarea>
                                    </div><br>
                                    <div class="col-12">
                                        <label>Option3</label>
                                        <textarea name="choice3" class="form-control" cols="10" rows="2"></textarea>
                                    </div><br>
                                    <div class="col-12">
                                        <label>Option4</label>
                                        <textarea name="choice4" class="form-control" cols="10" rows="2"></textarea>
                                    </div><br>
                                    <div class="col-12">
                                        <label>Correct Option Number</label>
                                        <input type="number" name="correct_choice" class="form-control">
                                    </div><br>

                                    <div class="col-12">
                                        <input type="submit" class="btn btn-primary mx-auto w-100" name="submit" value="Add">
                                    </div><br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php
            // include('footer.php');
            ?>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

</body>

</html> -->