<?php
require_once "dbconnection.php";

$sql = "SELECT NULL AS val1,
        NULL AS val2,
        'Available' AS val3,
        COALESCE(NULL, NULL, 'Available') AS result_val";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COALESCE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            COALESCE() returns the first non-null value
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Value 1</th>
                <th>Value 2</th>
                <th>Value 3</th>
                <th class="bg-success">COALESCE()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo is_null($row['val1']) ? 'NULL' : $row['val1']; ?></td>
                <td><?php echo is_null($row['val2']) ? 'NULL' : $row['val2']; ?></td>
                <td><?php echo $row['val3']; ?></td>
                <td><?php echo $row['result_val']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
