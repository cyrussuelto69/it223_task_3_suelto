<?php
require_once "dbconnection.php";

$sql = "SELECT 3661 AS total_seconds,
        SEC_TO_TIME(3661) AS time_val";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SEC_TO_TIME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            SEC_TO_TIME() converts seconds into time format
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Seconds</th>
                <th class="bg-success">SEC_TO_TIME()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['total_seconds']; ?></td>
                <td><?php echo $row['time_val']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
