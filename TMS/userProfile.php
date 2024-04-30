<?php
include_once "layout/header.php";
include_once "connect.php";

$username = $_SESSION['username'];
$query = "SELECT * FROM `user` WHERE username = '$username'";


// $profileQuery = "SELECT * from `user`";
$profileResult = mysqli_query($connection, $query);
$profile = mysqli_fetch_assoc($profileResult);
$user_id=$profile['user_id'];

$bookingQuery="SELECT * FROM `booking`
                WHERE booking.user_id = $user_id";

$result= $connection->query($bookingQuery);


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
                    <?php
                    if($result){
                        while ($row=$result->fetch_assoc()){
                            // Create two DateTime objects
                            $date1 = new DateTime($row['start_date']);
                            $date2 = new DateTime($row['end_date']);

                            // Calculate the difference between two dates
                            $interval = $date1->diff($date2);

                            // Access the difference in days, months, and years
                            $daysDifference = $interval->format('%a days');
                            $monthsDifference = $interval->format('%m months');
                            $yearsDifference = $interval->format('%y years');

                    ?>
                    <h4><?php echo $row['booking_date'];?></h4>
                    <p><?php echo "Package Type : " . $row['package_type'];?></p>
                    <p><?php echo "Tour Plan : " . $row['tour_plan'];?></p>
                    <p>You've booked a trip to <?php echo $row['tourName']; ?> for <?php echo $yearsDifference, $monthsDifference, $daysDifference;?></p>
                    <hr>
                    <?php
                        }}
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>