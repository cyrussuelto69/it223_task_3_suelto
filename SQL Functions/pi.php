<?php
require_once "dbconnection.php";

$sql = "SELECT PI() AS pi_val";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            PI() returns the value of the mathematical constant π
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <div class="text-center fs-4">
        PI() = <strong><?php echo $row['pi_val']; ?></strong>
    </div>

</div>

</body>
</html>
