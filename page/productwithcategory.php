<?php

require_once('../database.php');


if ($_SERVER["REQUEST_METHOD"] == 'POST') {
} else {
    if (!isset($_GET['id'])) {
        redirect_to('homepage.php');
    }
    $id = $_GET['id'];
    $product_set = find_product_by_cateid($id);
}  ?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

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


    <link rel="stylesheet" href="css/page.css">
</head>


<body class="  index">
    <link rel="preload" as="script" href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/api-jquery.js?1640151112834" />
    <script src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/api-jquery.js?1640151112834" type="text/javascript"></script>

    <link rel="preload" as="script" href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo-index-js.js?1640151112834" />
    <script src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo-index-js.js?1640151112834" type="text/javascript"></script>



    <?php include('../shared/header.php') ?>
    <div class="fix-layout">
        <h1 class="hidden">Handicraft Shop</h1>






        <section class="awe-section-3">

            <div class="section_blogs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="evo-index-block-blogs">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="new_title">
                                            <h3><a href="tin-tuc" title="Kinh nghiệm hay"> Sản phẩm theo </a></h3>
                                        </div>
                                    </div>
                                    <div class="evo-index-product-contain ">
                                        <div class="evo-block-product slick-frame slick-initialized slick-slider slick-dotted" role="toolbar">
                                            <div aria-live="polite" class="slick-list draggable">
                                                <div class="slick-track " role="listbox">
                                                    <?php
                                                    // Duyệt qua kết quả của truy vấn và hiển thị sản phẩm
                                                    while ($product = mysqli_fetch_assoc($product_set)) {
                                                    ?>



                                                        <div class="evo-product-block-item slick-slide slick-current slick-active pl-3 m-2" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide10" style="width: 174px;">
                                                            <div class="product_thumb ">
                                                                <a class="primary_img " href="<?php echo 'productdetail.php?id='.$product['product_id']; ?>" title="Mẹt tre hoa thị 2 lớp" tabindex="0">
                                                                    <img class="img-fluid" src="<?php echo '../hinhanh/' . $product['image_url']; ?>">

                                                                </a>
                                                            </div>
                                                            <div class="product_content">
                                                                <a class="product_name" href="<?php echo 'productdetail.php?id='.$product['product_id']; ?>" title="<?php echo $product['product_name']; ?>" tabindex="0"> <?php echo $product['product_name']; ?></a>
                                                                <div class="price-container">

                                                                    <span class="new_price"><?php echo $product['price']; ?>₫</span>




                                                                </div>
                                                            </div>
                                                        </div>

                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>







    </div>

    <?php include('../shared/footer.php') ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
<?php
db_disconnect($db);
?>