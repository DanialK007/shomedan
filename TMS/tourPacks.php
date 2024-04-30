<?php
include_once "connect.php";

$query = "SELECT * from tour";
$result = mysqli_query($connection, $query);

$tourCount = 0;
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
        <section id="popularPlaces" class="container mb-5 py-5">
            <h1 class="text-center mt-5 pt-4 mb-3 fw-bold">Tour Packages</h1>
            <p class="text-center h5 mb-3 text-secondary">We provide the most popular places available around the country.</p>

            <div class="row py-4">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-md-6 col-xl-3 py-3">
                        <div class="card placesCard rounded-0 position-relative">
                            <div class="darkLayer"></div>
                            <div class="cardCaption text-decoration-none">
                                <div class="overflow-hidden">
                                    <h3 class="m-0 p-0"><?php echo $row['tourName'] ?></h3>
                                    <small class="m-0 p-0">Rating : <?php echo $row['rating'] ?>/5</small>

                                    <div class="d-inline-block rateYo-container" id="rateYo-<?php echo $row['tourID']; ?>"></div>

                                    <script>
                                        $(document).ready(function() {
                                            $('#rateYo-<?php echo $row['tourID']; ?>').rateYo({
                                                starWidth: '15px',
                                                normalFill: '#fdfdfd',
                                                rating: <?php echo $row['rating']; ?>,
                                                readOnly: true
                                            });
                                        });
                                    </script>
                                    <hr>

                                    <p>Tour type : <?php echo $row['tourType'] ?></p>
                                    <p>Location : <?php echo $row['location'] ?></p>
                                    <p>Best Months to Visit : <?php echo $row['bestMonths'] ?></p>
                                    <p>Details : <?php echo $row['detail'] ?></p>
                                    <a href="booking.php?tourID=<?php echo urlencode($row['tourID']); ?>"  class="btn btn-success rounded-pill">Book now</a>
                                </div>
                            </div>
                            <img src="uploadPhoto/<?php echo $row['tourPhoto']; ?>" alt="" class="w-100 h-100 cardImg">
                        </div>
                    </div>
                <?php
                    $tourCount += 1;
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