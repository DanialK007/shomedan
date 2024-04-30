<?php
include_once 'adminLayout/adminHeader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../myStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>
<body class="bg-success-subtle pt-5">
    <div class="container">
        <div class="row p-5">
            <div class="col">
                <div class="card p-3 border-3 bg-light">
                    <div class="cardheader">
                        <h1 class="text-center">User Table</h1>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered fs-5">
                            <thead>
                                <tr class="border border-3 border-secondary">
                                    <th class="bg-secondary-subtle">ID</th>
                                    <th class="bg-primary-subtle">User ID</th>
                                    <th class="bg-primary-subtle"></th>
                                    <th class="bg-primary-subtle">Last Name</th>
                                    <th class="bg-primary-subtle">Email</th>
                                    <th class="bg-primary-subtle">Phone</th>
                                </tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class="border border-3 border-secondary">
                                        <td class="bg-secondary-subtle"><?php echo $row['user_id'] ?></td>
                                        <td class="bg-primary-subtle"><?php echo $row['username'] ?></td>
                                        <td class="bg-primary-subtle"><?php echo $row['firstName'] ?></td>
                                        <td class="bg-primary-subtle"><?php echo $row['lastName'] ?></td>
                                        <td class="bg-primary-subtle"><?php echo $row['email'] ?></td>
                                        <td class="bg-primary-subtle"><?php echo $row['phone'] ?></td>
                                    </tr>
                                <?php
                                    $userCount += 1;
                                }
                                ?>
                            </thead>
                            <tbody>
                                <tr class="border border-3 border-secondary">
                                    <td class="bg-secondary-subtle fs-4 p-3" colspan="5">Total Users</td>
                                    <td class="bg-dark-subtle fs-4 p-3"><?php echo $userCount ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>