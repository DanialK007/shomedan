
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="TMS/css/bootstrap.min.css">
</head>

<body>
    <div class="container p-md-2">
        <div class="row">
            <div class="col-md-6">
                <div class="accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-target="#vision1"
                                data-bs-toggle="collapse">
                                Vision
                            </button>
                            <div class="acccordion-collapse collapse" id="vision1">
                                <div class="accordion-body">
                                    <h2>Vision</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, error ipsa
                                        perspiciatis
                                        veritatis
                                        veniam, nulla nostrum quos blanditiis quo neque possimus inventore sapiente
                                        cumque
                                        consectetur unde
                                        tempore optio sed modi.</p>
                                </div>
                            </div>
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-target="#vision2"
                                data-bs-toggle="collapse">
                                Vision
                            </button>
                            <div class="acccordion-collapse collapse" id="vision2">
                                <div class="accordion-body">
                                    <h2>Vision</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, error ipsa
                                        perspiciatis
                                        veritatis
                                        veniam, nulla nostrum quos blanditiis quo neque possimus inventore sapiente
                                        cumque
                                        consectetur unde
                                        tempore optio sed modi.</p>
                                </div>
                            </div>
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-target="#vision3"
                                data-bs-toggle="collapse">
                                Vision
                            </button>
                            <div class="acccordion-collapse collapse" id="vision3">
                                <div class="accordion-body">
                                    <h2>Vision</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, error ipsa
                                        perspiciatis
                                        veritatis
                                        veniam, nulla nostrum quos blanditiis quo neque possimus inventore sapiente
                                        cumque
                                        consectetur unde
                                        tempore optio sed modi.</p>
                                </div>
                            </div>
                        </h2>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#tab1" class="nav-link active" data-bs-toggle="tab">Program 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab2" class="nav-link" data-bs-toggle="tab">Program 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab3" class="nav-link" data-bs-toggle="tab">Program 3</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <h2>Program 1</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat aliquid itaque amet ab dicta
                            ut quidem, ullam aliquam modi hic omnis saepe quam, commodi culpa similique et ipsam
                            repellendus laborum.</p>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <h2>Program 2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dicta ut, repudiandae nam,
                            magnam nesciunt fugiat natus optio beatae nemo odio, pariatur consectetur dolorem veritatis
                            omnis? Mollitia ab eveniet non.</p>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <h2>Program 3</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem iure nemo ea, error
                            maiores eveniet tempore vero inventore, debitis, illum omnis quae commodi culpa iste nobis
                            earum corrupti saepe sequi.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <button class="btn btn-primary" data-bs-target="#register" data-bs-toggle="modal">Register</button>
                <button class="btn btn-primary" data-bs-target="#register2" data-bs-toggle="modal">Register</button>
            </div>
        </div>
    </div>

    <div class="modal" id="register">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Registration</h1>
                    <button class="btn btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque minus excepturi expedita
                        sapiente beatae repellendus facilis voluptates suscipit ea magni, sint provident saepe totam
                        exercitationem temporibus qui impedit ab a.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn bg-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="register2" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Registration</h1>
                    <button class="btn btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque minus excepturi expedita
                        sapiente beatae repellendus facilis voluptates suscipit ea magni, sint provident saepe totam
                        exercitationem temporibus qui impedit ab a.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn bg-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <script src="TMS/js/bootstrap.min.js"></script>
</body>

</html>