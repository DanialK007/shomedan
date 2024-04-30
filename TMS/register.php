<?php
include_once 'layout/header.php';

if (isset($_POST['signup'])) {
    // username 
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        $username_error = 'Please fill your username.';
    }

    // first name
    if (isset($_POST['firstName']) && !empty($_POST['firstName'])) {
        $firstName = $_POST['firstName'];
    } else {
        $firstName_error = 'Please fill your first name';
    }

    // last name
    if (isset($_POST['lastName']) && !empty($_POST['lastName'])) {
        $lastName = $_POST['lastName'];
    } else {
        $lastName_error = "Please fill your last name";
    }
    // email
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email_error = "Please fill your email";
    }

    // phone
    if (isset($_POST['phone']) && !empty($_POST['phone'])) {
        $phone = $_POST['phone'];
    } else {
        $phone_error = " Please fill your phone number";
    }

    // password
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $password_error = "Please enter a password";
    }

    // Confirm password
    if (isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])) {
        if ($password == $_POST['confirm_password']) {
            $finalPassword = $_POST['confirm_password'];

            // Save to database
            if ($_SERVER['REQUEST_METHOD']) {
                include_once 'connect.php';

                $username = $_POST['username'];

                // Check if the username already exists in the database
                $query = "SELECT * FROM `user` WHERE username = '$username'";
                $result = mysqli_query($connection, $query);

                if (mysqli_num_rows($result) > 0) {
                    // Username already exists
                    $username_error = 'Username already exists. Please choose a different username.';
                } else {
                    // Proceed with inserting the new user record into the database
                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $psw = $finalPassword;

                    $sql = "INSERT INTO `user` (username, firstName, lastName, email, phone, password)
                                VALUES ('$username', '$firstName', '$lastName', '$email', '$phone', '$psw')";

                    $result = mysqli_query($connection, $sql);

                    if ($result) {
                        // header ('Location: login.php');
                        // exit;

                        // Display Spinner and Redirect
                        echo '<div class="d-flex flex-column justify-content-center align-items-center bg-success" style="height: 100vh;z-index:999; position:absolute; width:100%;height:135vh; padding-bottom:40vh;">
                            <h3>Creating user profile</h3>
                            <div class="spinner-border p-4 mt-3 mb-5" role="status">
                            <span class="sr-only p-3 mb-5"></span>
                            </div>
                            </div>';

                        echo '<script>
                            // Redirect to the main page after 3 seconds
                            setTimeout(function() {
                            window.location.href = "login.php";
                            }, 1000); // 1000 milliseconds (1 second) delay before redirection
                            </script>';
                    } else {
                        die(mysqli_error($connection));
                    }
                }
            }
        } else {
            $confirm_password_error = "Password doesn't match";
        }
    } else {
        $confirm_password_error = "Please confirm your password";
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
        main {
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
</head>

<body>
    <main>
        <div class="logInPage mt-5 pt-4 container-fluid">
            <div class="row p-4">
                <div class="col-lg col-md col-sm"></div>
                <div class="col-lg-6 col-md-8 col-sm-8 pt-4 myForm rounded rounded-3">
                    <h1 class="text-center">Sign Up</h1>
                    <form action="" method="post" class="row px-3">
                        <!-- there is two method 'get' and 'post' in form -->

                        <!-- Username -->
                        <div class="col-12 py-3">
                            <label for="form-label">Username</label>
                            <input type="text" name="username" class="form-control" value="<?php if (isset($username)) echo $username; ?>">
                            <span class="text-danger">
                                <?php
                                // isset() function is used to check the variable whether it is already exist or not
                                if (isset($username_error)) {
                                    echo $username_error;
                                }
                                ?>
                            </span>
                        </div>

                        <!-- First name and Last name  -->
                        <div class="col-md-6 py-3">
                            <label for="form-label">First Name</label>
                            <input type="text" name="firstName" class="form-control" value="<?php if (isset($firstName)) echo htmlspecialchars($firstName); ?>">
                            <span class="text-danger">
                                <?php
                                // isset() function is used to check the variable whether it is already exist or not
                                if (isset($firstName_error)) {
                                    echo $firstName_error;
                                }
                                ?>
                            </span>
                        </div>
                        <div class="col-md-6 py-3">
                            <label for="form-label">Last Name</label>
                            <input type="text" name="lastName" class="form-control" value="<?php if (isset($lastName)) echo htmlspecialchars($lastName); ?>">
                            <span class="text-danger">
                                <?php
                                // isset() function is used to check the variable whether it is already exist or not
                                if (isset($lastName_error)) {
                                    echo $lastName_error;
                                }
                                ?>
                            </span>
                        </div>

                        <!-- Email and Phone  -->
                        <div class="col-md-6 py-3">
                            <label for="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="<?php if (isset($email)) echo htmlspecialchars($email); ?>">
                            <span class="text-danger">
                                <?php
                                // isset() function is used to check the variable whether it is already exist or not
                                if (isset($email_error)) {
                                    echo $email_error;
                                }
                                ?>
                            </span>
                        </div>
                        <div class="col-md-6 py-3">
                            <label for="form-label">Phone No</label>
                            <input type="text" name="phone" class="form-control" value="<?php if (isset($phone)) echo htmlspecialchars($phone); ?>">
                            <span class="text-danger">
                                <?php
                                // isset() function is used to check the variable whether it is already exist or not
                                if (isset($phone_error)) {
                                    echo $phone_error;
                                }
                                ?>
                            </span>
                        </div>

                        <!-- Password -->
                        <div class="col-md-12 py-3">
                            <label for="form-label">Password</label>
                            <input type="password" name="password" class="form-control" value="<?php if (isset($password)) echo $password; ?>">
                            <span class="text-danger">
                                <?php
                                if (isset($password_error)) {
                                    echo $password_error;
                                }
                                ?>
                            </span>
                        </div>
                        <div class="col-md-12 py-3">
                            <label for="form-label">Confirm password</label>
                            <input type="password" name="confirm_password" class="form-control" value="<?php if (isset($confirmed_psw)) echo $confirmed_psw; ?>">
                            <span class="text-danger">
                                <?php
                                if (isset($confirm_password_error)) {
                                    echo $confirm_password_error;
                                }
                                ?>
                            </span>
                        </div>

                        <span class="col-md-12 text-danger">
                            <?php
                            if (isset($error)) {
                                echo $error;
                            }
                            ?>
                        </span>

                        <!-- name = login is reused on top php -->
                        <div class="col-md-12 py-3">
                            <button class="btn btn-success w-100 my-3 p-3" name="signup">Sign Up</button>
                            <p>Already have an account? <a href="logIn.php" class="text-decoration-none">Sign In</a></p>
                        </div>
                    </form>
                </div>
                <div class="col-lg col-md col-sm"></div>
            </div>
        </div>
    </main>
</body>

</html>