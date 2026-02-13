<?php
require_once "dbconnection.php";

$sql = "SELECT GREATEST(10, 25, 7) AS greatest_val";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GREATEST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <span class="fw-semibold">
            GREATEST() returns the largest value among the given numbers
        </span>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Value A</th>
                <th>Value B</th>
                <th>Value C</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>10</td>
                <td>25</td>
                <td>7</td>
            </tr>
        </tbody>
    </table>

    <div class="text-center">
        GREATEST (10, 25, 7) = <h4><?php echo $row['greatest_val']; ?></h4>
    </div>

</div>

</body>
</html>
