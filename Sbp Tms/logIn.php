<?php

    include_once 'layout/header.php';
   
    if (isset($_GET['login'])) { 
        if (isset($_GET['username']) && !empty($_GET['username']) && isset($_GET['password']) && !empty($_GET['password'])) {
            $username = $_GET['username'];
            $password = $_GET['password'];

            // Connect to your database (replace with your database connection code)
            include_once 'connect.php';

            // Check if the username and password exist in the database (replace with your actual query)
            $query = "SELECT * FROM `user` WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($connection, $query);
            $row=mysqli_num_rows($result);
            $_SESSION['user_id']=$row['user_id'];

            if ($row>0) {
               $_SESSION['username']=$username;
               
               
               
                
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
                $error = "Invalid username or password";
            }
        } else {
            if(isset($_GET['username']) && !empty($_GET['username'])){
                $username=$_GET['username'];
            }
            else {
                $username_error="Please Fill Your Username";
            }
            
            if(isset($_GET['password']) && !empty($_GET['password'])){
                $password=$_GET['password'];
            }
            else {
                $password_error="Please Fill Your Password";
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
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="myStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        main{
            background-image: url(img/backMountain.jpg);
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
                    <h1 class="text-center">Log In</h1>
                    <form action="" method="get">
                        <!-- there is two method 'get' and 'post' in form -->
                        <div class="py-3">
                            <label for="form-label">Username</label>
                            <input type="text" name="username" class="form-control" value=<?php if(isset($username)) echo $username;?>>
                            <span class="text-danger">
                                <?php 
                                    // isset() function is used to check the variable whether it is already exist or not
                                    if(isset($username_error)){
                                        echo $username_error;
                                    }
                                ?>
                            </span>
                        </div>
                        <div class="py-3">
                            <label for="form-label">Password</label>
                            <input type="password" name="password" class="form-control" value=<?php if(isset($password)) echo $password;?>>
                            <span class="text-danger">
                                <?php 
                                    if(isset($password_error)){
                                        echo $password_error;
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
                        <button class="btn btn-success w-100 my-3 p-2" name="login">Log In</button>
                        <p class="my-2">Don't have an account? <a href="register.php" class="text-decoration-none">Create an account</a></p>
                        <p class="my-0">Are you an admin? <a href="admin/adminLogIn.php" class="text-decoration-none">Enter admin pannel</a></p>
                    </form>
                </div>
                <div class="col-lg-4 col-md-2 col-sm-2"></div>
            </div>
        </div>
    </main>
</body>
</html>