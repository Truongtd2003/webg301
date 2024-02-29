<?php
require_once('../../database.php');



if($_SERVER["REQUEST_METHOD"] == 'POST'){
    delete_category($_POST['id']);
    redirect_to('../category.php');

}
else{
    if(!isset($_GET['id'])){
        redirect_to('../category.php');

    }
    $id = $_GET['id'];
    $category = find_category_by_id($id);

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Category</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Optional CSS styles */
        .category-image {
            max-width: 200px;
            height: auto;
            
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Delete Category</h1>
        <p>Are you sure you want to delete this category?</p>
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?php echo '../../cate/' . $category['image_url']; ?>" alt="<?php echo $category['category_name']; ?>" class="category-image">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Name: <?php echo $category['category_name']; ?></h5>
                        <!-- Hiển thị các thông tin khác về danh mục -->
                        <form action="<?php echo ($_SERVER["PHP_SELF"]) ?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $category['category_id']; ?>">
                            <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                        </form>
                        <br>
                        <a href="../category.php" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS và các thư viện khác -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
