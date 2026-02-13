<?php
require_once "dbconnection.php";

$sql = "SELECT '2025-02-11' AS original_date,
        TO_DAYS('2025-02-11') AS days_number";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO_DAYS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            TO_DAYS() converts a date into the number of days
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Original Date</th>
                <th class="bg-success">TO_DAYS()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['original_date']; ?></td>
                <td><?php echo $row['days_number']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
