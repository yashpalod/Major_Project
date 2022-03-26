<?php
include('isvalid.php');
include('db/connection.php');
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
    <div class="container mt-4">
        <div class="row">
            <?php
            $sql = "select * from subject";
            $res = mysqli_query($db_conn, $sql);
            $i = 1;
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<div class='col-md-4 mt-4'>";
                echo "<div class='card' style='width: 18rem;'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row['subname'] . "</h5>";
                echo "<a href='quiz1.php?sid=" . $row['sid'] . "' class='btn btn-sm btn-primary'>Enter</a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
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