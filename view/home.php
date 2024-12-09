<?php
include "view/header.php";
?>
<!-- CONTENT AREA -->

<div class="content-area">



    <!-- PAGE -->

    <section class="page-section no-padding slider">

        <div class="container full-width">

            <div class="main-slider">

                <div class="owl-carousel" id="main-slider">



                    <!-- Slide 2 -->

                    <div class="item slide2 ver2">

                        <div class="caption">

                            <div class="container">

                                <div class="div-table">

                                    <div class="div-cell">

                                        <div class="caption-content">

                                            <h2 class="caption-subtitle">

                                                <span class="span-caption">Chúng tôi sẽ theo trong suốt quá trình</span>
                                                Tìm ngôi nhà mơ ước của bạn

                                            </h2>

                                            <p class="caption-text">

                                                Duy nhất trong tháng 12, HPV chính thức triển khai chương trình khuyến mại và hoàn tiền cực khủng chưa từng có. Đặc biệt, khi nạp tiền trong thời gian diễn ra chương trình, Quý khách sẽ được nhận ngay các quà tặng hấp dẫn và giá trị.

                                            </p>

                                            <p class="caption-text">

                                                <a class="btn btn-theme ripple-effect btn-theme-md" href="index.php?act=batdongsan"><i class="fa fa-list">&nbsp;</i> Xem tất cả bất động sản</a>

                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- /Slide 2 -->

                    <div class="item slide2 ver2">

                        <div class="caption">

                            <div class="container">

                                <div class="div-table">

                                    <div class="div-cell">

                                        <div class="caption-content">

                                            <!-- Search form -->



                                            <!-- /Search form -->



                                            <h2 class="caption-subtitle">

                                                <span class="span-caption">Chúng tôi sẽ theo trong suốt quá trình</span>
                                                Tìm ngôi nhà mơ ước của bạn

                                            </h2>

                                            <p class="caption-text">

                                                Duy nhất trong tháng 12, HPV chính thức triển khai chương trình khuyến mại và hoàn tiền cực khủng chưa từng có. Đặc biệt, khi nạp tiền trong thời gian diễn ra chương trình, Quý khách sẽ được nhận ngay các quà tặng hấp dẫn và giá trị.

                                            </p>

                                            <p class="caption-text">

                                                <a class="btn btn-theme ripple-effect btn-theme-md" href="index.php?act=batdongsan"><i class="fa fa-list">&nbsp;</i> Xem tất cả bất động sản</a>

                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Slide 3 -->


                    <!-- /Slide 3 -->



                    <!-- Slide 4 -->

                    <div class="item slide4 ver4">

                        <div class="caption">

                            <div class="container">

                                <div class="div-table">

                                    <div class="div-cell">

                                        <div class="caption-content">

                                            <h2 class="caption-title">Chất lượng không thể cưỡng lại</h2>

                                            <h3 class="caption-subtitle"><span>Cung cấp các giao dịch tốt nhất</span></h3>

                                            <p class="caption-text">

                                                Duy nhất trong tháng 12, HPV chính thức triển khai chương trình khuyến mại và hoàn tiền cực khủng chưa từng có. Đặc biệt, khi nạp tiền trong thời gian diễn ra chương trình, Quý khách sẽ được nhận ngay các quà tặng hấp dẫn và giá trị.

                                            </p>

                                            <p class="caption-text">

                                                <a class="btn btn-theme ripple-effect btn-theme-md" href="index.php?act=batdongsan">Xem bất động sản</a>

                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- /Slide 4 -->



                </div>

            </div>



        </div>

    </section>

    <!-- /PAGE -->



    <!-- PAGE -->

    <section class="page-section">

        <div class="container">



            <h2 class="section-title wow fadeInUp" data-wow-offset="70" data-wow-delay="100ms">

                <small>Bất động sản cao cấp được lựa chọn cẩn thận</small>

                <span>Ưu đãi bất động sản gần đây nhất dành cho bạn</span>

            </h2>



            <div class="tab-content wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">



                <!-- tab 2 -->

                <div class="tab-pane fade active in" id="tab-2">



                    <div class="swiper swiper--offers-popular">

                        <div class="swiper-container">



                            <div class="swiper-wrapper">

                                <!-- Slides -->

                                <?php

                                foreach ($ds_bds as $bds) {
                                    extract($bds);
                                    $linkbds = "index.php?act=batdongsanchitiet&idbds=" . $id;
                                    echo '
                <div class="swiper-slide">
                                

                <div   class="thumbnail no-border no-padding thumbnail-property-card">

                    <div class="media">

                        <span class="p-price">' . $price . ' </span>

                        <a class="media-link" data-gal="prettyPhoto" href="' . $img . '">

                            <img src="' . $img . '" alt=""/>

                            <span class="icon-view"><strong><i class="fa fa-arrows-alt"></i></strong></span></a>

                    </div>

                    <div class="caption text-center">

                        <h4 id="ten_bds" class="caption-title"><a href="#">' . $name . '</a></h4>

                        <div id="diachibds" class="caption-text">' . $location . '</div>

                        <div class="buttons">

                            <a class="btn btn-theme ripple-effect" href="' . $linkbds . '">xem ngay</a>

                        </div>

                        <table class="table">

                            

                        </table>

                    </div>

                </div>

            </div>
                ';
                                }
                                ?>

                            </div>



                        </div>



                        <!-- If we need navigation buttons -->

                        <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>

                        <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>



                    </div>



                </div>





            </div>



        </div>

    </section>

    <!-- /PAGE -->



    <!-- PAGE -->

    <section class="page-section">

        <div class="container">



            <h2 class="section-title wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">

                <small>Cung cấp toàn bộ bất động sản</small>

                <span>Bạn đang tìm kiếm cái gì? Chúng tôi có nó.</span>

            </h2>



            <div class="tabs awesome wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">

                <ul id="tabs1" class="nav">
                    <?php
                    foreach ($loaibds as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=batdongsan&id_loaibds=" . $id;
                        if (isset($linkdm)) {
                            $current = "current";
                        } else {
                            $current = "";
                        }
                        echo '<li class="dress ' . $current . ' "><a href="' . $linkdm . '" data-filter="*">' . $name . '</a></li>';
                    }
                    ?>


                </ul>

            </div>



            <div class="tab-content wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">

                <!-- tab 1 -->

                <div class="tab-pane fade" id="tab-x1">

                    <div class="property-big-card">

                        <div class="row">

                            <div class="col-md-3">

                                <div class="tabs awesome-sub">

                                    <ul id="tabs4" class="nav">
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x1x1" data-toggle="tab">View Biển</a></li>
                                        <!--

                                    -->
                                        <li class="active"><a href="#tab-x1x2" data-toggle="tab">Căn hộ</a></li>
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x1x3" data-toggle="tab">Khu dân cư cao cấp</a></li>
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x1x4" data-toggle="tab">Căn hộ tương lai</a></li>
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x1x4" data-toggle="tab">Căn hộ phong cách</a></li>

                                    </ul>

                                </div>

                            </div>

                            <div class="col-md-9">



                                <!-- Sub tabs content -->

                                <div class="tab-content">



                                    <div class="tab-content">



                                        <div class="tab-pane fade" id="tab-x1x1">

                                            <div class="row">

                                                <div class="col-md-8">

                                                    <!-- Swiper -->

                                                    <div class="swiper-container" id="swiperSlider1x1">

                                                        <div class="swiper-wrapper">

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="view/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                            </div>

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                            </div>

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                            </div>

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                            </div>

                                                        </div>

                                                        <!-- Add Pagination -->

                                                        <div class="row property-thumbnails"></div>

                                                    </div>

                                                </div>

                                                <div class="col-md-4">

                                                    <div class="property-details">

                                                        <div class="price">

                                                            <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                        </div>

                                                        <div class="list">

                                                            <ul>

                                                                <li>rộng </li>

                                                                <li>sạch sẽ</li>

                                                                <li>đầy đủ tiện nghi</li>

                                                                <li>view siêu đẹp</li>

                                                                <li>nhiều cây xanh</li>

                                                                <li>mua bán uy tín</li>

                                                            </ul>

                                                        </div>

                                                        <div class="button">

                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane fade active in" id="tab-x1x2">

                                            <div class="row">

                                                <div class="col-md-8">

                                                    <!-- Swiper -->

                                                    <div class="swiper-container" id="swiperSlider1x2">

                                                        <div class="swiper-wrapper">

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="view/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                            </div>

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                            </div>

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                            </div>

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                            </div>

                                                        </div>

                                                        <!-- Add Pagination -->

                                                        <div class="row property-thumbnails"></div>

                                                    </div>

                                                </div>

                                                <div class="col-md-4">

                                                    <div class="property-details">

                                                        <div class="price">

                                                            <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                        </div>

                                                        <div class="list">

                                                            <ul>

                                                                <li>rộng </li>

                                                                <li>sạch sẽ</li>

                                                                <li>đầy đủ tiện nghi</li>

                                                                <li>view siêu đẹp</li>

                                                                <li>nhiều cây xanh</li>

                                                                <li>mua bán uy tín</li>

                                                            </ul>

                                                        </div>

                                                        <div class="button">

                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="tab-x1x3">

                                            <div class="row">

                                                <div class="col-md-8">

                                                    <!-- Swiper -->

                                                    <div class="swiper-container" id="swiperSlider1x3">

                                                        <div class="swiper-wrapper">

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                            </div>

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                            </div>

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                            </div>

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                            </div>

                                                        </div>

                                                        <!-- Add Pagination -->

                                                        <div class="row property-thumbnails"></div>

                                                    </div>

                                                </div>

                                                <div class="col-md-4">

                                                    <div class="property-details">

                                                        <div class="price">

                                                            <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                        </div>

                                                        <div class="list">

                                                            <ul>

                                                                <li>rộng </li>

                                                                <li>sạch sẽ</li>

                                                                <li>đầy đủ tiện nghi</li>

                                                                <li>view siêu đẹp</li>

                                                                <li>nhiều cây xanh</li>

                                                                <li>mua bán uy tín</li>

                                                            </ul>

                                                        </div>

                                                        <div class="button">

                                                            <a href="index.php?act=batdongsan" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="tab-x1x4">

                                            <div class="row">

                                                <div class="col-md-8">

                                                    <!-- Swiper -->

                                                    <div class="swiper-container" id="swiperSlider1x4">

                                                        <div class="swiper-wrapper">

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                            </div>

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                            </div>

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                            </div>

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                            </div>

                                                        </div>

                                                        <!-- Add Pagination -->

                                                        <div class="row property-thumbnails"></div>

                                                    </div>

                                                </div>

                                                <div class="col-md-4">

                                                    <div class="property-details">

                                                        <div class="price">

                                                            <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                        </div>

                                                        <div class="list">

                                                            <ul>

                                                                <li>rộng </li>

                                                                <li>sạch sẽ</li>

                                                                <li>đầy đủ tiện nghi</li>

                                                                <li>view siêu đẹp</li>

                                                                <li>nhiều cây xanh</li>

                                                                <li>mua bán uy tín</li>

                                                            </ul>

                                                        </div>

                                                        <div class="button">

                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="tab-x1x5">

                                            <div class="row">

                                                <div class="col-md-8">

                                                    <!-- Swiper -->

                                                    <div class="swiper-container" id="swiperSlider1x5">

                                                        <div class="swiper-wrapper">

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="view/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                            </div>

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                            </div>

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                            </div>

                                                            <div class="swiper-slide">

                                                                <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                                <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                            </div>

                                                        </div>

                                                        <!-- Add Pagination -->

                                                        <div class="row property-thumbnails"></div>

                                                    </div>

                                                </div>

                                                <div class="col-md-4">

                                                    <div class="property-details">

                                                        <div class="price">

                                                            <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                        </div>

                                                        <div class="list">

                                                            <ul>

                                                                <li>rộng </li>

                                                                <li>sạch sẽ</li>

                                                                <li>đầy đủ tiện nghi</li>

                                                                <li>view siêu đẹp</li>

                                                                <li>nhiều cây xanh</li>

                                                                <li>mua bán uy tín</li>

                                                            </ul>

                                                        </div>

                                                        <div class="button">

                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>



                                    </div>



                                </div>

                                <!-- /Sub tabs content -->



                            </div>

                        </div>

                    </div>

                </div>



                <!-- tab 2 -->

                <div class="tab-pane fade active in" id="tab-x2">



                    <div class="property-big-card">

                        <div class="row">

                            <div class="col-md-3">

                                <div class="tabs awesome-sub">

                                    <ul id="tabs-x2" class="nav">
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x2x1" data-toggle="tab">View Biển</a></li>
                                        <!--

                                    -->
                                        <li class="active"><a href="#tab-x2x2" data-toggle="tab">Ban công rộng </a></li>
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x2x3" data-toggle="tab">Đất mặt đường</a></li>
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x2x4" data-toggle="tab">Đất trồng trọt</a></li>
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x2x5" data-toggle="tab">Khu nhà giàu</a></li>

                                    </ul>

                                </div>

                            </div>

                            <div class="col-md-9">



                                <!-- Sub tabs content -->

                                <div class="tab-content">



                                    <div class="tab-pane fade" id="tab-x2x1">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <!-- Swiper -->

                                                <div class="swiper-container" id="swiperSlider2x1">

                                                    <div class="swiper-wrapper">

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                        </div>

                                                    </div>

                                                    <!-- Add Pagination -->

                                                    <div class="row property-thumbnails"></div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="property-details">

                                                    <div class="price">

                                                        <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                    </div>

                                                    <div class="list">

                                                        <ul>

                                                            <li>rộng </li>

                                                            <li>sạch sẽ</li>

                                                            <li>đầy đủ tiện nghi</li>

                                                            <li>view siêu đẹp</li>

                                                            <li>nhiều cây xanh</li>

                                                            <li>mua bán uy tín</li>

                                                        </ul>

                                                    </div>

                                                    <div class="button">

                                                        <a href="index.php?act=batdongsan" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade active in" id="tab-x2x2">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <!-- Swiper -->

                                                <div class="swiper-container" id="swiperSlider2x2">

                                                    <div class="swiper-wrapper">

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                        </div>

                                                    </div>

                                                    <!-- Add Pagination -->

                                                    <div class="row property-thumbnails"></div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="property-details">

                                                    <div class="price">

                                                        <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                    </div>

                                                    <div class="list">

                                                        <ul>

                                                            <li>rộng </li>

                                                            <li>sạch sẽ</li>

                                                            <li>đầy đủ tiện nghi</li>

                                                            <li>view siêu đẹp</li>

                                                            <li>nhiều cây xanh</li>

                                                            <li>mua bán uy tín</li>

                                                        </ul>

                                                    </div>

                                                    <div class="button">

                                                        <a href="index.php?act=batdongsan" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="tab-x2x3">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <!-- Swiper -->

                                                <div class="swiper-container" id="swiperSlider2x3">

                                                    <div class="swiper-wrapper">

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="view/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                        </div>

                                                    </div>

                                                    <!-- Add Pagination -->

                                                    <div class="row property-thumbnails"></div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="property-details">

                                                    <div class="price">

                                                        <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                    </div>

                                                    <div class="list">

                                                        <ul>

                                                            <li>rộng </li>

                                                            <li>sạch sẽ</li>

                                                            <li>đầy đủ tiện nghi</li>

                                                            <li>view siêu đẹp</li>

                                                            <li>nhiều cây xanh</li>

                                                            <li>mua bán uy tín</li>

                                                        </ul>

                                                    </div>

                                                    <div class="button">

                                                        <a href="index.php?act=batdongsan" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="tab-x2x4">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <!-- Swiper -->

                                                <div class="swiper-container" id="swiperSlider2x4">

                                                    <div class="swiper-wrapper">

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="view/assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                        </div>

                                                    </div>

                                                    <!-- Add Pagination -->

                                                    <div class="row property-thumbnails"></div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="property-details">

                                                    <div class="price">

                                                        <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                    </div>

                                                    <div class="list">

                                                        <ul>

                                                            <li>rộng </li>

                                                            <li>sạch sẽ</li>

                                                            <li>đầy đủ tiện nghi</li>

                                                            <li>view siêu đẹp</li>

                                                            <li>nhiều cây xanh</li>

                                                            <li>mua bán uy tín</li>

                                                        </ul>

                                                    </div>

                                                    <div class="button">

                                                        <a href="index.php?act=batdongsan" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="tab-x2x5">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <!-- Swiper -->

                                                <div class="swiper-container" id="swiperSlider2x5">

                                                    <div class="swiper-wrapper">

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                        </div>

                                                    </div>

                                                    <!-- Add Pagination -->

                                                    <div class="row property-thumbnails"></div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="property-details">

                                                    <div class="price">

                                                        <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                    </div>

                                                    <div class="list">

                                                        <ul>

                                                            <li>rộng </li>

                                                            <li>sạch sẽ</li>

                                                            <li>đầy đủ tiện nghi</li>

                                                            <li>view siêu đẹp</li>

                                                            <li>nhiều cây xanh</li>

                                                            <li>mua bán uy tín</li>

                                                        </ul>

                                                    </div>

                                                    <div class="button">

                                                        <a href="index.php?act=batdongsan" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                </div>

                                <!-- /Sub tabs content -->



                            </div>

                        </div>

                    </div>



                </div>



                <!-- tab 3 -->

                <div class="tab-pane fade" id="tab-x3">



                    <div class="property-big-card">

                        <div class="row">

                            <div class="col-md-3">

                                <div class="tabs awesome-sub">

                                    <ul id="tabs-x3" class="nav">
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x3x1" data-toggle="tab">Luxury Mansion</a></li>
                                        <!--

                                    -->
                                        <li class="active"><a href="#tab-x3x2" data-toggle="tab">Elegant Apartment</a></li>
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x3x3" data-toggle="tab">Sophisticated Residence</a></li>
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x3x4" data-toggle="tab">Futuristic Apartment</a></li>
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x3x5" data-toggle="tab">Stylish Apartment</a></li>

                                    </ul>

                                </div>

                            </div>

                            <div class="col-md-9">



                                <!-- Sub tabs content -->

                                <div class="tab-content">



                                    <div class="tab-pane fade" id="tab-x3x1">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <!-- Swiper -->

                                                <div class="swiper-container" id="swiperSlider3x1">

                                                    <div class="swiper-wrapper">

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                        </div>

                                                    </div>

                                                    <!-- Add Pagination -->

                                                    <div class="row property-thumbnails"></div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="property-details">

                                                    <div class="price">

                                                        <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                    </div>

                                                    <div class="list">

                                                        <ul>

                                                            <li>rộng </li>

                                                            <li>sạch sẽ</li>

                                                            <li>đầy đủ tiện nghi</li>

                                                            <li>view siêu đẹp</li>

                                                            <li>nhiều cây xanh</li>

                                                            <li>mua bán uy tín</li>

                                                        </ul>

                                                    </div>

                                                    <div class="button">

                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade active in" id="tab-x3x2">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <!-- Swiper -->

                                                <div class="swiper-container" id="swiperSlider3x2">

                                                    <div class="swiper-wrapper">

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                        </div>

                                                    </div>

                                                    <!-- Add Pagination -->

                                                    <div class="row property-thumbnails"></div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="property-details">

                                                    <div class="price">

                                                        <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                    </div>

                                                    <div class="list">

                                                        <ul>

                                                            <li>rộng </li>

                                                            <li>sạch sẽ</li>

                                                            <li>đầy đủ tiện nghi</li>

                                                            <li>view siêu đẹp</li>

                                                            <li>nhiều cây xanh</li>

                                                            <li>mua bán uy tín</li>

                                                        </ul>

                                                    </div>

                                                    <div class="button">

                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="tab-x3x3">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <!-- Swiper -->

                                                <div class="swiper-container" id="swiperSlider3x3">

                                                    <div class="swiper-wrapper">

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                        </div>

                                                    </div>

                                                    <!-- Add Pagination -->

                                                    <div class="row property-thumbnails"></div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="property-details">

                                                    <div class="price">

                                                        <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                    </div>

                                                    <div class="list">

                                                        <ul>

                                                            <li>rộng </li>

                                                            <li>sạch sẽ</li>

                                                            <li>đầy đủ tiện nghi</li>

                                                            <li>view siêu đẹp</li>

                                                            <li>nhiều cây xanh</li>

                                                            <li>mua bán uy tín</li>

                                                        </ul>

                                                    </div>

                                                    <div class="button">

                                                        <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="tab-x3x4">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <!-- Swiper -->

                                                <div class="swiper-container" id="swiperSlider3x4">

                                                    <div class="swiper-wrapper">

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                        </div>

                                                    </div>

                                                    <!-- Add Pagination -->

                                                    <div class="row property-thumbnails"></div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="property-details">

                                                    <div class="price">

                                                        <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                    </div>

                                                    <div class="list">

                                                        <ul>

                                                            <li>rộng </li>

                                                            <li>sạch sẽ</li>

                                                            <li>đầy đủ tiện nghi</li>

                                                            <li>view siêu đẹp</li>

                                                            <li>nhiều cây xanh</li>

                                                            <li>mua bán uy tín</li>

                                                        </ul>

                                                    </div>

                                                    <div class="button">

                                                        <a href="index.php?act=batdongsan" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="tab-x3x5">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <!-- Swiper -->

                                                <div class="swiper-container" id="swiperSlider3x5">

                                                    <div class="swiper-wrapper">

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                        </div>

                                                    </div>

                                                    <!-- Add Pagination -->

                                                    <div class="row property-thumbnails"></div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="property-details">

                                                    <div class="price">

                                                        <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                    </div>

                                                    <div class="list">

                                                        <ul>

                                                            <li>rộng </li>

                                                            <li>sạch sẽ</li>

                                                            <li>đầy đủ tiện nghi</li>

                                                            <li>view siêu đẹp</li>

                                                            <li>nhiều cây xanh</li>

                                                            <li>mua bán uy tín</li>

                                                        </ul>

                                                    </div>

                                                    <div class="button">

                                                        <a href="index.php?act=batdongsan" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                </div>

                                <!-- /Sub tabs content -->



                            </div>

                        </div>

                    </div>



                </div>



                <!-- tab 4 -->

                <div class="tab-pane fade" id="tab-x4">



                    <div class="property-big-card">

                        <div class="row">

                            <div class="col-md-3">

                                <div class="tabs awesome-sub">

                                    <ul id="tabs-x4" class="nav">
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x4x1" data-toggle="tab">biệt thự sang trọng</a></li>
                                        <!--

                                    -->
                                        <li class="active"><a href="#tab-x4x2" data-toggle="tab">Căn hộ thanh lịch</a></li>
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x4x3" data-toggle="tab">Khu dân cư cao cấp</a></li>
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x4x4" data-toggle="tab">Căn hộ tương lai</a></li>
                                        <!--

                                    -->
                                        <li class=""><a href="#tab-x4x5" data-toggle="tab"> Căn hộ phong cách</a></li>

                                    </ul>

                                </div>

                            </div>

                            <div class="col-md-9">



                                <!-- Sub tabs content -->

                                <div class="tab-content">



                                    <div class="tab-pane fade" id="tab-x4x1">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <!-- Swiper -->

                                                <div class="swiper-container" id="swiperSlider4x1">

                                                    <div class="swiper-wrapper">

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                        </div>

                                                    </div>

                                                    <!-- Add Pagination -->

                                                    <div class="row property-thumbnails"></div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="property-details">

                                                    <div class="price">

                                                        <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                    </div>

                                                    <div class="list">

                                                        <ul>

                                                            <li>rộng </li>

                                                            <li>sạch sẽ</li>

                                                            <li>đầy đủ tiện nghi</li>

                                                            <li>view siêu đẹp</li>

                                                            <li>nhiều cây xanh</li>

                                                            <li>mua bán uy tín</li>

                                                        </ul>

                                                    </div>

                                                    <div class="button">

                                                        <a href="index.php?act=batdongsan" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade active in" id="tab-x4x2">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <!-- Swiper -->

                                                <div class="swiper-container" id="swiperSlider4x2">

                                                    <div class="swiper-wrapper">

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                        </div>

                                                    </div>

                                                    <!-- Add Pagination -->

                                                    <div class="row property-thumbnails"></div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="property-details">

                                                    <div class="price">

                                                        <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                    </div>

                                                    <div class="list">

                                                        <ul>

                                                            <li>rộng </li>

                                                            <li>sạch sẽ</li>

                                                            <li>đầy đủ tiện nghi</li>

                                                            <li>view siêu đẹp</li>

                                                            <li>nhiều cây xanh</li>

                                                            <li>mua bán uy tín</li>

                                                        </ul>

                                                    </div>

                                                    <div class="button">

                                                        <a href="index.php?act=batdongsan" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="tab-x4x3">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <!-- Swiper -->

                                                <div class="swiper-container" id="swiperSlider4x3">

                                                    <div class="swiper-wrapper">

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                        </div>

                                                    </div>

                                                    <!-- Add Pagination -->

                                                    <div class="row property-thumbnails"></div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="property-details">

                                                    <div class="price">

                                                        <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                    </div>

                                                    <div class="list">

                                                        <ul>

                                                            <li>rộng </li>

                                                            <li>sạch sẽ</li>

                                                            <li>đầy đủ tiện nghi</li>

                                                            <li>view siêu đẹp</li>

                                                            <li>nhiều cây xanh</li>

                                                            <li>mua bán uy tín</li>

                                                        </ul>

                                                    </div>

                                                    <div class="button">

                                                        <a href="index.php?act=batdongsan" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="tab-x4x4">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <!-- Swiper -->

                                                <div class="swiper-container" id="swiperSlider4x4">

                                                    <div class="swiper-wrapper">

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href=view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                        </div>

                                                    </div>

                                                    <!-- Add Pagination -->

                                                    <div class="row property-thumbnails"></div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="property-details">

                                                    <div class="price">

                                                        <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                    </div>

                                                    <div class="list">

                                                        <ul>

                                                            <li>rộng </li>

                                                            <li>sạch sẽ</li>

                                                            <li>đầy đủ tiện nghi</li>

                                                            <li>view siêu đẹp</li>

                                                            <li>nhiều cây xanh</li>

                                                            <li>mua bán uy tín</li>

                                                        </ul>

                                                    </div>

                                                    <div class="button">

                                                        <a href="index.php?act=batdongsan" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="tab-x4x5">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <!-- Swiper -->

                                                <div class="swiper-container" id="swiperSlider4x5">

                                                    <div class="swiper-wrapper">

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-70x70x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x1.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x2.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x3.jpg" alt="" /></a>

                                                        </div>

                                                        <div class="swiper-slide">

                                                            <a class="btn btn-zoom" href="assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-alt"></i></a>

                                                            <a href="view/assets/img/preview/property/cat1-1200x800x4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/property/cat1-600x450x4.jpg" alt="" /></a>

                                                        </div>

                                                    </div>

                                                    <!-- Add Pagination -->

                                                    <div class="row property-thumbnails"></div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="property-details">

                                                    <div class="price">

                                                        <strong>Giá tốt</strong> <i class="fa fa-info-circle"></i>

                                                    </div>

                                                    <div class="list">

                                                        <ul>

                                                            <li>rộng </li>

                                                            <li>sạch sẽ</li>

                                                            <li>đầy đủ tiện nghi</li>

                                                            <li>view siêu đẹp</li>

                                                            <li>nhiều cây xanh</li>

                                                            <li>mua bán uy tín</li>

                                                        </ul>

                                                    </div>

                                                    <div class="button">

                                                        <a href="index.php?act=batdongsan" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Xem ngay</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                </div>

                                <!-- /Sub tabs content -->



                            </div>

                        </div>

                    </div>



                </div>

            </div>



        </div>

    </section>

    <!-- /PAGE -->



    <!-- PAGE -->

    <section class="page-section dark">

        <div class="container">



            <div class="row">

                <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="100ms">

                    <h2 class="section-title text-left">

                        <small>Lời giới thiệu về bản thân</small>

                        <span>CHÚNG TA LÀ AI?</span>

                    </h2>

                    <p>Chúng tôi là nhóm 10 trong dự án 1 , buôn bán bất động sản đặt chữ tín lên hàng đầu , vừa lòng khách chọn hợp lòng khách đi.</p>
                    <ul class="list-icons">

                        <li><i class="fa fa-check-circle"></i>Web bất động sản giá rẻ uy tín chất lượng.</li>

                        <li><i class="fa fa-check-circle"></i>Cập nhật những tin tức mới về bất động sản</li>

                    </ul>

                    <p class="btn-row">

                        <a href="index.php?act=blog" class="btn btn-theme ripple-effect btn-theme-md"><i class="fa fa-chevron-right">&nbsp;</i> Đọc về tin tức bất động sản</a>

                    </p>

                </div>

                <div class="col-md-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="300ms">

                    <div class="owl-carousel img-carousel">

                        <div class="item"><a href="view/assets/img/preview/slider/slide-775x500x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/slider/tt7.jpg" alt="" /></a></div>

                        <div class="item"><a href="view/assets/img/preview/slider/slide-775x500x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/slider/tt3.jpg" alt="" /></a></div>

                        <div class="item"><a href="view/assets/img/preview/slider/slide-775x500x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/slider/tt4.jpg" alt="" /></a></div>

                        <div class="item"><a href="view/assets/img/preview/slider/slide-775x500x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="view/assets/img/preview/slider/tt5.jpg" alt="" /></a></div>

                    </div>

                </div>

            </div>



        </div>

    </section>

    <!-- /PAGE -->





    <!-- PAGE -->

    <section class="page-section">

        <div class="container">



            <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">

                <small>Các đại lý do chính tay bạn chọn sẽ hướng dẫn và giúp đỡ bạn</small>

                <span>HƯỚNG DẪN CHUYÊN NGHIỆP TỪ CÁC ĐẠI LÝ HÀNG ĐẦU</span>

            </h2>



            <!-- Team row -->

            <div class="row">



                <!-- Team 1 -->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">

                    <div class="thumbnail thumbnail-team no-border no-padding">

                        <div class="media">


                            <img src="https://i.pinimg.com/564x/5c/9d/e5/5c9de57ebfdb5c4a5fe30ae2c459677f.jpg" alt="" />

                        </div>

                        <div class="caption">

                            <h4 class="caption-title">Trần Thị Phương <small>Tư vấn</small></h4>

                            <ul class="team-details">

                                <li><i class="fa fa-skype">&nbsp;</i> Giám đốc</li>

                                <li><i class="fa fa-phone">&nbsp;</i> 087-678-5555</li>

                                <li><i class="fa fa-envelope">&nbsp;</i> <a href="mailto:supportname@gmail.com">migu@gmail.com</a></li>

                            </ul>

                        </div>

                    </div>

                </div>

                <!-- /Team 1 -->



                <!-- Team 2 -->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-offset="200" data-wow-delay="200ms">

                    <div class="thumbnail thumbnail-team no-border no-padding">

                        <div class="media">

                            <img src="https://i.pinimg.com/736x/b0/56/7d/b0567dfb53d779cf6f481b9cc04dc220.jpg" alt="" />

                        </div>

                        <div class="caption">

                            <h4 class="caption-title">Phạm Việt Hoàng<small>Tư Vấn</small></h4>

                            <ul class="team-details">

                                <li><i class="fa fa-skype">&nbsp;</i> Giám đốc</li>

                                <li><i class="fa fa-phone">&nbsp;</i> 082 456-6666</li>

                                <li><i class="fa fa-envelope">&nbsp;</i> <a href="mailto:supportname@gmail.com">zithoan@gmail.com</a></li>

                            </ul>

                        </div>

                    </div>

                </div>

                <!-- /Team 2 -->



                <!-- Team 3 -->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-offset="200" data-wow-delay="300ms">

                    <div class="thumbnail thumbnail-team no-border no-padding">

                        <div class="media">

                            <img src="https://i.pinimg.com/564x/80/3b/bd/803bbd7f5ea4e50e9183636639531611.jpg" alt="" />

                        </div>

                        <div class="caption">

                            <h4 class="caption-title">Ngô Văn Vụ <small>Tư Vấn</small></h4>

                            <ul class="team-details">

                                <li><i class="fa fa-skype">&nbsp;</i> Chuyên gia</li>

                                <li><i class="fa fa-phone">&nbsp;</i> 084 234-8888</li>

                                <li><i class="fa fa-envelope">&nbsp;</i> <a href="mailto:supportname@gmail.com">vanvu@gmail.com</a></li>

                            </ul>

                        </div>

                    </div>

                </div>

                <!-- /Team 3 -->



                <!-- Team 4 -->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-offset="200" data-wow-delay="400ms">

                    <div class="thumbnail thumbnail-team no-border no-padding">

                        <div class="media">

                            <img src="https://i.pinimg.com/564x/2b/f5/72/2bf572010d4a06b9a7265693f9ff85da.jpg" alt="" />

                        </div>

                        <div class="caption">

                            <h4 class="caption-title">Vũ Bảo Linh <small>Chuyên viên tư vấn</small></h4>

                            <ul class="team-details">

                                <li><i class="fa fa-skype">&nbsp;</i> Chuyên gia</li>

                                <li><i class="fa fa-phone">&nbsp;</i> 034-738-3594</li>

                                <li><i class="fa fa-envelope">&nbsp;</i> <a href="mailto:supportname@gmail.com">vubaolinh@gmail.com</a></li>

                            </ul>

                        </div>

                    </div>

                </div>

                <!-- Team 4 -->



            </div>

            <!-- /Team row -->



        </div>

    </section>

    <!-- /PAGE -->



    <!-- PAGE -->

    <div class="page-section testimonials">

        <div class="container wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">

            <div class="testimonials-carousel">

                <div class="owl-carousel" id="testimonials">

                    <div class="testimonial">

                        <div class="media">

                            <div class="media-left">

                                <a href="#">

                                    <img class="media-object testimonial-avatar" src="view/assets/img/preview/avatars/avatar-1.png" alt="Testimonial avatar">

                                </a>

                            </div>

                            <div class="media-body">

                                <div class="testimonial-text"> “Bất động sản không thể bị mất hay đánh cắp hay mang đi được. Mua được một món bất động sản phù hợp, được chi trả đầy đủ, quản lý cẩn thận là món đầu tư an toàn nhất thế giới”. </div>

                                <div class="testimonial-name">- Franklin D. Roosevelt -<span class="testimonial-position"></span></div>

                            </div>

                        </div>

                    </div>

                    <div class="testimonial">

                        <div class="media">

                            <div class="media-left">

                                <a href="#">

                                    <img class="media-object testimonial-avatar" src="view/assets/img/preview/avatars/avatar-2.png" alt="Testimonial avatar">

                                </a>

                            </div>

                            <div class="media-body">

                                <div class="testimonial-text">“90% các triệu phú đều đi lên từ sở hữu bất động sản. Nhiều tiền đã được tạo ra trong bất động sản hơn trong tất cả các khoản ngành công nghiệp cộng lại. Kẻ khôn ngoan là người kiếm tiền ngày hôm nay và đầu tư vào bất động sản”.</div>

                                <div class="testimonial-name">- Andrew Carnegie -<span class="testimonial-position"></span></div>

                            </div>

                        </div>

                    </div>

                    <div class="testimonial">

                        <div class="media">

                            <div class="media-left">

                                <a href="#">

                                    <img class="media-object testimonial-avatar" src="view/assets/img/preview/avatars/avatar-3.png" alt="Testimonial avatar">

                                </a>

                            </div>

                            <div class="media-body">

                                <div class="testimonial-text">"Mua bất động sản không chỉ là cách tốt nhất, cách nhanh nhất, cách an toàn nhất mà còn là cách duy nhất để trở nên giàu có".</div>

                                <div class="testimonial-name">- Marshall Field - <span class="testimonial-position"></span></div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- /PAGE -->











    <!-- PAGE -->

    <section class="page-section">

        <div class="container">



            <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">

                <small>Những câu hỏi thường gặp nhất</small>

                <span>FAQS</span>

            </h2>



            <div class="row">

                <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms">

                    <!-- FAQ -->

                    <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">

                        <!-- faq1 -->

                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="heading1">

                                <h4 class="panel-title">

                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">

                                        <span class="dot"></span> Các khoản phí khác sẽ phải trả là gì?

                                    </a>

                                </h4>

                            </div>

                            <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">

                                <div class="panel-body">

                                    Bạn sẽ không chả bất cứ phí phát sinh khác đến chúng tôi sẽ hướng dân mua đất

                                </div>

                            </div>

                        </div>

                        <!-- /faq1 -->

                        <!-- faq2 -->

                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="heading2">

                                <h4 class="panel-title">

                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">

                                        <span class="dot"></span> Tôi có thể liên hệ với đại lý của bạn ở đâu?

                                    </a>

                                </h4>

                            </div>

                            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">

                                <div class="panel-body">

                                    Bạn có thể đến cao đẳng fpt là địa chỉ chính của chúng tôi

                                </div>

                            </div>

                        </div>

                        <!-- /faq2 -->

                        <!-- faq3 -->

                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="heading3">

                                <h4 class="panel-title">

                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">

                                        <span class="dot"></span> Khi nào tôi sẽ nhận được quyền sở hữu tài sản?

                                    </a>

                                </h4>

                            </div>

                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">

                                <div class="panel-body">

                                    Khi bạn đã làm mọi giấy tờ và trả tiền đất đai và nhận sổ đỏ lúc đấy bạn đã sở hữu

                                </div>

                            </div>

                        </div>

                        <!-- /faq3 -->

                    </div>

                    <!-- /FAQ -->

                </div>

                <div class="col-md-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="200ms">

                    <!-- FAQ -->

                    <div class="panel-group accordion" id="accordion2" role="tablist" aria-multiselectable="true">

                        <!-- faq1 -->

                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="heading21">

                                <h4 class="panel-title">

                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse21" aria-expanded="false" aria-controls="collapse21">

                                        <span class="dot"></span> Các khoản phí khác tôi sẽ phải trả là gì?

                                    </a>

                                </h4>

                            </div>

                            <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21">

                                <div class="panel-body">

                                    Bạn phải trả tiền đặt cọc , và đến ngay trụ sở làm việc tiền trao rồi nhận đất

                                </div>

                            </div>

                        </div>

                        <!-- /faq1 -->

                        <!-- faq2 -->

                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="heading22">

                                <h4 class="panel-title">

                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse22" aria-expanded="true" aria-controls="collapse22">

                                        <span class="dot"></span> Web có uy tín hay không?

                                    </a>

                                </h4>

                            </div>

                            <div id="collapse22" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading22">

                                <div class="panel-body">

                                    Đây là web chính thức của chúng tôi và không phải giả mạo

                                </div>

                            </div>

                        </div>

                        <!-- /faq2 -->

                        <!-- faq3 -->

                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="heading23">

                                <h4 class="panel-title">

                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse23" aria-expanded="false" aria-controls="collapse23">

                                        <span class="dot"></span> Giá có phải đắt quá không ?

                                    </a>

                                </h4>

                            </div>

                            <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23">

                                <div class="panel-body">

                                    Chúng tôi sẽ đảm bảo cho bạn là bất động sản giá chuẩn rẻ hơn ở nơi khác nhấn vào tư vấn ngay đi nào

                                </div>

                            </div>

                        </div>

                        <!-- /faq3 -->

                    </div>

                    <!-- /FAQ -->

                </div>

            </div>



        </div>

    </section>

    <!-- /PAGE -->



    <!-- PAGE -->



    <!-- /PAGE -->



    <!-- PAGE -->

    <div class="page-section no-padding no-bottom-space-off">

        <div class="container full-width">



            <!-- Google map -->

            <div class="google-map">

                <div >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8639810443337!2d105.74459841481733!3d21.038127785993314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1670866439658!5m2!1svi!2s" width="100%" height="700px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>

            </div>

            <!-- /Google map -->



        </div>

    </div>

    <!-- /PAGE -->



    <!-- PAGE -->

    <section class="page-section">

        <div class="container">



            <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">

                <small>Tin tức bất động sản mới nhất trên blog của chúng tôi</small>

                <span>Bài viết blog gần đây</span>

            </h2>



            <div class="row">

                <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms">

                    <div class="recent-post alt">

                        <div class="media">

                            <a class="media-link" href="#">

                                <div class="badge type">Giao bán</div>

                                <div class="badge post"><i class="fa fa-video-camera"></i></div>

                                <img class="media-object" src="view/assets/img/preview/blog/post-1200x800x1.jpg" alt="">

                                <i class="fa fa-plus"></i>

                            </a>

                            <div class="media-left">

                                <div class="meta-date">

                                    <div class="day">21</div>

                                    <div class="month">Tháng mười hai</div>

                                </div>

                            </div>

                            <div class="media-body">

                                <div class="media-meta">

                                    By Ngô Văn Vụ

                                    <a href="#"><i class="fa fa-comment"></i>13</a>

                                    <a href="#"><i class="fa fa-heart"></i>346</a>

                                    <a href="#"><i class="fa fa-share-alt"></i>51</a>

                                </div>

                                <h4 class="media-heading"><a href="#">Khu dân cư hiện đại</a></h4>

                                <div class="media-excerpt">Khu biệt thự gần chung tâm thành phố</div>

                                <br />

                                <a href="index.php?act=blog" class="btn btn-theme"><i class="fa fa-chevron-right">&nbsp;</i> xem ngay</a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="200ms">

                    <div class="recent-post alt">

                        <div class="media">

                            <a class="media-link" href="#">

                                <div class="badge type">Mua ngay</div>

                                <div class="badge post"><i class="fa fa-image"></i></div>

                                <img class="media-object" src="view/assets/img/preview/blog/post-1200x800x2.jpg" alt="">

                                <i class="fa fa-plus"></i>

                            </a>

                            <div class="media-left">

                                <div class="meta-date">

                                    <div class="day">21</div>

                                    <div class="month">Tháng 12</div>

                                </div>

                            </div>

                            <div class="media-body">

                                <div class="media-meta">

                                    Phạm Hoàng

                                    <a href="#"><i class="fa fa-comment"></i>13</a>

                                    <a href="#"><i class="fa fa-heart"></i>346</a>

                                    <a href="#"><i class="fa fa-share-alt"></i>27</a>

                                </div>

                                <h4 class="media-heading"><a href="#">Căn hộ thanh lịch</a></h4>

                                <div class="media-excerpt">Căn hộ trong mơ cho bạn nào cần lãng mạng </div>

                                <br />

                                <a href="index.php?act=blog" class="btn btn-theme"><i class="fa fa-chevron-right">&nbsp;</i> xem ngay</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <div class="text-center margin-top wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">

                <a href="index.php?act=blog" class="btn btn-theme ripple-effect btn-theme-light btn-more-posts">Xem tất cả</a>

            </div>



        </div>

    </section>

    <!-- /PAGE -->



    <!-- PAGE -->

    <section class="page-section image subscribe">

        <div class="container">



            <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">

                <span>Giảm 10% nếu bạn đăng ký ngay bây giờ</span>

            </h2>



            <div class="row wow fadeInDown" data-wow-offset="200" data-wow-delay="200ms">

                <div class="col-md-8 col-md-offset-2">



                    <p class="text-center"></p>



                    <!-- Subscribe form -->



                    <!-- Subscribe form -->



                </div>

            </div>



        </div>

    </section>

    <!-- /PAGE -->




    <?php
    include "view/footer.php";
    ?>


    <!-- PAGE -->