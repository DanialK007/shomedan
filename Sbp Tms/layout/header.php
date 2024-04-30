<?php
session_start();
?>
<nav class="navbar navbar-expand-lg bg-dark py-2 fixed-top border-bottom border-secondary-subtle fade-in-left">
    <div class="container pt-1">
        <a class="navbar-brand fs-5 text-success d-flex align-items-center" href="index.php">
            <img src="img/logo2.png" alt="" class="navLogo mx-1"> SHOMEDAN
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end bg-success-subtle" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pe-4 me-2">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tourPacks.php">Tour</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tourPacks.php">Packages</a>
                    </li>
                    <li class="nav-item">
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <button type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#book">
                            Book
                            </button>                           
                        <?php } else { ?>
                            <a class="nav-link" href="booking.php">Book</a>                            
                        <?php
                        } ?>
                    </li>
                </ul>
                <a href="logIn.php" class="px-2 d-flex align-items-center ms-auto"><i class="bi bi-search fs-4 text-success"></i></a>
                <a href="logIn.php" class="px-2 d-flex align-items-center"><i class="bi bi-bell-fill fs-4 text-success"></i></a>
                <!-- User Profile Dropdown -->
                <div class="dropdown d-flex align-items-center px-2">
                    <a class="text-success text-decoration-none dropdown-toggle" href="#" role="button" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-circle fs-4 text-success"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="userProfileDropdown">
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <a class="dropdown-item" href="logIn.php">Sign In</a>
                            <a class="dropdown-item" href="register.php">Sign Up</a>
                        <?php } else { ?>
                            <a class="dropdown-item" href="userProfile.php">My Profile</a>
                            <a class="dropdown-item" href="logOut.php">Sign Out</a>
                            <a class="dropdown-item" href="#">History</a>
                        <?php
                        } ?>
                        <!-- Add more user-related actions as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="book" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="display-6 py-4">Please log in to continue.</div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-success" href="logIn.php">Log In</a>
            </div>
        </div>
    </div>
</div> 