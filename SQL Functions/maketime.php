<?php
require_once "dbconnection.php";

$sql = "SELECT 14 AS hour_val, 35 AS minute_val, 22 AS second_val,
        MAKETIME(14, 35, 22) AS result_time";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MAKETIME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            MAKETIME() creates a time from hour, minute, and second
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Hour</th>
                <th>Minute</th>
                <th>Second</th>
                <th class="bg-success">MAKETIME()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['hour_val']; ?></td>
                <td><?php echo $row['minute_val']; ?></td>
                <td><?php echo $row['second_val']; ?></td>
                <td><?php echo $row['result_time']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
