<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/bootstrap.bundle.min.js"></script>
<?php
session_start();
session_unset();
session_destroy();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
echo '<div class="d-flex flex-column justify-content-center align-items-center bg-success" style="height: 100vh;z-index:999; position:absolute; width:100%;height:135vh; padding-bottom:40vh;">
                <h3>Logging Out</h3>
                <div class="spinner-border p-4 mt-3 mb-5" role="status">
                <span class="sr-only p-3 mb-5"></span>
                </div>
                </div>';

                echo '<script>
                // Redirect to the main page after 3 seconds
                setTimeout(function() {
                window.location.href = "adminLayout/logOutSuccess.php";
                }, 1000); // 1000 milliseconds (1 second) delay before redirection
                </script>';
// header("location:index.php");
?>