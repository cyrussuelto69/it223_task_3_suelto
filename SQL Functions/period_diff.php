<?php
require_once "dbconnection.php";

$sql = "SELECT 202505 AS period1, 202502 AS period2,
        PERIOD_DIFF(202505, 202502) AS month_diff";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PERIOD_DIFF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            PERIOD_DIFF() returns the number of months between two periods
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Period 1</th>
                <th>Period 2</th>
                <th class="bg-success">PERIOD_DIFF()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['period1']; ?></td>
                <td><?php echo $row['period2']; ?></td>
                <td><?php echo $row['month_diff']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
