<?php
if (isset($_POST["create"])) {
    $blogName = $_POST['blogName'];
    $blogDate = $_POST['blogDate'];
    $blogDetail = $_POST['blogDetail'];
    $blogPhoto = $_FILES['blogPhoto']['name'];

    // File Upload Handling
    $targetDirectory = "../uploadPhoto/"; // Directory where you want to store uploaded images
    $targetFile = $targetDirectory . basename($_FILES["blogPhoto"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["blogPhoto"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
        // Check if file already exists
        if (file_exists($targetFile)) {
            // echo "Sorry, file already exists.";
            $uploadOk = 0;
        } else {
            // Check file size (example: max 5MB)
            if ($_FILES["blogPhoto"]["size"] > 5000000) {
                // echo "Sorry, your file is too large.";
                $uploadOk = 0;
            } else {
                // Allow certain file formats
                $allowedExtensions = ["jpg", "jpeg", "png", "gif", "webp"];
                if (!in_array($imageFileType, $allowedExtensions)) {
                    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                } else {
                    // Move the uploaded file from temporary location to your desired directory
                    if (move_uploaded_file($_FILES["blogPhoto"]["tmp_name"], $targetFile)) {
                        // echo "The file " . basename($_FILES["blogPhoto"]["name"]) . " has been uploaded.";
                        $blogPhoto = $targetFile;  // Store this path in your database
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
            }
        }
    } else {
        // echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if the file was uploaded successfully
    if (isset($_FILES["blogPhoto"]) && $_FILES["blogPhoto"]["error"] == 0) {
        $targetDirectory = "../uploadPhoto/"; // Directory where you want to store uploaded images
        $targetFile = $targetDirectory . basename($_FILES["blogPhoto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        // ... (rest of the code remains unchanged)

        // Insert into the database with $blogPhoto (assuming you have modified your table structure to include blogPhoto)
        $sql = "INSERT INTO `blog` (blogName, blogDate, blogDetail, blogPhoto)
        VALUES ('$blogName', '$blogDate', '$blogDetail', '$blogPhoto')";

        $result = mysqli_query($connection, $sql);

        if ($result) {
            // header ('Location: login.php');
            // exit;

            // Display Spinner and Redirect
            echo '<div class="d-flex flex-column justify-content-center align-items-center bg-success" style="height: 100vh;z-index:999; position:absolute; width:100%;height:135vh; padding-bottom:40vh;">
                    <h3>Creating blog</h3>
                    <div class="spinner-border p-4 mt-3 mb-5" role="status">
                    <span class="sr-only p-3 mb-5"></span>
                    </div>
                    </div>';

            echo '<script>
                    // Redirect to the main page after 3 seconds
                    setTimeout(function() {
                    window.location.href = "blog.php";
                    }, 1000); // 1000 milliseconds (1 second) delay before redirection
                    </script>';
        } else {
            die(mysqli_error($connection));
        }
    } else {
        echo "No file uploaded or an error occurred while uploading.";
    }
}
?>

<div class="container pt-3">
    <div class="display-3 py-3">blog</div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Create a new blog
    </button>

    <!-- Modal -->
    <div class="modal fade w-100" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <form action="" method="post" class="modal-content" enctype="multipart/form-data">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-6 p-5">
                            <img src="../img/newTour.svg" alt="" class="w-100 h-100">
                        </div>
                        <div class="col-md-6">
                            <h1 class="py-3">Create a New blog</h1>
                            <div class="row p-2">
                                <div class="col-4">
                                    <label for="form-label" class="fs-5 pb-2">blog Name</label>
                                </div>
                                <div class="col-8">
                                    <input required type="text" name="blogName" class="form-control p-3">
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-4">
                                    <label for="form-label" class="fs-5 pb-2">blog Date</label>
                                </div>
                                <div class="col-8">
                                    <input required type="date" name="blogDate" class="form-control p-3">
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-4">
                                    <label for="form-label" class="fs-5 pb-2">blog Detail</label>
                                </div>
                                <div class="col-8">
                                    <input required type="text" name="blogDetail" class="form-control p-3">
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-4">
                                    <label for="blogPhoto" class="fs-5 pb-2">Upload blog Image</label>
                                </div>
                                <div class="col-8">
                                    <input required type="file" name="blogPhoto" id="blogPhoto" class="form-control p-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" name="create">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>