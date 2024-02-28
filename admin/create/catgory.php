


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
    <td><img src="<?php echo '../cate/' . $category['image_url']; ?>" alt="<?php echo $category['category_name']; ?>" class="category-image"></td>
    <p>Name: <?php echo $category['category_name']; ?></p>
    <!-- Hiển thị các thông tin khác về danh mục -->
    <form action="<?php echo ($_SERVER["PHP_SELF"]);  ?>" method="post">
        <input type="submit" name="submit" value="Delete">
    </form>
</body>
</html>