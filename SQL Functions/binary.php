<?php
require_once "dbconnection.php";

$sql = "SELECT 'Hello' AS value1,
        'hello' AS value2,
        BINARY 'Hello' = 'hello' AS comparison_result";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BINARY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            BINARY forces case-sensitive comparison
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Value 1</th>
                <th>Value 2</th>
                <th class="bg-success">BINARY Result</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['value1']; ?></td>
                <td><?php echo $row['value2']; ?></td>
                <td><?php echo $row['comparison_result']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
