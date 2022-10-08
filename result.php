<?php
include('isvalid.php');
include('db/connection.php');

$sql = "SELECT * FROM result WHERE sid=1";
$qry = mysqli_query($db_conn, $sql);
$num_row = mysqli_num_rows($qry);
$row = mysqli_fetch_array($qry);

$total_percent = 100 / $row['total'];
//echo $total_percent;

$dataPoints = array(
    array("label" => "Right", "y" => $total_percent * $row['right_ans']),
    array("label" => "Wrong", "y" => $total_percent * $row['wrong_ans']),
)
?>

<!DOCTYPE HTML>
<html>

<head>
    <script>
        window.onload = function() {


            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Result"
                },
                subtitles: [{
                    text: "Subject Name"
                }],
                data: [{
                    type: "pie",
                    yValueFormatString: "#,##0.00\"%\"",
                    indexLabel: "{label} ({y})",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>
</head>

<body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <hr>
    <div class="container">
        <div class="row">
            <h2>Total Questions: <?php echo $row['total']; ?></h2>
            <h2>Correct: <?php echo $row['right_ans']; ?></h2>
            <h2>Wrong: <?php echo $row['wrong_ans']; ?></h2>
        </div>
        <?php
        if ($total_percent * $row['right_ans'] >= 40) {
            echo "You Pass";
        } else {
            echo "You Fail";
        }
        ?>
    </div>

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>