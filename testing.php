<?php
include('isvalid.php');
include('db/connection.php');
if (isset($_GET['sid'])) {
    $sid = $_GET['sid'];
    echo $sid;
    // $sql = "select * from quiz where qid='$cd'";
    // $res = mysqli_query($db_conn, $sql);
    // $row = mysqli_fetch_assoc($res);
}
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

    <div class="container">
        <div class="row">
            <div class="col-lg-8 d-block">
                <div class="card mt-4">
                    <h3 class="text-center card-header">Welcome</h3>
                </div><br>
                <form action="check1.php" method="POST">

                    <?php
                    // for ($i = 1; $i < 10; $i++) {

                    $sql = "SELECT * FROM questions1 WHERE sub_id=$sid";
                    $qry = mysqli_query($db_conn, $sql);

                    while ($row = mysqli_fetch_array($qry)) {
                    ?>
                        <input type="hidden" value="<?php echo $sid ?>" name="subid">
                        <h4><?php echo $row['question']; ?></h4>
                        <?php
                        $sql1 = "SELECT * FROM answers1 WHERE ques_id= $row[qid]";
                        $qry1 = mysqli_query($db_conn, $sql1);

                        while ($row1 = mysqli_fetch_array($qry1)) {
                        ?>
                            <div>
                                <input type="radio" name="quizcheck[<?php echo $row1['ques_id'] ?>]" value="<?php echo $row1['aid'];  ?>"><?php echo $row1['answer']; ?>
                            </div>

                    <?php
                        }
                    }
                    // }
                    ?>
                    <input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">
                </form>
            </div>
            <div class="col-lg-4 d-block">
                <h2>hello</h2>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>

</body>

</html>