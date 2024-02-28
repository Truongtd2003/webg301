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

require_once('../../database.php');



if($_SERVER["REQUEST_METHOD"] == 'POST'){
    delete_category($_POST['category_id']);
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
</head>
<body>
    <h1>Delete Category</h1>
    <p>Are you sure you want to delete this category?</p>
    
    <td><img src="<?php echo '../../cate/' . $category['image_url']; ?>" alt="<?php echo $category['category_name']; ?>" class="category-image"></td>
    <p>Name: <?php echo $category['category_name']; ?></p>
    <!-- Hiển thị các thông tin khác về danh mục -->
    <form action="<?php echo ($_SERVER["PHP_SELF"]) ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $category['category_id']; ?>">
    <input type="submit" name="submit" value="Delete">
    </form>
    <a href="../category.php" class="btn btn-secondary">Cancel</a>
</body>
</html>
<?php ?>