<?php
include "view/header.php";
?>
<!-- PAGE WITH SIDEBAR -->
<section class="page-section with-sidebar sub-page">
    <div class="container">
        <div class="row">
            <!-- CONTENT -->
            <div class="col-md-9 content property-listing" id="content">

                <!-- Car Listing -->


                <?php
                foreach ($dstop5 as $index => $sp5) : ?>
                <?php
                    $linkbds = "index.php?act=batdongsanchitiet&idbds=" . $sp5['id'];
                    echo '
                <div class="thumbnail no-border no-padding thumbnail-property-card clearfix">
                <div class="media">
                    <a class="media-link" data-gal="prettyPhoto" href="' . $sp5['img'] . '">
                        <img style="width:300px;height:auto;" src="' . $sp5['img'] . '" alt=""/>
                        <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                    </a>
                </div>
                <div class="caption">
                    <div class="rating">
                        <a href="#"> <img alt="" src="view/assets/img/map-marker-icon.png"> </a>
                    </div>
                    <h4 class="caption-title"><a href="' . $linkbds . '">' . $sp5['name'] . '</a></h4>
                    <h5 class="caption-title-sub">' . $sp5['price'] . '</h5>
                    <div class="caption-text">' . $sp5['location'] . '</div>
                    <table class="table">
                        <tr>
                            <td></td>

                            <td class="buttons"><a class="btn btn-theme" href="' . $linkbds . '">tư vấn</a></td>
                        </tr>
                    </table>
                </div>
            </div>
                ';
                endforeach; ?>
                <!-- /Car Listing -->

                

            </div>
            <!-- /CONTENT -->

            <!-- SIDEBAR -->
            <aside class="col-md-3 sidebar" id="sidebar">
                <!-- widget -->
                
                <!-- /widget -->
                <!-- widget price filter -->

                <!-- /widget price filter -->
                <!-- widget testimonials -->
                <div class="widget shadow">
                    <div class="widget-title">Chi nhánh tư vấn</div>
                    <div class="testimonials-carousel">
                        <div class="owl-carousel" id="testimonials">
                            <div class="testimonial">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="testimonial-text">Chi nhánh TP. Hồ Chí Minh
                                            Tầng 3, Tòa nhà Viettel Complex, 285 Cách Mạng Tháng Tám, Phường 12, Quận 10, TP. Hồ Chí Minh
                                            Điện thoại: 0904 893 279 - 0904 946 163</div>
                                        <div class="testimonial-name">Vụ<span class="testimonial-position">Tư vấn ngay</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="testimonial-text">Chi nhánh Đà Nẵng
                                            Tầng 9, tòa nhà Vĩnh Trung Plaza, số 255 – 257 Hùng Vương, phường Vĩnh Trung, quận Thanh Khê, TP. Đà Nẵng
                                            Điện thoại: (0236) 3 666 968 - Mobile: 0904 907 279</div>
                                        <div class="testimonial-name">Phương<span class="testimonial-position">Tư vấn ngay</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="testimonial-text">Chi nhánh Hải Phòng
                                            Phòng 502, TD Business Center, lô 20A Lê Hồng Phong, quận Ngô Quyền, TP. Hải Phòng
                                            Điện thoại: (0225) 3 246 848 - Mobile: 0903 456 322</div>
                                        <div class="testimonial-name">Hoàng <span class="testimonial-position">Tư vấn ngay</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /widget testimonials -->
                <!-- widget helping center -->
                <div class="widget shadow widget-helping-center">
                    <h4 class="widget-title">TRUNG TÂM GIÚP ĐỠ</h4>
                    <div class="widget-content">
                        <p>chúng tôi sẽ giải quyết mọi thắc mắc và tư vấn nhiệt tình nhất có đóng góp gì hay liên hệ</p>
                        <h5 class="widget-title-sub">+0793-576-765</h5>
                        <p><a href="mailto:support@supportcenter.com">support@supportcenter.com</a></p>
                        <div class="button">
                            <a href="index.php?act=contact" class="btn btn-block btn-theme btn-theme-dark">Trung tâm hỗ trợ</a>
                        </div>
                    </div>
                </div>
                <!-- /widget helping center -->
            </aside>
            <!-- /SIDEBAR -->

        </div>
    </div>
</section>
<!-- /PAGE WITH SIDEBAR -->

<?php
include "view/footer.php";
?>