<?php
    include_once '../admin_layouts/header.php';
    
    $hostname= "localhost";
    $database= "tourism";
    $username= "root";
    $password= "";

    $connection= mysqli_connect($hostname,$username,$password,$database);

    if($connection){
        // echo "connected successfully";
    }
    else{
        die (mysqli_error($connection));
    }

    $query="SELECT * from user";
    $result=mysqli_query($connection,$query);
?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannal</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="cardheader">
                        <h2 class="text-center">User Table</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Password</th>
                                </tr>
                                <tr>
                                <?php 
                                    while ($row=mysqli_fetch_assoc($result))
                                    {
                                ?>
                                    <td><?php echo $row['userID'] ?></td>
                                    <td><?php echo $row['username'] ?></td>
                                    <td><?php echo $row['firstName'] ?></td>
                                    <td><?php echo $row['lastName'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                    <td><?php echo $row['password'] ?></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>