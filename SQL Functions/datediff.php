<?php
require_once "dbconnection.php";

$sql = "SELECT '2025-02-11' AS date1, '2025-02-01' AS date2, 
        DATEDIFF('2025-02-11', '2025-02-01') AS diff_days";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DATEDIFF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            DATEDIFF() returns the number of days between two dates
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Date 1</th>
                <th>Date 2</th>
                <th class="bg-success">DATEDIFF()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['date1']; ?></td>
                <td><?php echo $row['date2']; ?></td>
                <td><?php echo $row['diff_days']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
