<?php
require_once('../../database.php');

session_start();
if (!isset($_SESSION['admin'])) {
    
    redirect_to('../../page/login.php');
}

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    delete_product($_POST['product_id']);
    redirect_to('../product.php');

}
else{
    if(!isset($_GET['id'])){
        redirect_to('../index.php');

    }
    $id = $_GET['id'];
    $product = find_product_by_id($id);

}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Delete Product</h1>
        <p>Are you sure you want to delete this product?</p>
        
            <?php if (isset($product['name'])) : ?>
                <p><strong>Name:</strong> <?php echo $product['name']; ?></p>
            <?php endif; ?>
            <?php if (isset($product['price'])) : ?>
                <p><strong>Price:</strong> <?php echo $product['price']; ?></p>
            <?php endif; ?>
            <?php if (isset($product['material'])) : ?>
                <p><strong>Material:</strong> <?php echo $product['material']; ?></p>
            <?php endif; ?>
            <?php if (isset($product['image_url'])) : ?>
                <p><strong>Image URL:</strong> <?php echo $product['image_url']; ?></p>
            <?php endif; ?>
            <?php if (isset($product['description'])) : ?>
                <p><strong>Origin:</strong> <?php echo $product['description']; ?></p>
            <?php endif; ?>
            <?php if (isset($product['origin'])) : ?>
                <p><strong>Origin:</strong> <?php echo $product['origin']; ?></p>
            <?php endif; ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . urlencode($id); ?>" method="post">
            
            <div class="mt-4">
            <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                <button type="submit" class="btn btn-danger" name="submit">Delete</button>
                
            </div>
        </form>
        <br>
        <a href="../product.php" class="btn btn-secondary">Cancel</a>
    </div>

    <!-- Bootstrap JS và các thư viện JavaScript cần thiết khác -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
