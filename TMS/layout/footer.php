<?php
include_once "connect.php"; // Make sure this file contains your database connection details

if (isset($_POST['letterEmail'])) { // Check for the existence of 'letterEmail' instead of 'subscribe'
    $letterEmail = $_POST['letterEmail'];
    // Using prepared statement to avoid SQL injection
    $stmt = $connection->prepare("INSERT INTO newsletter (newsletter_email) VALUES (?)");
    $stmt->bind_param("s", $letterEmail); // "s" indicates a string type for the parameter
    $stmt->execute();
    $stmt->close();
}
?>

<body>
    <footer class="container-fluid p-0 text-light">
        <div class="container pt-4 px-5">
            <div class="row h-100">
                <div class="col-xl-3 col-sm-6 p-4">
                    <h3 class="text-success">This is Shomedan</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisici voluptatum quo repellat minus ex even.</p>
                    <h3 class="mt-4 text-success">Get Social</h3>
                    <a class="footerLink" href=""><i class="bi bi-facebook fs-3 m-2"></i></a>
                    <a class="footerLink" href=""><i class="bi bi-instagram fs-3 m-2"></i></a>
                    <a class="footerLink" href=""><i class="bi bi-linkedin fs-3 m-2"></i></a>
                    <a class="footerLink" href=""><i class="bi bi-twitter fs-3 m-2"></i></a>
                </div>
                <div class="col-xl-3 col-sm-6 p-4">
                    <h3 class="text-success">Contact</h3>
                    <li>Address : 24th, Between 53th & 54th street, Mandalay</li>
                    <li>Phone 1 : +959 245 2424</li>
                    <li>Phone 2 : +959 245 6367</li>
                    <li>Email : shomedan@gmail.com</li>
                    <a href="" class="text-success text-decoration-none">Find us on the map >></a>
                </div>
                <div class="col-xl-3 col-sm-6 p-4">
                    <h3 class="text-success">Link</h3>
                    <li><a href="" class="footerLink">About us</a></li>
                    <li><a href="" class="footerLink">Events</a></li>
                    <li><a href="" class="footerLink">Booking</a></li>
                    <li><a href="" class="footerLink">Contact us</a></li>
                </div>
                <div class="col-xl-3 col-sm-6 p-4">
                    <h3 class="text-success">Newsletter</h3>
                    <p>Sign up for our newsletter and get updated about our latest promotions</p>
                    <!-- Add a form around the input field -->
                    <form action="" method="post" class="">
                        <input type="email" name="letterEmail" class="bg-dark text-white border-0 rounded rounded-2 p-2 my-2" placeholder="Enter your email" required>
                        <input type="submit" value="Subscribe" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
        <div class="p-4 mt-3 bg-success text-center">© 2024 - All Right Reserverd by Shomedan</div>
    </footer>
</body>