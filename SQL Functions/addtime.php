<?php
require_once "dbconnection.php";

$sql = "SELECT ADDTIME('2025-02-11 08:00:00', '02:30:00') AS new_time";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADDTIME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">
            ADDTIME() adds a time interval to a datetime value
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <div class=" alert alert-success text-center fs-5">
        <h3>ADDTIME('2025-02-11 08:00:00', '02:30:00') =
        <strong><?php echo $row['new_time']; ?></strong></h3>
    </div>

</div>

</body>
</html>
