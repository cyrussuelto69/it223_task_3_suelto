<?php
require_once "dbconnection.php";

$sql = "SELECT 13 AS decimal_val, BIN(13) AS bin_val";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            BIN() converts a decimal number into binary
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Decimal</th>
                <th class="bg-success">BIN()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['decimal_val']; ?></td>
                <td><?php echo $row['bin_val']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
