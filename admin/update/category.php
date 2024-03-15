<?php 

require_once('../../database.php');

session_start();
if (!isset($_SESSION['admin'])) {
    
    redirect_to('../../page/login.php');
}
$errors = [];

function isFormValidated()
{
    global $errors;
    return count($errors) == 0;
}

function checkForm(){
    global $errors;




    if (empty($_POST['category_name'])) {
        $errors[] = 'category Name is required';
    }

   
    
}

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    checkForm();

    if (isFormValidated()){
        
        $category = [];
        $category['category_id'] = $_POST['category_id'];
        $category['category_name'] =  $_POST['category_name'];
       
        $file = $_FILES['image'];
        $file_name = $file['name'];
        $category['image_url'] = !empty($_FILES['image']['name']) ? $_FILES['image']['name'] : $_POST['old_image'];  ;
        
        $result = update_category($category);
        if($result){
        redirect_to('../category.php');
        }
        else{
            echo "update that bai";
        }
    }

    }
else{
    if(!isset($_GET['id'])){
        redirect_to('../category.php');

   }
    $id = $_GET['id'];
    $category = find_category_by_id($id);

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

  <input type="hidden" name="category_id" value="<?php echo isFormValidated() ? $category['category_id'] : $_POST['category_id'] ;?>">

<div class="form-group">
    <label for="category_name">Name category</label>
    <input type="text" class="form-control" id="category_name" name="category_name" value="<?php echo (isFormValidated() ? $category['category_name'] : $_POST['category_name']) ?>">
</div>


    <div class="form-group">
    <label for="name">Image category</label>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="image" name="image" >
        <label class="custom-file-label" for="image">Choose file</label>
    </div>
    <div class="mt-2">
        <input type="hidden" name="old_image" value="<?php echo isFormValidated() ? $category['image_url']: $_POST['old_image'];?>">
        <img class="img-fluid rounded" alt="category Image"  src="../../cate/<?php echo isFormValidated() ? $category['image_url'] : $_POST['old_image'] ?>" >
    </div>
</div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    
   
        <a href="../category.php" class="btn btn-secondary">Cancel</a>
    

</form>

    




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>