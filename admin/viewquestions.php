<?php
include('isvalid.php');
include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Subjects</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All Questions</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Subject Name</th>
                                            <th>Question</th>
                                            <th>Option1</th>
                                            <th>Option2</th>
                                            <th>Option3</th>
                                            <th>Option4</th>
                                            <th>Correct Option</th>
                                            <th colspan="2">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "select * from quiz";
                                        $res = mysqli_query($db_conn, $sql);
                                        $i = 1;
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            echo "<tr>";
                                            echo "<td>$i</td>";
                                            echo "<td>" . $row['sid'] . "</td>";
                                            echo "<td>" . $row['ques'] . "</td>";
                                            echo "<td>" . $row['opt1'] . "</td>";
                                            echo "<td>" . $row['opt2'] . "</td>";
                                            echo "<td>" . $row['opt3'] . "</td>";
                                            echo "<td>" . $row['opt4'] . "</td>";
                                            echo "<td>" . $row['corr'] . "</td>";
                                            echo "<td><a href='editquestion.php?qid=" . $row['qid'] . "' >  Edit</a></td>";
                                            echo "<td><a href='deletequestion.php?qid=" . $row['qid'] . "' >  Delete</a></td>";
                                            echo "</tr>";
                                            $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>


</body>

</html>