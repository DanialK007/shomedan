<?php 
include_once "TMS/connect.php"; // Make sure this file contains your database connection details



// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['letterEmail']) && !empty($_POST['letterEmail'])) {
    $email = $_POST['letterEmail'];

    // Validate and sanitize email if necessary

    $sql = "INSERT INTO `newsletter` (user_email) VALUES ('$email')";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        // Set a variable to indicate success
        $success = true;
    }
}  



           
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="TMS/css/bootstrap.min.css">
    <script src="TMS/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    
<input type="submit" value="Subscribe" class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        
<?php
    // Display modal based on the success variable
    if (isset($success) && $success) {
    ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <!-- Modal content goes here -->
        </div>
    <?php
    }
    ?>
</body>
</body>
</html>

