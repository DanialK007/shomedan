<?php
include_once 'adminLayout/adminHeader.php';
include_once '../connect.php';
// $hostname = "localhost";
// $database = "shomedan";
// $username = "root";
// $password = "";

// $connection = mysqli_connect($hostname, $username, $password, $database);

// if ($connection) {
//     // echo "connected successfully";
// } else {
//     die(mysqli_error($connection));
// }

$query = "SELECT * from `user`";
$result = mysqli_query($connection, $query);
$userCount = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $userCount += 1;
}

$letterQuery = "SELECT * from `newsletter`";
$letterResult = mysqli_query($connection, $letterQuery);
$letterCount = 0;

while ($letterRow = mysqli_fetch_assoc($letterResult)) {
    $letterCount += 1;
}

$tourQuery = "SELECT * from `tour`";
$tourResult = mysqli_query($connection, $tourQuery);
$tourCount = 0;

while ($tourRow = mysqli_fetch_assoc($tourResult)) {
    $tourCount += 1;
}

if (!isset($_SESSION['admin_name'])) {
    header("Location: index.php"); // Redirect to the login page
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel : Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../myStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>

<body class="bg-success-subtle">
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-md-6 p-4 fs-2 fw-bold">
                <div class="row bg-light shadow h-100 p-3 d-flex align-items-end rounded-3 border border-2 border-secondary">
                    Total Users : <?php echo $userCount ?>
                    <a href="user.php" class="btn btn-dark mt-3 fw-bold d-flex align-items-center justify-content-center">See More</a>
                </div>
            </div>
            <div class="col-md-6 p-4 fs-2  fw-bold">
                <div class=" row bg-light shadow h-100 p-3 d-flex align-items-end rounded-3 border border-2 border-secondary">
                    Newsletters : <?php echo $letterCount ?>
                    <a href="newsletter.php" class="btn btn-dark mt-3 fw-bold d-flex align-items-center justify-content-center">See More</a>
                </div>
            </div>
            <div class="col-md-6 p-4 fs-2  fw-bold">
                <div class=" row bg-light shadow h-100 p-3 d-flex align-items-end rounded-3 border border-2 border-secondary">
                    Tours : <?php echo $tourCount ?>
                    <a href="tour.php" class="btn btn-dark mt-3 fw-bold d-flex align-items-center justify-content-center">See More</a>
                </div>
            </div>
        </div>

    </div>
</body>

</html>