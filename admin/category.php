<?php
require_once('../database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Manager</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* CSS để tạo hình ảnh category */
        .category-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }

        .table-container {
            margin: 10px 100px;
            width: calc(100% - 250px);
            height: auto;
            padding: 30px;
            background-color: #f4f4f4;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th,
        .data-table td {
            color: #8d8d8d;
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .data-table th {
            color: #333;
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container" style="display:flex">

        <?php include('nav.php') ?>
        <div class="table-container">
            <div style="display:flex;justify-content:space-between;margin-bottom:20px">
                <h2>Category Manager</h2>
                <a href="create_category.php" style="cursor: pointer;color:rgb(0, 119, 255)">Create New Category</a>
            </div>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                        $category_set = find_all_category();
                        while ($category = mysqli_fetch_assoc($category_set)):
                    ?>
                    <tr>
                        <td><?php echo $category['category_name']; ?></td>
                        <td><img src="<?php echo '../cate/' . $category['image_url']; ?>" alt="<?php echo $category['category_name']; ?>" class="category-image"></td>
                        <td><a class="btn-primary" href="<?php echo 'update_category.php?id='.$category['category_id']; ?>">Edit</a></td>
                        <td><a class="btn-primary" href="<?php echo 'delete/category.php?id='.$category['category_id']; ?>">Delete</a></td>
                    </tr>
                    <?php endwhile; ?>
                    <?php mysqli_free_result($category_set); ?>
                </tbody>
            </table>
        </div>
    </div>
</body>


</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../script/admin.js"></script>