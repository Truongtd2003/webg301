<?php
require_once('../database.php');
//require_once('../lib/initialize.php');


$errors = [];


function isFormValidated()
{
    global $errors;
    return count($errors) == 0;
}

function checkForm()
{
    global $errors;





    if (empty($_POST['password'])) {
        $errors[] = 'Password is required';
    }

    if (empty($_POST['email'])) {
        $errors[] = 'Email is required';
    }

    $email = $_POST['email'];
        
        $hashed_password = hash('sha256', $_POST['password']);

        

        if(!verify_login($email, $hashed_password) && !empty($_POST['password']) ){

            $errors[] = 'Incorrect email or password';

        }
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    checkForm();
    if (isFormValidated()) {
        $email =  $_POST['email'];
        $admin = find_admin_by_email($email);
        session_start();
        $_SESSION['admin'] = $admin['admin_id'];
      


       header("Location: ../admin/index.php");
     

        
    }
}




?>


<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>ABC</title>


    <link href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/bootstrap.scss.css?1640151112834" rel="stylesheet" type="text/css" media="all" />

    <link href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/plugin.scss.css?1640151112834" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo-main.scss.css?1640151112834" onload="this.rel='stylesheet'" />
    <link href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo-main.scss.css?1640151112834" rel="stylesheet" type="text/css" media="all" />

    <link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo-index.scss.css?1640151112834" onload="this.rel='stylesheet'" />
    <link href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo-index.scss.css?1640151112834" rel="stylesheet" type="text/css" media="all" />

    <link rel="preload" as="style" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

    <link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/style_update.scss.css?1640151112834" />
    <link href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/style_update.scss.css?1640151112834" rel="stylesheet" type="text/css" media="all" />
    <!-- THIS IS A CUSTOM CSS -->
    <style>
        .login--notes {
            text-align: center;
            color: #999;
            font-size: 12px;
            margin-top: 10px;
            margin-bottom: 0;
            line-height: 1.1;
        }
    </style>
</head>

<body class="  index">
    <link rel="preload" as="script" href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/api-jquery.js?1640151112834" />
    <script src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/api-jquery.js?1640151112834" type="text/javascript"></script>

    <link rel="preload" as="script" href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo-index-js.js?1640151112834" />
    <script src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo-index-js.js?1640151112834" type="text/javascript"></script>


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
   

    

    <div class="container margin-bottom-20 margin-top-30">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="page-login account-box-shadow">
                    <div id="login">
                        <div class="text-center margin-bottom-30">
                            <h1 class="title-head">Đăng nhập tài khoản</h1>
                        </div>
                        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" id="customer_login" accept-charset="UTF-8" class="has-validation-callback"><input name="FormType" type="hidden" value="customer_login"><input name="utf8" type="hidden" value="true">
                            <div class="form-signup">

                            </div>
                            <div class="form-signup clearfix">
                                <fieldset class="form-group margin-bottom-10">
                                    <label>Email<span class="required">*</span></label>
                                    <input autocomplete="off" placeholder="Nhập Địa chỉ Email" type="text" class="form-control form-control-lg" value="<?php echo isFormValidated() ? '' : $_POST['email'] ?>" name="email" id="customer_email"  >
                                </fieldset>
                                <fieldset class="form-group margin-bottom-0">
                                    <label>Mật khẩu<span class="required">*</span></label>
                                    <input autocomplete="off" placeholder="Nhập Mật khẩu" type="text" class="form-control form-control-lg" value="<?php echo isFormValidated() ? '' : $_POST['password'] ?>" name="password" id="customer_password">
                                </fieldset>
                                <div class="clearfix"></div>
                                <p class="text-left recover">
                                    <a href="#recover" class="btn-link-style" onclick="showRecoverPasswordForm();" title="Quên mật khẩu?">Quên mật khẩu?</a>
                                </p>
                                <div class="pull-xs-left text-center" style="margin-top: 15px;">
                                    <button class="btn btn-style btn-blues" type="submit" value="Đăng nhập">Đăng
                                        nhập</button>
                                </div>
                                <p class="login--notes">Handicraft Shop cam kết bảo mật và sẽ không bao giờ đăng
                                    <br>hay chia sẻ thông tin mà chưa có được sự đồng ý của bạn.
                                </p>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                        <div class="text-login text-center">
                            <p>
                                Bạn chưa có tài khoản. Đăng ký <a href="/account/register" title="Đăng ký">tại
                                    đây.</a>
                            </p>
                        </div>
                    </div>
                    <div id="recover-password" class="form-signup" style="display:none;">
                        <div class="text-center">
                            <h2 class="title-head"><span>Đặt lại mật khẩu</span></h2>
                        </div>
                        <div class="fix-sblock text-center">
                            Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email.
                        </div>
                        <form method="post" action="/account/recover" id="recover_customer_password" accept-charset="UTF-8" class="has-validation-callback"><input name="FormType" type="hidden" value="recover_customer_password"><input name="utf8" type="hidden" value="true">
                            <div class="form-signup aaaaaaaa">

                            </div>

                            <div class="form-signup clearfix">
                                <fieldset class="form-group">
                                    <label>Email<span class="required">*</span></label>
                                    <input type="email" class="form-control form-control-lg" value="" name="Email" id="recover-email" placeholder="Nhập địa chỉ Email" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg="Email sai định dạng" required="">
                                </fieldset>
                            </div>
                            <div class="action_bottom text-center">
                                <button class="btn btn-style btn-blues" style="margin-top: 15px;" type="submit" value="Lấy lại mật khẩu">Lấy lại mật khẩu</button>
                            </div>
                            <div class="text-login text-center">
                                <p>Quay lại <a href="javascript:;" class="btn-link-style btn-register" onclick="hideRecoverPasswordForm();" title="Quay lại">tại đây.</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <?php include('footer.php')  ?>


</body>

</html>