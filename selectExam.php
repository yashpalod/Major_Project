<?php
include('isvalid.php');
include('db/connection.php');

if (isset($_GET['sid'])) {
    $sid = $_GET['sid'];
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <?php
    include('menu.php');
    ?>
    <div class="container mt-4">
        <div class="row">
            <?php
            $sql = "select * from subject where sid=$sid";
            $res = mysqli_query($db_conn, $sql);
            $row = mysqli_fetch_assoc($res);
            $i = 1;
            while ($i <= 3) {
                echo "<div class='col-md-12 mt-4'>";
                echo "<div class='card' style='width: 30rem;'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'> Test " . $i . "</h5>";
                echo "<a href='quiz2.php?sid=" . $row['sid'] . "&testid=" . $i . "' class='btn btn-sm btn-primary'>Start<i class='fas fa-pen fa-2x text-gray-600'></i></a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                $i++;
            }
            ?>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>

</body>

</html>