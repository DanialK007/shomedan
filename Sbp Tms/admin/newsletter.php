<?php
include_once 'adminLayout/adminHeader.php';
if (!isset($_SESSION['admin_name'])) {
    header("Location: error.php"); // Redirect to the login page
    exit();
}

$hostname = "localhost";
$database = "shomedan";
$username = "root";
$password = "";

$connection = mysqli_connect($hostname, $username, $password, $database);

if ($connection) {
    // echo "connected successfully";
} else {
    // die(mysqli_error($connection));
}

$letterQuery = "SELECT * from `newsletter`";
$letterResult = mysqli_query($connection, $letterQuery);
$letterCount = 0;
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel : User</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../myStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>

<body class="bg-success-subtle pt-5">
    <div class="container">
        <div class="row p-5">
            <div class="col">
                <div class="card p-3 border-3 bg-light">
                    <div class="cardheader">
                        <h1 class="text-center">Newsletters</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered fs-5">
                            <thead>
                                <tr class="border border-3 border-secondary">
                                    <th class="bg-secondary-subtle">Letter ID</th>
                                    <th class="bg-primary-subtle">Letter Email</th>
                                </tr>
                                <?php
                                while ($letterRow = mysqli_fetch_assoc($letterResult)) {
                                ?>
                                    <tr class="border border-3 border-secondary">
                                        <td class="bg-secondary-subtle"><?php echo $letterRow['newsletter_id'] ?></td>
                                        <td class="bg-primary-subtle"><?php echo $letterRow['newsletter_email'] ?></td>
                                    </tr>
                                <?php
                                    $letterCount += 1;
                                }
                                ?>
                            </thead>
                            <tbody>
                                <tr class="border border-3 border-secondary">
                                    <td class="bg-secondary-subtle fs-4 p-3">Total newsletters</td>
                                    <td class="bg-dark-subtle fs-4 p-3"><?php echo $letterCount ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>