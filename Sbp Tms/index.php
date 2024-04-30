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
    <script src="https://kit.fontawesome.com/561e8f69a8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
</head>


<body>
    <!-- header -->
    <?php
    include_once 'layout/header.php';
    ?>

    <!-- main -->
    <main>
        <!-- Carousel Section -->
        <section id="carouselSection" class="carousel slide carousel-fade fade-in" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselSection" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselSection" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselSection" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselSection" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="overCaro text-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md col-sm"></div>
                        <div class="col-lg-7 col-md-10 col-sm-10 p-5 text-light">
                            <h1 class="display-3 text-uppercase px-2">Enjoy GoldenLand</h1>
                            <p class="px-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique quod reiciendis
                                repellendus a quibusdam quis etur adipisicing elit. Similique quod reiciendis
                                repellendus a quibusdam quis aliqu</p>
                            <a href="register.php" class="btn btn-success p-2 px-3">Get Started</a>
                        </div>
                        <div class="col-md col-sm"></div>
                    </div>
                </div>
            </div>
            <div class="carousel-inner caroInner">
                <div class="carousel-item active caroInner" data-bs-interval="2000">
                    <img src="img/kaLaw.jpg" class="d-block caroImage" alt="...">
                </div>
                <div class="carousel-item caroInner" data-bs-interval="2000">
                    <img src="img/Bagan2.jpg" class="d-block caroImage" alt="...">
                </div>
                <div class="carousel-item caroInner" data-bs-interval="2000">
                    <img src="img/ngaPaLi.jpg" class="d-block caroImage" alt="...">
                </div>
                <div class="carousel-item caroInner" data-bs-interval="2000">
                    <img src="img/hotel.jpg" class="d-block caroImage" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev z-3" type="button" data-bs-target="#carouselSection" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next z-3" type="button" data-bs-target="#carouselSection" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>

        <!-- Top Values -->
        <section id="topValues" class="container text-center p-4 fade-in">
            <div class="h1 fs-1 mt-5 fw-bold">Top values for you</div>
            <div class="h5 text-secondary">Try variety of benefits while using our services</div>
            <div class="row py-3">
                <div class="topValues col-lg-3 col-md-6 rounded rounded-3 p-3">
                    <i class="bi bi-telegram fs-2"></i>
                    <h5>AirPort pickup</h5>
                    <p class="fs-5">We provide escorts from the airport to the hotel</p>
                </div>
                <div class="topValues col-lg-3 col-md-6 rounded rounded-3 p-3">
                    <i class="bi bi-wallet-fill fs-2"></i>
                    <h5>Easy booking</h5>
                    <p class="fs-5">Quick and easy booking of tours for upcoming dates</p>
                </div>
                <div class="topValues col-lg-3 col-md-6 rounded rounded-3 p-3">
                    <i class="bi bi-people-fill fs-2"></i>
                    <h5>Best tour guide</h5>
                    <p class="fs-5">Our best tour guide is ready to guide your every trip</p>
                </div>
                <div class="topValues col-lg-3 col-md-6 rounded rounded-3 p-3">
                    <i class="bi bi-patch-check-fill fs-2"></i>
                    <h5>Lots of promos</h5>
                    <p class="fs-5">Various promotions and drawings of various tours</p>
                </div>
            </div>
        </section>

        <!-- Popular Places -->
        <section id="popularPlaces" class="container mb-5 py-4">
            <h1 class="text-center my-3 fw-bold">Popular Tour Packages</h1>
            <p class="text-center h5 mb-3 text-secondary">We provide the most popular places available around the country.</p>
            <div class="row">
                <div class="col-lg-8 col-md-12 py-3">
                    <div class="card fade-in-top placesCard rounded-0 position-relative">
                        <div class="darkLayer"></div>
                        <div class="cardCaption text-decoration-none">
                            <div class="overflow-hidden">
                                <h3>Kyeik Htee Yo</h3>
                                <hr>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit repellendus magnam eius sed
                                    ullam quia voluptatum modi cum, ex, commodi saepe?</p>
                                <a href="" class="btn btn-success rounded-pill">See more</a>
                            </div>
                        </div>
                        <img src="img/kyeikHteeYoe.jpg" alt="" class="w-100 h-100 cardImg">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="card fade-in-top placesCard rounded-0 position-relative">
                        <div class="darkLayer"></div>
                        <div class="cardCaption text-decoration-none">
                            <div class="overflow-hidden">
                                <h3>Bagan</h3>
                                <hr>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit repellendus magnam eius sed
                                    ullam quia voluptatum modi cum, ex, commodi saepe?</p>
                                <a href="" class="btn btn-success rounded-pill">See more</a>
                            </div>
                        </div>
                        <img src="img/baganCard.jpg " alt="" class="w-100 h-100 cardImg">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="card fade-in-top placesCard rounded-0 position-relative">
                        <div class="darkLayer"></div>
                        <div class="cardCaption text-decoration-none">
                            <div class="overflow-hidden">
                                <h3>Pyin Oo Lwin</h3>
                                <hr>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit repellendus magnam eius sed
                                    ullam quia voluptatum modi cum, ex, commodi saepe?</p>
                                <a href="" class="btn btn-success rounded-pill">See more</a>
                            </div>
                        </div>
                        <img src="img/mayMyo.jpg" alt="" class="w-100 h-100 cardImg">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="card fade-in-top placesCard rounded-0 position-relative">
                        <div class="darkLayer"></div>
                        <div class="cardCaption text-decoration-none">
                            <div class="overflow-hidden">
                                <h3>Kaw Thoung</h3>
                                <hr>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit repellendus magnam eius sed
                                    ullam quia voluptatum modi cum, ex, commodi saepe?</p>
                                <a href="" class="btn btn-success rounded-pill">See more</a>
                            </div>
                        </div>
                        <img src="img/kawThaung.jpg" alt="" class="w-100 h-100 cardImg">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="card fade-in-top placesCard rounded-0 position-relative">
                        <div class="darkLayer"></div>
                        <div class="cardCaption text-decoration-none">
                            <div class="overflow-hidden">
                                <h3>Shwe Dagon</h3>
                                <hr>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit repellendus magnam eius sed
                                    ullam quia voluptatum modi cum, ex, commodi saepe?</p>
                                <a href="" class="btn btn-success rounded-pill">See more</a>
                            </div>
                        </div>
                        <img src="img/shweDagon.webp" alt="" class="w-100 h-100 cardImg">
                    </div>
                </div>
            </div>
        </section>

        <div class="whiteDefault"></div>

        <!-- Why choose us
        <section id="whyCU" class="container mb-5">
            <div class="row my-5 text-light">
                <div class="col-md-6 d-flex align-items-center p-5">
                    <div>     
                        <h1 class="mt-5">About Us</h1>
                        <p>Lorem ipsum dolor sit amet consectetu placeat excepturi iste culpa. Numquam dicaecati! Lorem, ipsum adipisicing elit. Laboriosam, modi vero. Quidem quam assumenda autem, sed deleniti consectetur, vel nihil iure sapiente dolor eos, consequuntur quibusdam voluptatum mollitia ad quis?</p>
                        <a href="" class="btn btn-success mb-5">Contact Us</a>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <img src="img/hotel.jpg" alt="" class="w-100 h-100">
                </div>
            </div>
        </section> -->

        <!-- Popular Tour Types -->
        <section class="container-fluid p-0 mt-5 helloBg text-center">
            <div class="hello text-light">
                <div class="h1 fs-1 pt-5 fw-bold">Our Popular Tour Types</div>
                <div class="h5">Try variety of benefits while using our services</div>
                <div class="container-fluid">
                    <div class="row px-5 pt-3 justify-content-center">
                        <div class="col-lg fade-in-top col-md-6 col-sm-6 p-3">
                            <div class="border border-2 rounded-0 p-3 tours">
                                <i class="fa-solid hi fa-earth-asia"></i>
                            </div>
                            <h3 class="py-3">Country</h3>
                        </div>
                        <div class="col-lg fade-in-top col-md-6 col-sm-6 p-3">
                            <div class="border border-2 rounded-0 p-3 tours">
                                <i class="fa-solid hi fa-ship"></i>
                            </div>
                            <h3 class="py-3">Cruise</h3>
                        </div>
                        <div class="col-lg fade-in-top col-md-6 col-sm-6 p-3">
                            <div class="border border-2 rounded-0 p-3 tours">
                                <i class="fa-solid hi fa-person-hiking"></i>
                            </div>
                            <h3 class="py-3">Adventure</h3>
                        </div>
                        <div class="col-lg fade-in-top col-md-6 col-sm-6 p-3">
                            <div class="border border-2 rounded-0 p-3 tours">
                                <i class="fa-solid hi fa-mountain"></i>
                            </div>
                            <h3 class="py-3">Mountain</h3>
                        </div>
                        <div class="col-lg fade-in-top col-md-6 col-sm-6 p-3">
                            <div class="border border-2 rounded-0 p-3 tours">
                                <i class="fa-regular hi fa-sun"></i>
                            </div>
                            <h3 class="py-3">Sea side</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <div class="whiteDefault"></div> -->

        <!-- CEO  -->
        <div id="CEO" class="container fade-in-top">
            <div class="">
                <div class="h1 text-center fs-1 pt-5 fw-bold">Our CEOs</div>
                <div class="h5 text-center">Meet our founders</div>
                <div class="row pt-2 pb-3">
                    <div class="col-sm-4 p-3">
                        <div class="ceoBg border border-secondary border-2 h-100">
                            <img src="img/IMG_1715.jpeg" alt="" class="ceoPf">
                            <h4 class="text-dark fw-bold fs-3 text-center mb-2 mt-3">Henery Lucus</h4>
                            <hr>
                            <div class="pb-3 px-4 d-flex justify-content-between">
                                <a class="socialIcon" href=""><i class="bi bi-facebook fs-4"></i></a>
                                <a class="socialIcon" href=""><i class="bi bi-instagram fs-4"></i></a>
                                <a class="socialIcon" href=""><i class="bi bi-linkedin fs-4"></i></a>
                                <a class="socialIcon" href=""><i class="bi bi-twitter fs-4"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 p-3">
                        <div class="ceoBg border border-secondary border-2 h-100">
                            <img src="img/IMG_1716.jpeg" alt="" class="ceoPf">
                            <h4 class="text-dark fw-bold fs-3 text-center mb-2 mt-3">Thomas Steven</h4>
                            <hr>
                            <div class="pb-3 px-4 d-flex justify-content-between">
                                <a class="socialIcon" href=""><i class="bi bi-facebook fs-4"></i></a>
                                <a class="socialIcon" href=""><i class="bi bi-instagram fs-4"></i></a>
                                <a class="socialIcon" href=""><i class="bi bi-linkedin fs-4"></i></a>
                                <a class="socialIcon" href=""><i class="bi bi-twitter fs-4"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 p-3">
                        <div class="ceoBg border border-secondary border-2 h-100">
                            <img src="img/IMG_1728.jpeg" alt="" class="ceoPf">
                            <h4 class="text-dark fw-bold fs-3 text-center mb-2 mt-3">Danial Kelvin</h4>
                            <hr>
                            <div class="pb-3 px-4 d-flex justify-content-between">
                                <a class="socialIcon" href=""><i class="bi bi-facebook fs-4"></i></a>
                                <a class="socialIcon" href=""><i class="bi bi-instagram fs-4"></i></a>
                                <a class="socialIcon" href=""><i class="bi bi-linkedin fs-4"></i></a>
                                <a class="socialIcon" href=""><i class="bi bi-twitter fs-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Feedback Section -->
        <div class="container pb-5 fade-in-top">
            <div class="h1 text-center fs-1 mt-5 fw-bold">Customer Feedbacks</div>
            <div class="h5 text-center pb-3">Happy customers every month</div>
            <div class="row py-5">
                <div class="col-lg-6 col-sm-12 d-flex align-items-center justify-content-center">
                    <img src="img/feedback.svg" alt="" class="w-75">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div id="feedback" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div data-bs-interval="2000" class="carousel-item active">
                                <div class="review px-2 d-flex align-items-center justify-content-center">
                                    <div class="w-75 border border-3 rounded rounded-3 p-4">
                                        <div class="row">
                                            <div class="col-4 d-flex justify-content-center align-items-center">
                                                <img src="img/maZaw.png" class="customerPf" alt="">
                                            </div>
                                            <div class="col-8">
                                                <h4>Ma Ma Zaw</h4>
                                                <p>4.5/10</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi esse aspernatur, doloribus, provident, adipisci labore iusto aut voluptas obcaecati quae dolores facere earum praesentium velit tenetur vel maiores quis aperiam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-bs-interval="2000" class="carousel-item">
                                <div class="review px-2 d-flex align-items-center justify-content-center">
                                    <div class="w-75 border border-3 rounded rounded-3 p-4">
                                        <div class="row">
                                            <div class="col-4 d-flex justify-content-center align-items-center">
                                                <img src="img/maZaw.png" class="customerPf " alt="">
                                            </div>
                                            <div class="col-8">
                                                <h4>Ma Ma Zaw</h4>
                                                <p>4.5/10</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi esse aspernatur, doloribus, provident, adipisci labore iusto aut voluptas obcaecati quae dolores facere earum praesentium velit tenetur vel maiores quis aperiam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-bs-interval="2000" class="carousel-item">
                                <div class="review px-2 d-flex align-items-center justify-content-center">
                                    <div class="w-75 border border-3 rounded rounded-3 p-4">
                                        <div class="row">
                                            <div class="col-4 d-flex justify-content-center align-items-center">
                                                <img src="img/maZaw.png" class="customerPf" alt="">
                                            </div>
                                            <div class="col-8">
                                                <h4>Ma Ma Zaw</h4>
                                                <p>4.5/10</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi esse aspernatur, doloribus, provident, adipisci labore iusto aut voluptas obcaecati quae dolores facere earum praesentium velit tenetur vel maiores quis aperiam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#feedback" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon text-bg-dark rounded-circle" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#feedback" data-bs-slide="next">
                            <span class="carousel-control-next-icon text-bg-dark rounded-circle" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- footer -->
    <?php
    include_once 'layout/footer.php';
    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elementsToAnimate = document.querySelectorAll('.fade-in');
            elementsToAnimate.forEach(function (element) {
                element.classList.add('fade-in-active');
            });
        });


        document.addEventListener('DOMContentLoaded', function () {
        // Function to check if an element is in the viewport
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= -80 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Function to handle the scroll event
        function handleScroll() {
            var elementsToAnimate = document.querySelectorAll('.fade-in-top');
            elementsToAnimate.forEach(function (element) {
                if (isElementInViewport(element)) {
                    element.classList.add('fade-in-top-active');
                }
            });
        }

        // Initial check on page load
        handleScroll();

        // Listen for the scroll event
        window.addEventListener('scroll', handleScroll);
    });

    </script>
</body>

</html>