<?php
include_once "layout/header.php";
include_once "connect.php";

$username = $_SESSION['username'];
$query = "SELECT * FROM `user` WHERE username = '$username'";


// $profileQuery = "SELECT * from `user`";
$profileResult = mysqli_query($connection, $query);
$profile = mysqli_fetch_assoc($profileResult);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOMEDAN : Your Best Tourism Service</title>
    <link rel="icon" href="img/logo.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="myStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/561e8f69a8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid pt-5">
        <div class="row p-4">
            <div class="col-md-4 p-3">
                <div class="bg-secondary-subtle p-4 rounded rounded-4 border border-3 border-secondary">
                    <div class="d-flex align-items-center justify-content-center p-5">
                        <i class="bi bi-person-circle profilePicture text-dark"></i>
                    </div>
                    <hr class="m-2">
                    <div class="row p-3">
                        <div class="col">Username</div>
                        <div class="col">
                            <?php echo $profile["username"] ?>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row p-3">
                        <div class="col">Display Name</div>
                        <div class="col">
                            <?php echo $profile["firstName"] ?>
                            <?php echo $profile["lastName"] ?>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row p-3">
                        <div class="col">Phone</div>
                        <div class="col">
                            <?php echo $profile["phone"] ?>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row p-3">
                        <div class="col">Email</div>
                        <div class="col">
                            <?php echo $profile["email"] ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 p-3">
                <div class="bg-success-subtle rounded rounded-4 p-4 border border-3 border-secondary">
                    <h1>History</h1>

                    <h4>September 12, 2023</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At laborum illum eum possimus! Similique architecto officia nam ratione amet vel quia! Veniam mollitia, accusantium tempora eum eligendi veritatis? Quidem, quos.</p>
                    <hr>
                    <h4>June 9, 2023</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At laborum illum eum possimus! Similique architecto officia nam ratione amet vel quia! Veniam mollitia, accusantium tempora eum eligendi veritatis? Quidem, quos.</p>
                    <hr>
                    <h4>March 23, 2023</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At laborum illum eum possimus! Similique architecto officia nam ratione amet vel quia! Veniam mollitia, accusantium tempora eum eligendi veritatis? Quidem, quos.</p>
                    <hr>
                    <h4>December 19, 2022</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At laborum illum eum possimus! Similique architecto officia nam ratione amet vel quia! Veniam mollitia, accusantium tempora eum eligendi veritatis? Quidem, quos.</p>
                    <hr>
                    <h4>August 2, 2022</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At laborum illum eum possimus! Similique architecto officia nam ratione amet vel quia! Veniam mollitia, accusantium tempora eum eligendi veritatis? Quidem, quos.</p>
                    <hr>
                    <h4>January 14, 2022</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At laborum illum eum possimus! Similique architecto officia nam ratione amet vel quia! Veniam mollitia, accusantium tempora eum eligendi veritatis? Quidem, quos.</p>
                </div>
            </div>
        </div>
    </div>
</body>