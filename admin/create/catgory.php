

<?php
require_once('../../database.php');



$errors = [];

function isFormValidated()
{
    global $errors;
    return count($errors) == 0;
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    global $errors;




    
    
    if (empty($_POST['category_name'])) {
        $errors[] = 'name required';
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
                <label for="name">Name Category</label>
                <input type="text" class="form-control" id="origin" name="category_name" value="<?php echo isFormValidated() ? "" : $_POST['category_name'] ?>">
            </div>

            <div class="form-group">
                <label for="name">Image cate$category</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>


    <?php if ($_SERVER["REQUEST_METHOD"] == 'POST' && isFormValidated()) : ?>
        <?php
        $category = [];
        $category['category_name'] =  $_POST['category_name'];
        
        $file = $_FILES['image'];
        $file_name = $file['name']; // Process file name
        
        
        $category['image_url'] = $file_name;
            // Insert cate$category into database
            $result = insert_category($category); // You should check the result here
            if ($result) {
                $newcategoryId = mysqli_insert_id($db);
        ?>
                <h2>A new category (ID: <?php echo $newcategoryId ?>) has been created:</h2>
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
                echo "Failed to insert category.";
            }
        

        
        ?>
    <?php endif; ?>


    <div class="container mt-4">
        <a href="../category.php" class="btn btn-info">Back to category</a>
    </div>


    <?php

    db_disconnect($db);





    ?>







    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>