<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
            <div id="myNavbar">
                <!-- Nav tabs -->
                <ul
                    class="nav nav-tabs p-3 fixed-top bg-light"
                    id="navId"
                    role="tablist"
                >
                    

                    <li class="nav-item">
                        <a
                            href="#tab1Id"
                            class="nav-link active"
                            data-bs-toggle="tab"
                            aria-current="page"
                            >Active</a
                        >
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >Dropdown</a
                        >
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#tab2Id">Action</a>
                            <a class="dropdown-item" href="#tab3Id">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#tab4Id">Action</a>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#tab5Id" class="nav-link" data-bs-toggle="tab"
                            >Another link</a
                        >
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link disabled" data-bs-toggle="tab"
                            >Disabled</a
                        >
                    </li>
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1Id" role="tabpanel">
                        
                    </div>
                    <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
                    <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
                    <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
                    <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
                </div>
                
                <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
                <script>
                    var triggerEl = document.querySelector("#navId a");
                    bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
                </script>
                
            </div>

            <div id="myCarousel">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li
                            data-bs-target="#carouselId"
                            data-bs-slide-to="0"
                            class="active"
                            aria-current="true"
                            aria-label="First slide"
                        ></li>
                        <li
                            data-bs-target="#carouselId"
                            data-bs-slide-to="1"
                            aria-label="Second slide"
                        ></li>
                        <li
                            data-bs-target="#carouselId"
                            data-bs-slide-to="2"
                            aria-label="Third slide"
                        ></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img
                                src="../img/Bagan2.jpg"
                                style="height:80vh;"
                                class="w-100 d-block"
                                alt="First slide"
                            />
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Title</h3>
                                <p>Description</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img
                                src="../img/Bagan2.jpg"
                                style="height:80vh;"
                                class="w-100 d-block"
                                alt="Second slide"
                            />
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Title</h3>
                                <p>Description</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img
                                src="../img/Bagan2.jpg"
                                style="height:80vh;"
                                class="w-100 d-block"
                                alt="Third slide"
                            />
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Title</h3>
                                <p>Description</p>
                            </div>
                        </div>
                    </div>
                    <button
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselId"
                        data-bs-slide="prev"
                    >
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                        class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselId"
                        data-bs-slide="next"
                    >
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
            </div>
        </header>

        <main>            
            <div id="booking" class="p-5 m-5">
                <h1 class="text-center p-3">Booking</h1>
                <div class="container w-50 bg-success rounded rounded-3 p-3">
                    <div class="mb-3">
                        <label for="bookingName" class="form-label">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="bookingName"
                            id="bookingName"
                            placeholder="Enter your name"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="bookingEmail" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="bookingEmail"
                            id="bookingEmail"
                            placeholder="Enter your email"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="bookingDate" class="form-label">Date</label>
                        <input
                            type="date"
                            class="form-control"
                            name="bookingDate"
                            id="bookingDate"
                            placeholder="Choose Date"
                        />
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <!-- place footer here -->
        </footer>


        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
