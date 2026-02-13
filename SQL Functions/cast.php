<?php
require_once "dbconnection.php";

$sql = "SELECT '2025-02-11' AS original_value,
        CAST('2025-02-11' AS DATE) AS cast_result";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CAST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            CAST() converts a value into a different datatype
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Original Value</th>
                <th class="bg-success">CAST() to DATE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['original_value']; ?></td>
                <td><?php echo $row['cast_result']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
