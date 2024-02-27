<?php 
require_once('../database.php');


$errors = [];

function isFormValidated(){
    global $errors;
    return count($errors) == 0;
}

function checkForm(){
    global $errors;
    


    $id = $_POST['admin_id'];
    $admin = find_admin_by_id($id);
    if (empty($_POST['username'])){
        $errors[] = 'Admin Name is required';
    }

    if (empty($_POST['hash_password'])){
        $errors[] = 'Password is required';
    }

    if (empty($_POST['email'])){
        $errors[] = 'Email is required';
    }
    if (empty($_POST['newpassword']) && !empty($_POST['confirmpassword'])){
        $errors[] = 'New Password is required';
    }
    if (empty($_POST['confirmpassword']) && !empty($_POST['newpassword'])){
        $errors[] = 'Confirm password is required';
    }
    $hashed_password = hash('sha256', $_POST['hash_password']);
    
    if($hashed_password != $admin['hash_password']){
        $errors[] = 'Incorrect password';
        
    }
    if($_POST['confirmpassword'] != $_POST['newpassword'] && !empty($_POST['newpassword'])){

        $errors[] = 'Incorrect new password';
    }


    

}

if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    checkForm();
    if (isFormValidated()){
        $admin = [];
        $admin['admin_id'] =  $_POST['admin_id'];
        $admin['username'] =  $_POST['username'];
        $admin['hash_password'] =  $_POST['newpassword'];
        $admin['email'] =  $_POST['email'];
        

        update_admin($admin);
        header('Location: index.php');
exit;


    }


}
else{
    if(!isset($_GET['id'])) {
        redirect_to('index.php');
    }
    $id = $_GET['id'];
    $admin = find_admin_by_id($id);

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
  <?php if ($_SERVER["REQUEST_METHOD"] == 'POST' && !isFormValidated()): ?> 
        <div class="alert alert-danger" role="alert">
            <span> Please fix the following errors </span>
            <ul>
                <?php
                foreach ($errors as $key => $value){
                    if (!empty($value)){
                        echo '<li>', $value, '</li>';
                    }
                }
                ?>
            </ul>
        </div>
    <?php endif; ?>


  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" class="container mt-4">
        <input type="hidden" name="admin_id" 
        value="<?php echo isFormValidated()? $admin['admin_id']: $_POST['admin_id'] ?>" >

        <div class="form-group">
            <label for="name">Name</label> 
        <input type="text" class="form-control" id="username" name="username" value="<?php echo isFormValidated()? $admin['username']: $_POST['username'] ?>">
        </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo isFormValidated()? $admin['email']: $_POST['email'] ?>">
            </div>
            <div class="form-group">
            <label for="hash_password">PassWord</label> <!--required-->
        <input type="text" class="form-control" id="hash_password" name="hash_password" value="<?php echo isFormValidated()? '': $_POST['hash_password'] ?>">
            </div>

            <div class="form-group">
            <label for="newpassword">New PassWord</label> <!--required-->
        <input type="text" class="form-control" id="newpassword" name="newpassword" value="<?php echo isFormValidated()? '': $_POST['newpassword'] ?>">
            </div>

            <div class="form-group">
            <label for="confirmpassword">Confirm PassWord</label> <!--required-->
        <input type="text" class="form-control" id="confirmpassword" name="confirmpassword" value="<?php echo isFormValidated()? '': $_POST['confirmpassword'] ?>">
            </div>
           
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        
    </form>

    <div class="container mt-4">
        <a href="index.php" class="btn btn-info">Back to index</a> 
    </div>

















      
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>

<?php
db_disconnect($db);
?>