<?php
include('isvalid.php');
include('db/connection.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body>
    <?php
    include('menu.php');

    $uname = $_SESSION['USNM'];
    $sql = "select * from users where username ='$uname' ";
    $res = mysqli_query($db_conn, $sql);
    $row = mysqli_fetch_assoc($res);
    ?>

    <div class="container">
        <div class="row">

            <div class="col-md-6 m-auto d-block">
                <div class="card text-center mt-4">
                    <div class="card-header" style="background-color: red;">Profile</div>
                    <div class="card-body">
                        <p class="card-text">
                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <?php echo "<td>" . $row['name'] . "</td>"; ?>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <?php echo "<td>" . $row['username'] . "</td>"; ?>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <?php echo "<td>" . $row['email'] . "</td>"; ?>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <?php echo "<td>" . $row['mobile'] . "</td>"; ?>
                            </tr>
                            <tr>
                                <th>Education</th>
                                <?php echo "<td>" . $row['education'] . "</td>"; ?>
                            </tr>
                        </table>
                        </p>

                        <?php echo "<a href='editprofile.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>"; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>