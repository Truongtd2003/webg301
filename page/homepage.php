<?php
require_once('../database.php');

$product_set = find_new_products(); 
$product_discount = find_discount_products();
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->

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



        <section class="bread-crumb margin-bottom-10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    
               
    
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../call/slider_1.jpg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../call/slider_2.jpg" class="d-block w-100 img-fluid " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../call/slider_3.jpg" class="d-block w-100 img-fluid " alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            </div>
            </div>
        </div>
        </section>



    


        <section class="awe-section-3">

            <div class="section_blogs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="evo-index-block-blogs">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="new_title">
                                            <h3><a href="tin-tuc" title="Kinh nghiệm hay"> Sản phẩm mới nhất </a></h3>
                                        </div>
                                    </div>
                                <div class="evo-index-product-contain ">
                                    <div class="evo-block-product slick-frame slick-initialized slick-slider slick-dotted" role="toolbar">
                                        <div aria-live="polite" class="slick-list draggable">
                                            <div class="slick-track "  role="listbox">
                                                <?php
                                                // Duyệt qua kết quả của truy vấn và hiển thị sản phẩm
                                                while ($product = mysqli_fetch_assoc($product_set)) {
                                                ?>
                                                    
                                               
                                                   
                                                <div class="evo-product-block-item slick-slide slick-current slick-active m-2" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide10" style="width: 169px;">
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


        <section class="awe-section-3">

            <div class="section_blogs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="evo-index-block-blogs">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="new_title">
                                            <h3><a href="tin-tuc" title="Kinh nghiệm hay"> Sản phẩm đang giảm giá  </a></h3>
                                        </div>
                                    </div>
                                <div class="evo-index-product-contain ">
                                    <div class="evo-block-product slick-frame slick-initialized slick-slider slick-dotted" role="toolbar">
                                        <div aria-live="polite" class="slick-list draggable">
                                            <div class="slick-track "  role="listbox">
                                                <?php
                                                // Duyệt qua kết quả của truy vấn và hiển thị sản phẩm
                                                while ($product = mysqli_fetch_assoc($product_discount)) {
                                                ?>
                                                    
                                               
                                                   
                                                <div class="evo-product-block-item slick-slide slick-current slick-active m-2" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide10" style="width: 169px;">
                                                    <div class="product_thumb ">
                                                        <a class="primary_img " href="<?php echo 'productdetail.php?id='.$product['product_id']; ?>" title="Mẹt tre hoa thị 2 lớp" tabindex="0">
                                                            <img class="img-fluid" src="<?php echo '../hinhanh/' . $product['image_url']; ?>">
                                                            
                                                        </a>


                                                        
                                                    </div>
                                                    <div class="product_content">
                                                        <a class="product_name" href="<?php echo 'productdetail.php?id='.$product['product_id']; ?>" title="<?php echo $product['product_name']; ?>" tabindex="0"> <?php echo $product['product_name']; ?></a>
                                                        <div class="price-container">

                                                            <span class="old_price"><?php echo $product['price']; ?>₫</span>

                                                            <span class="current_price">120.000₫</span>


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





        <section class="awe-section-9">
            <div class="section_three_banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slide-collection slick-initialized slick-slider"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>

                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 3870px; transform: translate3d(-1161px, 0px, 0px);" role="listbox">
                                        <div class="item slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                            <a href="#" title="Handicraft Shop" class="single_image_effect" tabindex="-1">
                                                <img class="lazy img-responsive center-block" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_2.jpg?1640151112834" alt="Handicraft Shop">
                                            </a>
                                        </div>
                                        <div class="item slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                            <a href="#" title="Handicraft Shop" class="single_image_effect" tabindex="-1">
                                                <img class="lazy img-responsive center-block" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_3.jpg?1640151112834" alt="Handicraft Shop">
                                            </a>
                                        </div>
                                        <div class="item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                            <a href="#" title="Handicraft Shop" class="single_image_effect" tabindex="-1">
                                                <img class="lazy img-responsive center-block" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_4.jpg?1640151112834" alt="Handicraft Shop">
                                            </a>
                                        </div>
                                        <div class="item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide60">
                                            <a href="#" title="Handicraft Shop" class="single_image_effect" tabindex="0">
                                                <img class="lazy img-responsive center-block loaded" src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_1.jpg?1640151112834" data-src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_1.jpg?1640151112834" alt="Handicraft Shop" data-was-processed="true">
                                            </a>
                                        </div>
                                        <div class="item slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide61">
                                            <a href="#" title="Handicraft Shop" class="single_image_effect" tabindex="0">
                                                <img class="lazy img-responsive center-block loaded" src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_2.jpg?1640151112834" data-src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_2.jpg?1640151112834" alt="Handicraft Shop" data-was-processed="true">
                                            </a>
                                        </div>
                                        <div class="item slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide62">
                                            <a href="#" title="Handicraft Shop" class="single_image_effect" tabindex="0">
                                                <img class="lazy img-responsive center-block loaded" src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_3.jpg?1640151112834" data-src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_3.jpg?1640151112834" alt="Handicraft Shop" data-was-processed="true">
                                            </a>
                                        </div>
                                        <div class="item slick-slide" data-slick-index="3" aria-hidden="true" style="width: 377px;" tabindex="-1" role="option" aria-describedby="slick-slide63">
                                            <a href="#" title="Handicraft Shop" class="single_image_effect" tabindex="-1">
                                                <img class="lazy img-responsive center-block loaded" src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_4.jpg?1640151112834" data-src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_4.jpg?1640151112834" alt="Handicraft Shop" data-was-processed="true">
                                            </a>
                                        </div>
                                        <div class="item slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                            <a href="#" title="Handicraft Shop" class="single_image_effect" tabindex="-1">
                                                <img class="lazy img-responsive center-block loaded" src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_1.jpg?1640151112834" data-src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_1.jpg?1640151112834" alt="Handicraft Shop" data-was-processed="true">
                                            </a>
                                        </div>
                                        <div class="item slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                            <a href="#" title="Handicraft Shop" class="single_image_effect" tabindex="-1">
                                                <img class="lazy img-responsive center-block loaded" src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_2.jpg?1640151112834" data-src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_2.jpg?1640151112834" alt="Handicraft Shop" data-was-processed="true">
                                            </a>
                                        </div>
                                        <div class="item slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 377px;" tabindex="-1">
                                            <a href="#" title="Handicraft Shop" class="single_image_effect" tabindex="-1">
                                                <img class="lazy img-responsive center-block loaded" src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_3.jpg?1640151112834" data-src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo_banner_two_3.jpg?1640151112834" alt="Handicraft Shop" data-was-processed="true">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="awe-section-3">

            <div class="section_blogs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="evo-index-block-blogs">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="new_title">
                                            <h3><a href="tin-tuc" title="Kinh nghiệm hay">Kinh nghiệm hay</a></h3>
                                        </div>
                                    </div>

                                    <div class="col-md-5 col-md-push-7">
                                        <div class="big-news">

                                            <div class="news-items">
                                                <a href="/nganh-may-tre-dan-viet-nam-tiem-nang-phat-trien-con-rat-lon" title="Ngành mây, tre đan Việt Nam: Tiềm năng phát triển còn rất lớn" class="clearfix evo-item-blogs">
                                                    <div class="evo-article-image">

                                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/415/393/articles/1d.jpg?v=1611308116537">

                                                    </div>
                                                    <div class="evo-article-content">
                                                        <h3>Ngành mây, tre đan Việt Nam: Tiềm năng phát
                                                            triển còn rất lớn</h3>
                                                        <p>Hiện nay, cả nước có khoảng trên 1.000 làng nghề mây tre đan,
                                                            chiếm 24% tổng số các làng nghề trong cả nước...</p>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-7 col-md-pull-5">
                                        <div class="list-news">

                                            <div class="news-items">
                                                <a href="/nganh-may-tre-dan-viet-nam-tiem-nang-phat-trien-con-rat-lon" title="Ngành mây, tre đan Việt Nam: Tiềm năng phát triển còn rất lớn" class="clearfix evo-item-blogs">
                                                    <div class="evo-article-image">

                                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/415/393/articles/1d.jpg?v=1611308116537">

                                                    </div>
                                                    <div class="evo-article-content">
                                                        <h3>Ngành mây, tre đan Việt Nam: Tiềm năng phát
                                                            triển còn rất lớn</h3>
                                                        <p>Hiện nay, cả nước có khoảng trên 1.000 làng nghề mây tre đan,
                                                            chiếm 24% tổng số các làng nghề trong cả nước...</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="news-items">
                                                <a href="/thuc-trang-nganh-may-tre-dan-viet-nam" title="Thực trạng ngành mây tre đan Việt Nam" class="clearfix evo-item-blogs">
                                                    <div class="evo-article-image">

                                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/415/393/articles/1d.jpg?v=1611308116537">

                                                    </div>
                                                    <div class="evo-article-content">
                                                        <h3>Thực trạng ngành mây tre đan Việt Nam</h3>
                                                        <p>Thực trạng đáng lo
                                                            Trong nhiều thập kỷ qua, do tình hình khai thác và xuất khẩu
                                                            nguyên liệu thô một cách ồ ...</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="news-items">
                                                <a href="/dinh-cao-nghe-thuat-dan-may-tre-o-viet-nam" title="Đỉnh cao nghệ thuật đan mây tre ở Việt Nam" class="clearfix evo-item-blogs">
                                                    <div class="evo-article-image">

                                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/415/393/articles/1d.jpg?v=1611308116537">

                                                    </div>
                                                    <div class="evo-article-content">
                                                        <h3>Đỉnh cao nghệ thuật đan mây tre ở Việt Nam</h3>
                                                        <p>Trải qua hàng trăm năm phát triển, làng nghề mây tre đan Phú
                                                            Vinh (xã Phú Nghĩa, huyện Chương Mỹ, Hà Nội) l...</p>
                                                    </div>
                                                </a>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>