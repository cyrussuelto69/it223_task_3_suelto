<?php
require_once "dbconnection.php";

$sql = "SELECT NULL AS val1,
        'Hello' AS val2,
        ISNULL(NULL) AS result1,
        ISNULL('Hello') AS result2";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ISNULL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            ISNULL() checks whether a value is NULL
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Value</th>
                <th class="bg-success">ISNULL()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>NULL</td>
                <td><?php echo $row['result1']; ?></td>
            </tr>
            <tr>
                <td><?php echo $row['val2']; ?></td>
                <td><?php echo $row['result2']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
