<?php
include_once 'layout/header.php';
include_once 'connect.php';


if(isset($_SESSION['username'])) {
   
    $username=$_SESSION['username'];
    
    $query="SELECT *
            FROM `user` 
            WHERE '$username'=username";
    $result=mysqli_query($connection,$query);
    
    $numRows=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    $user_id=$row['user_id'];
    echo $user_id;

    $tourQuery = "SELECT * from `tour`";
    $tourResult = mysqli_query($connection, $tourQuery);

    if(isset($_POST['book'])){
    
    $tourID=$_POST['tourID'];

    $status=0;
    $start_date=$_POST['start_date'];
    $end_date  =$_POST['end_date'];
    $package_type =$_POST['package_type'];
    $tour_plan =$_POST['tour_plan'];

    echo $tourID;

    $booking_sql=  "INSERT INTO `booking` (user_id,tourID,booking_date,start_date, end_date, package_type, tour_plan, status)
                    VALUES ('$user_id', '$tourID', NOW(), '$start_date', '$end_date', '$package_type', '$tour_plan', '$status')";
    $result = mysqli_query($connection, $booking_sql);
    if ($result) {
        echo '<div class="d-flex flex-column justify-content-center align-items-center bg-success" style="height: 100vh;z-index:999; position:absolute; width:100%;height:135vh; padding-bottom:40vh;">
        <h3>Booking Successful</h3>
        <div class="spinner-border p-4 mt-3 mb-5" role="status">
        <span class="sr-only p-3 mb-5"></span>
        </div>
        </div>';

        echo '<script>
        // Redirect to the main page after 3 seconds
        setTimeout(function() {
        window.location.href = "index.php";
        }, 1000); // 1000 milliseconds (1 second) delay before redirection
        </script>';
    // $bookingInsert = $connection -> prepare($booking_sql);
    //     if($bookingInsert){

    //         $bookingInsert->bind_param("iissssi",$user_id, $tourID, $start_date, $end_date, $package_type, $tour_plan,$status);
    //         $bookingInsert->execute();
    //         $bookingInsert->close();
        }else {
            die(mysqli_error($connection));
        }
    }
}
else{
   header("location:login.php"); 
}

//close the database connection at the end


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

<style>
    main{
        background-image: url(img/backMountain.jpg);
        background-size: cover;
        background-position: top;
        min-height: 100vh;
        display: flex;
        align-items: center;
    }

    .myForm {
            background-color: rgba(256, 256, 256, 0.5);
            backdrop-filter: blur(10px);
        }

    
</style>

<body>
    <main>
        <div class="mt-5 pt-4 container-fluid">
            <div class="row p-4">
                <div class="col-lg col-md col-sm"></div>
                <div class="col-lg-6 col-md-8 col-sm-8 myForm rounded rounded-3 pt-4">
                    <h1 class="text-center">Booking</h1>
                    <form action="" method="post" class="row px-3">
                        <div class="col-md-6 py-3">
                            <label for="form-label">First Name</label>
                            <input required type="text" class="form-control" name="firstName" value="<?php if(isset ($row['firstName'])) { echo $row['firstName']; } ?>">
                        </div>
                        <div class="col-md-6 py-3">
                            <label for="form-label">Last Name</label>
                            <input required type="text" class="form-control" name="lastName" value="<?php if(isset($row['lastName'])) { echo $row['lastName']; } ?>">
                        </div>

                        <div class="col-md-6 py-3">
                            <label for="form-label">Email</label>
                            <input require type="email"  class="form-control" name="email" value="<?php if(isset($row['email'])) { echo $row['email'];} ?>">
                        </div>
                        <div class="col-md-6 py-3">
                            <label for="form-label">Phone Number</label>
                            <input require type="tel" class="form-control" name="phone"  value="<?php if(isset($row['phone'])) { echo $row['phone'];} ?>">
                        </div>

                        <?php
                        if (isset($_GET['tourID'])) 
                            $tourID = urldecode($_GET['tourID']);
                        ?>
                        <div class="col-12 py-3">
                            <label for="form-label">Tour Name</label>
                            <select require name="tourID" id="" class="form-control">
                                
                                <?php
                                    while ($tourRow = mysqli_fetch_assoc($tourResult)) {
                                        if ($tourRow['tourID'] === $tourID) {
                                                                                       
                                ?>
                                <option name="tourName" value="<?php echo $tourRow['tourID'];?>" selected><?php echo $tourRow['tourName']  ;?></option>
                            <?php            
                            }
                            else
                            
                                ?>
                                    <option name="tourName" value="<?php echo $tourRow['tourID'];?>"><?php echo $tourRow['tourName']  ;?></option>
                                        
                                <?php
                                }
                                ?>
                            </select>
                            
                        </div>
                        
                        <div class="col-md-6 py-3">
                            <label for="form-label">Start Date</label>
                            <input require type="date"  class="form-control" name="start_date">
                        </div>
                        <div class="col-md-6 py-3">
                            <label for="form-label">End Date</label>
                            <input require type="date"  class="form-control" name="end_date">
                        </div>
                        <div class="col-md-6 py-3">
                            <label for="form-label">Package Type</label>
                            <select required name="package_type" id="" class="form-control">
                                <option hidden value="">Please Select</option>
                                <option arial-hidden value="solo">Solo</option>
                                <option arial-hidden value="family">Family</option>
                                <option arial-hidden value="couple">Couple</option>
                            </select>
                        </div>
                        <div class="col-md-6 py-3">
                            <label for="form-label">Tour Plan</label>
                            <select required name="tour_plan" id="" class="form-control">
                                <option hidden value="">Please Select</option>
                                <option arial-hidden value="Basic">Basic</option>
                                <option arial-hidden value="Special">Special</option>
                                <option arial-hidden value="VIP">VIP</option>
                            </select>
                        </div>
                        <div class="col-md-12 py-3">
                            <button class="btn btn-dark w-100" name="book">Book</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg col-md col-sm"></div>
            </div>
        </div>
    </main>
</body>
</html>