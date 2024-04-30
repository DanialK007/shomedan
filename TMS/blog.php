<!-- blog -->
<!-- articles form Wikipedia -->
<!-- gallery grid -->
<!-- about us -->

<?php
include_once "connect.php";

$query = "SELECT * from blog";
$result = mysqli_query($connection, $query);

$blogCount = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOMEDAN : Your Best tourism Service</title>
    <link rel="icon" href="img/logo.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="myStyle.css">

    <script src="https://kit.fontawesome.com/561e8f69a8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="rateYo/jquery.rateyo.min.css">
    <script src="rateYo/jquery.min.js"></script>
    <script src="rateYo/jquery.rateyo.min.js"></script>
</head>


<body>
    <!-- header -->
    <?php
    include_once 'layout/header.php';
    ?>

    <!-- main -->
    <main>
        <!-- Popular Places -->
        <div class="whiteDefault d-flex flex-column align-items-center justify-content-center pt-5">
            <h1 class="display-3 text-center mt-5 pt-4 mb-3">Blogs</h1>
        </div>
        <section id="popularPlaces" class="container mb-5 pb-5">
            <div class="row py-4">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-md-6 col-xl-6 py-3">
                        <div class="card placesCard rounded-0 position-relative">
                            <div class="darkLayer"></div>
                            <div class="cardCaption text-decoration-none">
                                <div class="overflow-hidden">
                                    <h3 class="m-0 p-0"><?php echo $row['blogName'] ?></h3>
                                    

                                    <p><?php echo $row['blogDate'] ?></p>
                                    <p><?php echo $row['blogDetail'] ?> ...</p>
                                    <a href="booking.php?blogName=<?php echo urlencode($row['blogName']); ?>"  class="btn btn-success rounded-pill">Read More</a>
                                </div>
                            </div>
                            <img src="uploadPhoto/<?php echo $row['blogPhoto']; ?>" alt="" class="w-100 h-100 cardImg">
                        </div>
                    </div>
                <?php
                    $blogCount += 1;
                }
                ?>
            </div>
        </section>
    </main>

    <!-- footer -->
    <?php
    include_once 'layout/footer.php';
    ?>
</body>

</html>