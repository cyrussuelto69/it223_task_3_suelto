<?php
require_once "dbconnection.php";

$sql = "SELECT CURRENT_USER() AS user_now";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURRENT_USER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            CURRENT_USER() returns the authenticated database user
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <div class="alert alert-success text-center fs-4">
        CURRENT_USER() = <strong><?php echo $row['user_now']; ?></strong>
    </div>

</div>

</body>
</html>
