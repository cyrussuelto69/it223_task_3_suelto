<?php
require_once "dbconnection.php";

$sql = "SELECT 2025 AS year_val, 42 AS day_number,
        MAKEDATE(2025, 42) AS result_date";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MAKEDATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            MAKEDATE() creates a date from a year and day number
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Year</th>
                <th>Day of Year</th>
                <th class="bg-success">MAKEDATE()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['year_val']; ?></td>
                <td><?php echo $row['day_number']; ?></td>
                <td><?php echo $row['result_date']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
