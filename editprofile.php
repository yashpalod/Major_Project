<?php
include('isvalid.php');
include('db/connection.php');

if (isset($_GET['id'])) {
    $uid = $_GET['id'];
    $sql = "select * from users where id='$uid'";
    $res = mysqli_query($db_conn, $sql);
    $row = mysqli_fetch_assoc($res);
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Profile</title>
</head>

<body>
    <?php
    include('menu.php');
    ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-p-4">
                    <form action="editprofile_sub.php" method="POST" class="row-g-3">
                        <div class="text-center">
                            <h4>Edit Profile</h4>
                        </div>
                        <hr>
                        <div class="col-12">
                            <input type="hidden" value="<?php echo $row['id']  ?>" name="uid" class="form-control">
                        </div>
                        <div class="col-12">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>">
                        </div><br>
                        <div class="col-12">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>">
                        </div><br>
                        <div class="col-12">
                            <label>Mobile</label>
                            <input type="text" name="mobile" class="form-control" value="<?php echo $row['mobile'] ?>">
                        </div><br>
                        <div class="col-12">
                            <label>Education</label>
                            <input type="text" name="edu" class="form-control" value="<?php echo $row['education'] ?>">
                        </div><br>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" value="<?php echo $row['password'] ?>">
                        </div><br>
                        <div class="col-12">
                            <input type="submit" class="btn btn-primary mx-auto w-100" name="submit" value="Save">
                        </div>
                    </form>
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