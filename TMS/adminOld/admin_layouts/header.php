<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOMEDAN : Admin</title>
    <link rel="icon" href="img/logo.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">


</head>


<body>
    <nav class="navbar navbar-expand-lg py-2" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand fs-4 text-success d-flex align-items-center" href="index.php">
                <img src="../img/logo2.png" alt="" class="navLogo mx-1"> SHOMEDAN
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end bg-success-subtle" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pe-5 me-5">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Packages</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#">Book</a>
                        </li>
                    </ul>
                    <a href="logIn.php" class="mx-2 d-flex align-items-center ms-auto"><i class="bi bi-search fs-4 text-success"></i></a>
                    <a href="logIn.php" class="mx-2 d-flex align-items-center"><i class="bi bi-bell-fill fs-4 text-success"></i></a>
                    <!-- User Profile Dropdown -->
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="userProfileDropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-circle fs-4 text-success"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userProfileDropdown">
                            <a class="dropdown-item" href="signIn.php">Sign In</a>
                            <a class="dropdown-item" href="signUp.php">Sign Up</a>
                            <!-- Add more user-related actions as needed -->
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!-- ... (other head elements) ... -->

<!-- Add jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Add Popper.js library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Bootstrap JS -->
<script src="../js/bootstrap.bundle.min.js"></script>

<!-- ... (rest of your head content) ... -->

</body>