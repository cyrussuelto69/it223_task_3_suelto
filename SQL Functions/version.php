<?php
require_once "dbconnection.php";

$sql = "SELECT VERSION() AS db_version";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VERSION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            VERSION() returns the database server version
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <div class="alert alert-success text-center fs-4">
        VERSION() = <strong><?php echo $row['db_version']; ?></strong>
    </div>

</div>

</body>
</html>
