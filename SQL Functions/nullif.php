<?php
require_once "dbconnection.php";

$sql = "SELECT 10 AS val1,
        10 AS val2,
        NULLIF(10, 10) AS result1,
        NULLIF(10, 5) AS result2";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NULLIF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            NULLIF() returns NULL when two values are equal
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Value 1</th>
                <th>Value 2</th>
                <th class="bg-success">NULLIF()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>10</td>
                <td>10</td>
                <td><?php echo is_null($row['result1']) ? 'NULL' : $row['result1']; ?></td>
            </tr>
            <tr>
                <td>10</td>
                <td>5</td>
                <td><?php echo $row['result2']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
