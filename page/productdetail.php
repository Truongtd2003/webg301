<?php

require_once('../database.php');

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    
    }


else{
    if(!isset($_GET['id'])){
        redirect_to('../product.php');

   }
    $id = $_GET['id'];
    $product = find_product_by_id($id);
    $product_like = find_new_products();
    

}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Chi tiet san pham</title>
    <meta name="description" content="Mẹt tre hoa thị 2 lớp Chất liệu : Tre Màu sắc : Tự nhiên (Điểm hoa tiết hoa thị đen) Kích thước: 4 size Size S: D24 (Đường kính 24cm) Size M: D27 (Đường kính 27cm) Size L: D30 (Đường kính 30cm) Size XL: D33 (Đường kính 33cm) Hướng dẫn sử dụng và bảo quản sản phẩm Để sản phẩm nơi khô ráo, tránh các chất tẩy rửa Sử dụng ">
    <meta name="keywords" content="Mẹt tre hoa thị 2 lớp, Mẹt, rổ, rá, CHẤT LIỆU TRE, Handicraft Shop, handicraft-vietnam.com" />
    <link rel="canonical" href="https://handicraft-vietnam.com/met-tre-hoa-thi-2-lop" />
    <link rel="dns-prefetch" href="https://handicraft-vietnam.com">
    <link rel="dns-prefetch" href="//bizweb.dktcdn.net/">
    <link rel="dns-prefetch" href="//www.google-analytics.com/">
    <link rel="dns-prefetch" href="//www.googletagmanager.com/">
    <meta name='revisit-after' content='1 days' />
    <meta name="robots" content="noodp,index,follow" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="icon" href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/favicon.png?1640151112834" type="image/x-icon" />
    <meta property="og:type" content="product">
    <meta property="og:title" content="Mẹt tre hoa thị 2 lớp">
    <meta property="og:image" content="https://bizweb.dktcdn.net/thumb/grande/100/415/393/products/dsf5221.jpg?v=1622368406043">
    <meta property="og:image:secure_url" content="https://bizweb.dktcdn.net/thumb/grande/100/415/393/products/dsf5221.jpg?v=1622368406043">
    <meta property="og:image" content="https://bizweb.dktcdn.net/thumb/grande/100/415/393/products/dsf5217.jpg?v=1622368406043">
    <meta property="og:image:secure_url" content="https://bizweb.dktcdn.net/thumb/grande/100/415/393/products/dsf5217.jpg?v=1622368406043">
    <meta property="og:image" content="https://bizweb.dktcdn.net/thumb/grande/100/415/393/products/to-vua.jpg?v=1622368551547">
    <meta property="og:image:secure_url" content="https://bizweb.dktcdn.net/thumb/grande/100/415/393/products/to-vua.jpg?v=1622368551547">
    <meta property="og:price:amount" content="120.000">
    <meta property="og:price:currency" content="VND">
    <meta property="og:description" content="Mẹt tre hoa thị 2 lớp Chất liệu : Tre Màu sắc : Tự nhiên (Điểm hoa tiết hoa thị đen) Kích thước: 4 size Size S: D24 (Đường kính 24cm) Size M: D27 (Đường kính 27cm) Size L: D30 (Đường kính 30cm) Size XL: D33 (Đường kính 33cm) Hướng dẫn sử dụng và bảo quản sản phẩm Để sản phẩm nơi khô ráo, tránh các chất tẩy rửa Sử dụng ">
    <meta property="og:url" content="https://handicraft-vietnam.com/met-tre-hoa-thi-2-lop">
    <meta property="og:site_name" content="Handicraft Shop">
    <link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/bootstrap.scss.css?1640151112834" onload="this.rel='stylesheet'" />
    <link href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/bootstrap.scss.css?1640151112834" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/plugin.scss.css?1640151112834" onload="this.rel='stylesheet'" />
    <link href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/plugin.scss.css?1640151112834" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo-main.scss.css?1640151112834" onload="this.rel='stylesheet'" />
    <link href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo-main.scss.css?1640151112834" rel="stylesheet" type="text/css" media="all" />










    <link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo-products.scss.css?1640151112834" />
    <link href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/evo-products.scss.css?1640151112834" rel="stylesheet" type="text/css" media="all" />




    <link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/style_update.scss.css?1640151112834" />
    <link href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/style_update.scss.css?1640151112834" rel="stylesheet" type="text/css" media="all" />
    <!-- THIS IS A CUSTOM CSS -->
    <link href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/custom.css?1640151112834" rel="stylesheet" type="text/css" media="all" />





</head>

<body class="bg-body  product">
    <?php include('../shared/header.php') ?>






    <div class="fix-layout">

        <section class="bread-crumb margin-bottom-10">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                    </div>
                </div>
            </div>
        </section>
        <section class="product margin-top-10" itemscope itemtype="http://schema.org/Product">

            <div class="container">
                <div class="row details-product padding-bottom-10">
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 product-bottom">
                        <div class="product-white-bg">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 details-pro">
                                    <div class="product-top clearfix">
                                        <h1 class="title-head"><?php echo $product['product_name']; ?></h1>

                                        <div class="sku-product clearfix">
                                            <div class="item-sku">
                                                <span class="variant-sku" itemprop="sku" content="HST00070"></span>
                                                <span class="hidden" itemprop="brand" itemscope="" itemtype="https://schema.org/brand">Handicraft Shop</span>
                                            </div>
                                            <div class="item-sku">
                                                Thương hiệu:
                                                <span class="vendor">

                                                    Đang cập nhật

                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
                                    <div class="relative product-image-block">

                                        <div class="slider-big-video clearfix margin-bottom-10">
                                            <div class="slider slider-for slick-initialized slick-slider">

                                                <div class="fixs slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 100%;" tabindex="-1" role="option" aria-describedby="slick-slide10">
                                                    <img class="lazy loaded" src="<?php echo '../hinhanh/' . $product['image_url']; ?>"  >
                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6 details-pro">
                                    <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                        <link itemprop="url" href="https://handicraft-vietnam.com/met-tre-hoa-thi-2-lop">
                                        <div class="price-box clearfix">

                                            <span class="special-price">
                                                <span class="price product-price"><?php echo $product['price']; ?>₫</span>
                                                <meta itemprop="price" content="120000">
                                                <meta itemprop="priceCurrency" content="VND">
                                            </span> <!-- Giá Khuyến mại -->
                                            
                                           

                                            <meta itemprop="priceValidUntil" content="2030-11-05">
                                        </div>

                                        <div class="inventory_quantity">
                                            <span class="stock-brand-title">Tình trạng:</span>

                                            <span class="a-stock a2"><span class="a-stock">Còn hàng</span></span>

                                        </div>
                                    </div>
                                    <div class="form-product">
                                        <form enctype="" id="add-to-cart-form" action="#" method="" class="clearfix form-inline has-validation-callback">

                                            <div class="select-swatch">

                                                <div id="variant-swatch-0" class="swatch clearfix" data-option="option1" data-option-index="0">
                                                    <div class="header">Kích thước:</div>
                                                    <div class="select-swap">

                                                        <div data-value="size-s" class="n-sd swatch-element size-s ">
                                                            <input data-value="size-s" class="variant-0" id="swatch-0-size-s" type="radio" name="option1" value="Size S" checked="">

                                                            <label for="swatch-0-size-s">
                                                                Size S
                                                                <img class="crossed-out" src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/soldout.png?1640151112834" alt="Size S">
                                                                <img class="img-check" src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/select-pro.png?1640151112834" alt="Size S">
                                                            </label>

                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="clearfix form-group">
                                                <div class="qty-ant clearfix custom-btn-number">
                                                    <label>Số lượng:</label>
                                                    <div class="custom custom-btn-numbers form-control">
                                                       
                                                        <input type="text" class="qty input-text" id="qty" name="quantity" size="4" value="1" min="1" max="4" maxlength="3">
                                                        
                                                    </div>
                                                </div>
                                                <div class="btn-mua">

                                                    <button type="#"  class="btn btn-lg btn-gray "><span class="txt-main">Mua ngay với giá <b class="product-price">120.000₫</b></span><span class="text-add">Đặt mua giao hàng tận nơi</span></button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    <div class="call-and-payment">

                                        Hotline đặt hàng: <a href="tel:0968934892" title="0968934892"><i class="fa fa-phone-square" aria-hidden="true"></i> 0968 934 892</a>
                                        (7:30-22:00)

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-lg-9 col-md-9 margin-top-20">
                        <div class="product-white-bg">
                            <div class="product-tab e-tabs padding-bottom-10 evo-tab-product-mobile">
                                <ul class="tabs tabs-title clearfix hidden-xs">
                                    <li class="tab-link current" data-tab="tab-1">Mô tả</li>


                                </ul>

                                <div id="tab-1" class="tab-content active current">
                                    <a class="evo-product-tabs-header hidden-lg hidden-md hidden-sm" href="javascript:void(0);">
                                        <span>Mô tả</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5.658" height="9.903" viewBox="0 0 5.658 9.903">
                                            <path d="M5429 1331.94l4.451 4.451-4.451 4.452" stroke="#1c1c1c" stroke-linecap="round" fill="none" transform="translate(-5428.5 -1331.44)"></path>
                                        </svg>
                                    </a>
                                    <div class="rte">



                                        <p><b></b><?php echo $product['product_name']; ?></p>
                                        <p><strong>Chất liệu:</strong>: <?php echo $product['material']; ?></p>
                                        <p><strong>Xuất xứ: </strong>: <?php echo $product['origin']; ?></p>
                                        <p><strong>Chi Tiết: </strong>: <?php echo $product['description']; ?></p>
                                        
                                        <p><strong>Hướng dẫn sử dụng và bảo quản sản phẩm</strong></p>
                                        <p>Để sản phẩm nơi khô ráo, tránh các chất tẩy rửa</p>
                                        <p>Sử dụng khăn ẩm để lau các vết bẩn&nbsp;trong quá trình sử dụng</p>
                                        <p>Phơi nắng sau khi lau bằng khăn ẩm</p>
                                        <p><strong>Chính sách đặc biệt của chúng tôi sẽ xóa bỏ nỗi lo khi mua hàng của
                                                bạn</strong></p>
                                        <p>100% Ảnh chụp thật từ màu sắc, kích thước, chất liệu...</p>
                                        <p>Bảo hành 1 tháng, 1 đổi 1 nếu lỗi sản xuất trong vòng 48 tiếng</p>
                                        <p>Giao hàng tận nơi, thanh toán COD</p>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-lg-3 col-md-3 margin-top-20">
                        <div class="product-white-bg">





                            <div class="similar-product">
                                <div class="right-bestsell">
                                    <h2><a href="san-pham-moi" title="Bạn có thể thích">Bạn có thể thích</a></h2>
                                    <div class="list-bestsell">

                                    <?php
                                    $count = 0;
                                                // Duyệt qua kết quả của truy vấn và hiển thị sản phẩm
                                                while ($product = mysqli_fetch_assoc($product_like)) {
                                                    
                                                    if($count < 4){
                                                ?>
                                        <div class="evo-product-slide-item">
                                            <div class="product-img">

                                                <a href="/gio-dung-quan-ao-guot-co-nap" title="Giỏ guột có nắp (kèm quai xách)" class="image-resize">
                                                    <img class="lazy loaded" src="<?php echo '../hinhanh/' . $product['image_url']; ?>" >
                                                </a>
                                            </div>
                                            <div class="product-detail clearfix">
                                                <div class="pro-brand">

                                                    <a href="<?php echo 'productdetail.php?id='.$product['product_id']; ?>" title=""></a>

                                                </div>
                                                <h3 class="pro-name">
                                                    <a href="<?php echo 'productdetail.php?id='.$product['product_id']; ?>" title="Giỏ guột có nắp (kèm quai xách)"><?php echo $product['product_name'];?></a>
                                                </h3>
                                                <div class="box-pro-prices">
                                                    <p class="pro-price">


                                                   <?php echo $product['price'];?>₫


                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    
                                        <?php }$count++;
                                        } ?>

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


    <link rel="preload" as="script" href="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/main.js?1640151112834" />
    <script src="//bizweb.dktcdn.net/100/415/393/themes/805827/assets/main.js?1640151112834" type="text/javascript"></script>

    <link rel="preload" as="style" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
</body>

</html>