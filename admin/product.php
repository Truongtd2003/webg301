<?php
require_once('../database.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Manager</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* CSS để tạo hình avatar hình tròn */
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ccc;
            margin-right: 10px;
        }

        .avatar img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            border-radius: 50%;
        }

        .table-container {
            margin: 10px 100px;
            overflow-y: auto;
            /* Adjust this value to align with your side navigation width */
            width: calc(100% - 250px);
            height: auto;
            padding: 30px;
            background-color: #f4f4f4;
            border-radius: 8px;
            border: 1px solid #ccc;
            /* Adjust this value to match the space left after side navigation */
        }

        .table-container table {
    width: 100%; /* Đảm bảo bảng sử dụng toàn bộ chiều rộng của .table-container */
    table-layout: fixed; /* Giữ bảng ở một chiều rộng cố định */
}

.table-container td,
.table-container th {
    white-space: nowrap; /* Ngăn các nội dung trong ô từ việc xuống dòng */
    overflow: hidden; /* Ẩn phần nội dung dư thừa nếu nó tràn ra khỏi ô */
    text-overflow: ellipsis; /* Hiển thị dấu "..." nếu nội dung trong ô quá dài */
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
            /* Màu chính (primary color) */
            color: #fff;
            /* Màu chữ */
            padding: 10px 20px;
            /* Độ lớn của nút */
            border: none;
            /* Không có đường viền */
            border-radius: 5px;
            /* Độ cong của góc */
            cursor: pointer;
            /* Con trỏ chuột khi di chuột qua */
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* Màu chính khi hover */
        }
    </style>
</head>

<body>

    <div class="container" style="display:flex">

        <?php include('nav.php') ?>
        <div class="table-container">
            <div style="display:flex;justify-content:space-between;margin-bottom:20px">
                <h2>Product Manager</h2>
                <a href="create/product.php" style="cursor: pointer;color:rgb(0, 119, 255)">Create New Product</a>
            </div>
            <table class="data-table">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Material</th>
                    <th>description</th>
                    <th>Image URL</th>
                    <th>Origin</th> 
                    <th>Action</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                        $product_set = find_all_products();
                        while ($product = mysqli_fetch_assoc($product_set)):
                    ?>
                    <tr>
                        <td><?php echo $product['product_name']; ?></td>
                        <td><?php echo $product['price']; ?></td>
                        <td><?php echo $product['material']; ?></td>
                        <td><?php echo $product['description']; ?></td>
                        <td><img style="width: 100px;" src="<?php echo '../hinhanh/' . $product['image_url']; ?>" alt="<?php echo $product['product_name']; ?>" class="product-image"></td>
                        <td><?php echo $product['origin']; ?></td> 
                        <td><a class="btn-primary" href="<?php echo 'update/product.php?id='.$product['product_id']; ?>">Edit</a></td>
                        <td><a class="btn-primary" href="<?php echo 'delete/product.php?id='.$product['product_id']; ?>">delete</a></td>
                    </tr>
                    <?php endwhile; ?>
                    <?php mysqli_free_result($product_set); ?>
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