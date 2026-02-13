<?php
require_once "dbconnection.php";

$sql = "SELECT '2025-02-11 14:35:22' AS original_dt,
        SECOND('2025-02-11 14:35:22') AS second_val";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SECOND</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            SECOND() extracts the seconds from a time or datetime
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Original Datetime</th>
                <th class="bg-success">SECOND()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['original_dt']; ?></td>
                <td><?php echo $row['second_val']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
