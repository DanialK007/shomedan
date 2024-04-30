<?php
include_once "adminLayout/adminHeader.php";
include_once '../connect.php';
$editId = $_GET['editId'];
$query = "SELECT * FROM tour WHERE tourID=$editId";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$tourName = $row['tourName'];
$tourType = $row['tourType'];
$location = $row['location'];
$detail = $row['detail'];
$bestMonths = $row['bestMonths'];
$rating = $row['rating'];
$tourPhoto = $row['tourPhoto'];

if (isset($_POST['confirm'])) {
    $upTourName = $_POST['tourName'];
    $upTourType = $_POST['tourType'];
    $upLocation = $_POST['location'];
    $upDetail = $_POST['detail'];
    $upBestMonths = $_POST['bestMonths'];
    $upRating = $_POST['rating'];

    // Check if a new image file is uploaded
    if ($_FILES['newTourPhoto']['error'] == 0) {
        $upTourPhoto = '../uploadPhoto/' . $_FILES['newTourPhoto']['name'];
        move_uploaded_file($_FILES['newTourPhoto']['tmp_name'], $upTourPhoto);
    } else {
        // Use the existing image URL if no new image is uploaded
        $upTourPhoto = $row['tourPhoto'];
    }

    $sql = "UPDATE `tour` SET tourName='$upTourName',tourType='$upTourType',location='$upLocation',detail='$upDetail',bestMonths='$upBestMonths',rating='$upRating', tourPhoto='$upTourPhoto' WHERE tourID='$editId'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        // Display Spinner and Redirect
        echo '<div class="d-flex flex-column justify-content-center align-items-center bg-success" style="height: 100vh;z-index:999; position:absolute; width:100%;height:135vh; padding-bottom:40vh;">
                <h3>Updating Tour</h3>
                <div class="spinner-border p-4 mt-3 mb-5" role="status">
                <span class="sr-only p-3 mb-5"></span>
                </div>
                </div>';

        echo '<script>
                // Redirect to the main page after 3 seconds
                setTimeout(function() {
                window.location.href = "tour.php";
                }, 1000); // 1000 milliseconds (1 second) delay before redirection
                </script>';
    } else {
        die(mysqli_error($connection));
    }
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

<body>
    <main class="bg-success-subtle">
        <div class="container">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="p-5">
                    <label for="form-label" class="py-3">Tour Name</label>
                    <input type="text" name="tourName" class="form-control" value="<?php echo $tourName; ?>">

                    <label for="form-label" class="py-3">Tour Type</label>
                    <input type="text" name="tourType" class="form-control" value="<?php echo $tourType; ?>">

                    <label for="form-label" class="py-3">Location</label>
                    <input type="text" name="location" class="form-control" value="<?php echo $location; ?>">

                    <label for="form-label" class="py-3">Detail</label>
                    <input type="text" name="detail" class="form-control" value="<?php echo $detail; ?>">

                    <label for="form-label" class="py-3">Best Months to Visit</label>
                    <input type="text" name="bestMonths" class="form-control" value="<?php echo $bestMonths; ?>">

                    <label for="form-label" class="py-3">Rating</label>
                    <input type="text" name="rating" class="form-control" value="<?php echo $rating; ?>">

                    <label for="form-label" class="py-3">Tour Photo</label>
                    <input type="file" name="newTourPhoto" class="form-control">
                    <button class="btn btn-danger me-auto mt-3" name="confirm">Confirm</button>
            </form>
        </div>
    </main>

</body>

</html>