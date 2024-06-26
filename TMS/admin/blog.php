<?php
include_once "adminLayout/adminHeader.php";
include_once "../connect.php";
if (!isset($_SESSION['admin_name'])) {
    header("Location: error.php"); // Redirect to the login page
    exit();
}

$query = "SELECT * from blog";
$result = mysqli_query($connection, $query);

$blogCount = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel : User</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../myStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        .modal-content {
            background-image: url();
            background-size: cover;
        }

        .blogPhotoDisplay { 
            width: 10vw;
            height: 10vh;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <main class="bg-success-subtle pt-5">
        <?php
        include_once "blogCreate.php";
        ?>


        <!-- blog list  -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card p-4 border-3 shadow my-5 bg-light">
                        <h1 class="text-center">blog Table</h1>
                        <div class="card-body table-responsive">
                            <table class="table table-bordered fs-5">
                                <thead>
                                    <tr class="border-secondary border-2">
                                        <th class="bg-secondary-subtle">blog id</th>
                                        <th>blog Name</th>
                                        <th>blog Type</th>
                                        <th>blog Detail</th>
                                        <th>blog Photo</th>
                                    </tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr class="border-secondary border-2">
                                            <td class="bg-secondary-subtle"><?php echo $row['blogID'] ?></td>
                                            <td><?php echo $row['blogName'] ?></td>
                                            <td><?php echo $row['blogDate'] ?></td>
                                            <td><?php echo $row['blogDetail'] ?></td>

                                            <!-- ... Inside the while loop to fetch blog details ... -->
                                            <!-- ... Other columns ... -->
                                            <td><img src="../uploadPhoto/<?php echo $row['blogPhoto']; ?>" alt="blog Image" class="blogPhotoDisplay"></td>
                                            <td class="w-100 border-0 d-flex align-items-center justify-content-center h-100">
                                                <a href="blogEdit.php?editId=<?php echo $row['blogID']; ?>" class="btn m-2 btn-outline-primary">Edit</a>
                                                <a href="blogDelete.php?deleteId=<?php echo $row['blogID']; ?>" class="btn m-2 btn-outline-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                        $blogCount += 1;
                                    }
                                    ?>
                                </thead>
                                <tbody>
                                    <tr class="border-2 border-secondary">
                                        <td class="bg-secondary-subtle fs-4 p-3" colspan="5">Total blog</td>
                                        <td class="fs-4 p-3"><?php echo $blogCount ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>