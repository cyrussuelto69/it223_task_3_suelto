<?php
require_once "dbconnection.php";

$sql = "SELECT '14:35:22' AS original_time,
        TIME_FORMAT('14:35:22', '%h:%i %p') AS formatted_time";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TIME_FORMAT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            TIME_FORMAT() changes how a time is displayed
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Original Time</th>
                <th class="bg-success">TIME_FORMAT()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['original_time']; ?></td>
                <td><?php echo $row['formatted_time']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
