<?php 

require_once('../../database.php');

session_start();
if (!isset($_SESSION['admin'])) {
    
    redirect_to('../../page/login.php');
}
$category = find_all_category();



$errors = [];

function isFormValidated()
{
    global $errors;
    return count($errors) == 0;
}

function checkForm(){
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
    
}

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    checkForm();

    if (isFormValidated()){
        
        $product = [];
        $product['product_id'] = $_POST['product_id'];
        $product['product_name'] =  $_POST['product_name'];
        $product['price'] =  $_POST['price'];
        $product['material'] =  $_POST['material'];
        $product['category_id'] =  $_POST['category'];
        $product['description'] =  $_POST['description'];
        $product['origin'] =  $_POST['origin'];
        $file = $_FILES['image'];
        $file_name = $file['name'];
        if (!empty($_FILES['image']['name'])) {
            $product['image_url'] = $_FILES['image']['name'];
        } elseif (!empty($_POST['name_image'])) {
            $product['image_url'] = $_POST['name_image'];
        } else {
            $product['image_url'] = $_POST['old_image'];
        }
        
        $result = update_product($product);
        var_dump($product);
        if($result){
        redirect_to('../product.php');
        }
        else{
            echo "update that bai";
        }
    }

    }
else{
    if(!isset($_GET['id'])){
        redirect_to('../product.php');

   }
    $id = $_GET['id'];
    $product = find_product_by_id($id);
    

}

?>




<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

  <input type="hidden" name="product_id" value="<?php echo isFormValidated() ? $product['product_id'] : $_POST['product_id'] ;?>">

<div class="form-group">
    <label for="product_name">Name Product</label>
    <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo (isFormValidated() ? $product['product_name'] : $_POST['product_name']) ?>">
</div>

<div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" name="price" value="<?php echo (isFormValidated() ? $product['price'] : $_POST['price']) ?>">
</div>

<div class="form-group">
    <label for="material">Material</label>
    <input type="text" class="form-control" id="material" name="material" value="<?php echo (isFormValidated() ? $product['material'] : $_POST['material']) ?>">
</div>

<div class="form-group">
    <label for="category">Category</label>
    <select name="category" id="category" class="form-control">
        <?php foreach ($category as $key => $value) { ?>
            <option value="<?php echo  $value['category_id']  ?>" <?php 
            if (($_SERVER["REQUEST_METHOD"] == 'GET') && $value['category_id'] ==  $product['category_id']) {
                echo 'selected';
            }if (($_SERVER["REQUEST_METHOD"] == 'POST') && $value['category_id'] == $_POST['category']) {
                echo 'selected';
            } else {
                echo '';
            }
                ?> > <?php echo $value['category_name'] ?> </option>
        <?php } ?>
    </select>
</div>


<div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" value="<?php echo (isFormValidated() ? $product['description'] : $_POST['description']) ?>">

    <div class="form-group">
        <label for="name">Origin</label>
        <input type="text" class="form-control" id="origin" name="origin" value="<?php echo isFormValidated() ? $product['origin'] : $_POST['origin'] ?>">
    </div>

    <div class="form-group">
    <label for="name">Image Product</label>
    <input type="hidden" name="name_image"  value = "<?php echo isFormValidated() ? "" : $_FILES['image']['name'] ?>">
    <div class="custom-file">
   
        <input type="file" class="custom-file-input" id="image" name="image" value = "">
        <label class="custom-file-label" for="image" >Choose file</label>
    </div>

    <div class="mt-2">
        <input type="hidden" name="old_image" value="<?php echo isFormValidated() ? $product['image_url']: $_POST['old_image'];?>">
        <img class="img-fluid rounded" alt="Product Image"  src="../../hinhanh/<?php echo isFormValidated() ? $product['image_url'] : $_POST['old_image'] ?>" >
    </div>
</div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    
   
        <a href="../product.php" class="btn btn-secondary">Cancel</a>
    

</form>

    




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php 

db_disconnect($db);
?>