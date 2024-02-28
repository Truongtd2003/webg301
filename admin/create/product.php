<?php
require_once('../../database.php');
$category = find_all_category();


$errors = [];

function isFormValidated()
{
    global $errors;
    return count($errors) == 0;
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    global $errors;




    if (empty($_POST['product_name'])) {
        $errors[] = 'Product Name is required';
    }

    if (empty($_POST['price'])) {
        $errors[] = 'price is required';
    }

    if (empty($_POST['material'])) {
        $errors[] = 'material is required';
    }

    if (empty($_POST['description'])) {
        $errors[] = 'descriptionis required';
    }
    if (empty($_POST['origin'])) {
        $errors[] = 'origin required';
    }
    if (!isset($_FILES['image']) || $_FILES['image']['error'] === UPLOAD_ERR_NO_FILE) {

        $errors[] = 'Photo has not been uploaded yet';
    }
}



?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



</head>

<body>
    <?php if ($_SERVER["REQUEST_METHOD"] == 'POST' && !isFormValidated()) : ?>
        <div class="alert alert-danger" role="alert">
            <span> Please fix the following errors </span>
            <ul>
                <?php
                foreach ($errors as $key => $value) {
                    if (!empty($value)) {
                        echo '<li>', $value, '</li>';
                    }
                }
                ?>
            </ul>
        </div>
    <?php endif; ?>


    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data" class="container mt-4">



        <div class="form-group">
            <label for="product_name">Name Product</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo (isFormValidated() ? "" : $_POST['product_name']) ?>">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="<?php echo (isFormValidated() ? "" : $_POST['price']) ?>">
        </div>

        <div class="form-group">
            <label for="material">Material</label>
            <input type="text" class="form-control" id="material" name="material" value="<?php echo (isFormValidated() ? "" : $_POST['material']) ?>">
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control">
                <?php foreach ($category as $key => $value) { ?>
                    <option value="<?php echo $value['category_id'] ?>"> <?php echo $value['category_name'] ?> </option>
                <?php } ?>
            </select>
        </div>


        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="<?php echo (isFormValidated() ? "" : $_POST['description']) ?>">

            <div class="form-group">
                <label for="name">Origin</label>
                <input type="text" class="form-control" id="origin" name="origin" value="<?php echo isFormValidated() ? "" : $_POST['origin'] ?>">
            </div>

            <div class="form-group">
                <label for="name">Image Product</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>


    <?php if ($_SERVER["REQUEST_METHOD"] == 'POST' && isFormValidated()) : ?>
        <?php
        $product = [];
        $product['product_name'] =  $_POST['product_name'];
        $product['price'] =  $_POST['price'];
        $product['material'] =  $_POST['material'];
        $product['category'] =  $_POST['category'];
        $product['description'] =  $_POST['description'];
        $product['origin'] =  $_POST['origin'];
        $file = $_FILES['image'];
        $file_name = $file['name']; // Process file name
        
        
            $product['image_url'] = $file_name;
            // Insert product into database
            $result = insert_product($product); // You should check the result here
            if ($result) {
                $newProductId = mysqli_insert_id($db);
        ?>
                <h2>A new product (ID: <?php echo $newProductId ?>) has been created:</h2>
                <ul>
                    <?php
                    foreach ($_POST as $key => $value) {
                        if ($key == 'submit') continue;
                        if (!empty($value)) echo '<li>', $key . ': ' . $value, '</li>';
                    }
                    ?>
                </ul>
        <?php
            } else {
                echo "Failed to insert product.";
            }
        

        
        ?>
    <?php endif; ?>


    <div class="container mt-4">
        <a href="../index.php" class="btn btn-info">Back to index</a>
    </div>


    <?php

    db_disconnect($db);





    ?>







    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>