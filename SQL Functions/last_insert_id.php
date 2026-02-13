<?php
require_once "dbconnection.php";

mysqli_query($conn, "CREATE TEMPORARY TABLE temp_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50)
)");

mysqli_query($conn, "INSERT INTO temp_users (name) VALUES ('Shane')");

$sql = "SELECT LAST_INSERT_ID() AS last_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LAST_INSERT_ID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            LAST_INSERT_ID() returns the ID of the last inserted row
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <div class="alert alert-success text-center fs-4">
        LAST_INSERT_ID() = <strong><?php echo $row['last_id']; ?></strong>
    </div>

</div>

</body>
</html>
