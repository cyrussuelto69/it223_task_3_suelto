<?php
require_once "dbconnection.php";

$sql = "SELECT '14:35:22' AS time1,
        '12:20:00' AS time2,
        TIMEDIFF('14:35:22', '12:20:00') AS diff_val";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TIMEDIFF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            TIMEDIFF() returns the difference between two times
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Time 1</th>
                <th>Time 2</th>
                <th class="bg-success">TIMEDIFF()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['time1']; ?></td>
                <td><?php echo $row['time2']; ?></td>
                <td><?php echo $row['diff_val']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
