<?php
require_once "dbconnection.php";

$sql = "SELECT '11-02-2025' AS original_string,
        STR_TO_DATE('11-02-2025', '%d-%m-%Y') AS converted_date";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>STR_TO_DATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            STR_TO_DATE() converts a string into a date
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Original String</th>
                <th class="bg-success">STR_TO_DATE()</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['original_string']; ?></td>
                <td><?php echo $row['converted_date']; ?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>
