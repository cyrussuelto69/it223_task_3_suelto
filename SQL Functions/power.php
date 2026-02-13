<?php
require_once "dbconnection.php";

$sql = "SELECT *, POWER(age, 2) AS power_age FROM peopletbl";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POWER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">
            Age raise to the powerer of 2 by the use of POWER()
        </h3>
        <a href="index.php" class="btn btn-light">Back</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Birth Date</th>
                <th>City</th>
                <th class="bg-success">power (age, 2)</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['first_name']}</td>";
                echo "<td>{$row['last_name']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['age']}</td>";
                echo "<td>{$row['gender']}</td>";
                echo "<td>{$row['birth_date']}</td>";
                echo "<td>{$row['city']}</td>";
                echo "<td>{$row['power_age']}</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No records found</td></tr>";
        }
        ?>
        </tbody>
    </table>

</div>

</body>
</html>
