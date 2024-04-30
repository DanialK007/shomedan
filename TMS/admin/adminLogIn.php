<?php

    include_once 'adminLayout/adminHeader.php';
   
    if (isset($_GET['login'])) { 
        if (isset($_GET['admin_name']) && !empty($_GET['admin_name']) && isset($_GET['admin_password']) && !empty($_GET['admin_password'])) {
            $admin_name = $_GET['admin_name'];
            $admin_password = $_GET['admin_password'];

            // Connect to your database (replace with your database connection code)
            include_once '../connect.php';

            // Check if the admin_name and admin_password exist in the database (replace with your actual query)
            $query = "SELECT * FROM `admin` WHERE admin_name = '$admin_name' AND admin_password = '$admin_password'";
            $result = mysqli_query($connection, $query);
            $_SESSION['admin_name']=$admin_name;

            if (mysqli_num_rows($result) > 0) {
                
                
                // Display Spinner and Redirect
                echo '<div class="d-flex flex-column justify-content-center align-items-center bg-success" style="height: 100vh;z-index:999; position:absolute; width:100%;height:135vh; padding-bottom:40vh;">
                <h3>Logging In</h3>
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
            } else {
                $error = "Invalid admin_name or admin_password";
            }
        } else {
            if(isset($_GET['admin_name']) && !empty($_GET['admin_name'])){
                $admin_name=$_GET['admin_name'];
            }
            else {
                $admin_name_error="Please Fill Your admin_name";
            }
            
            if(isset($_GET['admin_password']) && !empty($_GET['admin_password'])){
                $admin_password=$_GET['admin_password'];
            }
            else {
                $admin_password_error="Please Fill Your admin_password";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOMEDAN : Your Best Tourism Service</title>
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../myStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        main{
            background-image: url(../img/kawThaung.jpg);
            background-size: cover;
            background-position: top;
        }

        .logInPage{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .myForm{
            background-color: rgba(256, 256, 256, 0.5);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body>
    <main>
        <div class="logInPage container-xl">
            <div class="row w-100">
                <div class="col-lg-4 col-md-2 col-sm-2"></div>
                <div class="col-lg-4 col-md-8 col-sm-8 p-4 myForm rounded rounded-3">
                    <h1 class="text-center">Admin Log In</h1>
                    <form action="" method="get">
                        <!-- there is two method 'get' and 'post' in form -->
                        <div class="py-3">
                            <label for="form-label">Enter admin name</label>
                            <input type="text" name="admin_name" class="form-control" value=<?php if(isset($admin_name)) echo $admin_name;?>>
                            <span class="text-danger">
                                <?php 
                                    // isset() function is used to check the variable whether it is already exist or not
                                    if(isset($admin_name_error)){
                                        echo $admin_name_error;
                                    }
                                ?>
                            </span>
                        </div>
                        <div class="py-3">
                            <label for="form-label">Enter admin password</label>
                            <input type="admin_password" name="admin_password" class="form-control" value=<?php if(isset($admin_password)) echo $admin_password;?>>
                            <span class="text-danger">
                                <?php 
                                    if(isset($admin_password_error)){
                                        echo $admin_password_error;
                                    }
                                ?>
                            </span>
                        </div>

                        <span class="text-danger">
                            <?php 
                                if(isset($error)){
                                echo $error;
                            }
                            ?>
                        </span>
                        
                        <!-- name = login is reused on top php -->
                        <button class="btn btn-success w-100 my-3 p-3" name="login">Log In</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-2 col-sm-2"></div>
            </div>
        </div>
    </main>
</body>
</html>