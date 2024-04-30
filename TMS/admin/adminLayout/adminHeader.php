<?php 
    session_start();
?>

<nav class="navbar navbar-expand-lg py-2 fixed-top bg-dark shadow">
    <div class="container">
        <a class="navbar-brand fs-4 text-success d-flex align-items-center" href="../index.php"  target="blank">
            <img src="../img/logo2.png" alt="" class="navLogo mx-1"> SHOMEDAN
        </a>
        <?php if (isset($_SESSION['admin_name'])) { ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end bg-success-subtle" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 pe-5 me-5 d-flex align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user.php">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tour.php">Tour</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Package</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminBooking.php">Booking</a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="userProfileDropdown">
                                <a class="dropdown-item" href="signIn.php">About Us</a>
                                <a class="dropdown-item" href="signUp.php">Slider</a>
                                <a class="dropdown-item" href="newsletter.php">Newsletters</a>
                                <a class="dropdown-item" href="signUp.php">Feedbacks</a>
                                <!-- Add more user-related actions as needed -->
                            </div>
                        </li>
                    </ul>
                    <a href="../index.php" target="_blank" class="btn btn-success mx-2 d-flex align-items-center ms-auto">See Live</a>
                    <a href="logIn.php" class="mx-2 d-flex align-items-center"><i class="bi bi-search fs-4 text-success"></i></a>
                    <a href="logIn.php" class="mx-2 d-flex align-items-center"><i class="bi bi-bell-fill fs-4 text-success"></i></a>
                    <!-- User Profile Dropdown -->
                    <div class="dropdown d-flex align-items-center px-2">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-circle fs-4 text-success"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userProfileDropdown">
                            <a class="dropdown-item" href="#">Activity</a>
                            <a class="dropdown-item" href="adminlogOut.php">Log Out</a>
                            <!-- Add more user-related actions as needed -->
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } ?>
    </div>
    </div>
</nav>