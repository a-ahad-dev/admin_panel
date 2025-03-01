<?php

include("connection.php");
if (isset($_POST['btn'])) {
    $item = $_POST['item'];
    $description = $_POST['description'];
    $price = $_POST['price'];


    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $upload_file = "upload_image/" . $filename;
    move_uploaded_file($tmp_name, $upload_file);


    $query = "INSERT INTO admin (item,description,price,image) VALUES( '$item','$description','$price','$upload_file' ) ";
    $admin = mysqli_query($connection, $query);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Control</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    .card {
        border-radius: 15px;
        /* Rounded corners for the card */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        /* Light shadow for a floating effect */
    }

    .card-header {
        background-color: #f8f9fa;
        /* Light background for the header */
        font-weight: bold;
    }

    .card-body {
        background-color: #ffffff;
        /* White background for the body */
    }

    input[type="file"] {
        padding: 10px;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="row">
            <!-- Empty columns for centering the card -->
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <!-- Card Container -->
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Create Item Card</h1>
                    </div>
                    <div class="card-body">
                        <!-- Form Starts -->
                        <form method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="text" placeholder="Item Name" name="item" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" placeholder="Description" name="description" class="form-control"
                                    required>
                            </div>
                            <div class="mb-3">
                                <input type="text" placeholder="Item Price" name="price" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <input type="file" name="image" class="form-control" required>
                            </div>
                            <div class="mb-3 text-center">
                                <input type="submit" name="btn" class="btn btn-danger" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Empty column for centering -->
            <div class="col-md-4"></div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>