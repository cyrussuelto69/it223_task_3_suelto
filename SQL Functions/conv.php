<?php
require_once "dbconnection.php";

$sql = "SELECT '10' AS number_val,
        10 AS from_base,
        2 AS to_base,
        CONV('10', 10, 2) AS conv_result";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CONV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            CONV() converts a number from one base to another
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Number</th>
                <th>From Base</th>
                <th>To Base</th>
                <th class="bg-success">CONV()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['number_val']; ?></td>
                <td><?php echo $row['from_base']; ?></td>
                <td><?php echo $row['to_base']; ?></td>
                <td><?php echo $row['conv_result']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
