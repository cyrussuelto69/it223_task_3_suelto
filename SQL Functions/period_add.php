<?php
require_once "dbconnection.php";

$sql = "SELECT 202502 AS period_val, 3 AS months_to_add,
        PERIOD_ADD(202502, 3) AS new_period";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PERIOD_ADD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            PERIOD_ADD() adds months to a period (YYYYMM)
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Period</th>
                <th>Months Added</th>
                <th class="bg-success">PERIOD_ADD()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['period_val']; ?></td>
                <td><?php echo $row['months_to_add']; ?></td>
                <td><?php echo $row['new_period']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
