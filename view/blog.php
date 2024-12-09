<?php
include "view/header.php";
?>
<!-- CONTENT AREA -->
<div class="content-area">

    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs text-right">
        <div class="container">
            <div class="page-header">
                <h1>Tin tức </h1>
            </div>
            <ul class="breadcrumb">
                <li><a href="index.php?act=home">Trang chủ</a></li>
                <li><a href="#">Tin tức </a></li>

            </ul>
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE WITH SIDEBAR -->
    <div class="page-section with-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-9 content" id="content">
                    <?php foreach ($ds_tt as $tt) {
                        extract($tt);
                        $linktt = "index.php?act=tintucchitiet&idtt=" . $id;

                    ?>
                        <article class="post-wrap">
                            <div class="post-media">
                                <a href="<?= $tt['img'] ?>" prettyPhoto"><img src="<?= $tt['img'] ?>" alt=""></a>
                            </div>
                            <div class="post-header">
                                <h2 class="post-title"><a href="<?=$linktt?>"><?= $tt['tieude'] ?></a></h2>
                                <div class="post-meta">By <a href="#">
                                        <?php
                                        $oneuser = loadOne_user($tt['id_user']);
                                        extract($oneuser); ?>
                                        <?= $oneuser['user'] ?>
                                    </a> / <?= $tt['ngaydangtin'] ?> /</div>
                            </div>
                            <div class="post-body">
                                <div class="post-excerpt">
                                    <p><?= $tt['mota_ngan'] ?></p>
                                </div>
                            </div>
                            <div class="post-footer">
                                <span class="post-read-more"><a href="<?= $linktt ?>" class="btn btn-theme btn-theme-transparent btn-icon-left">Đọc thêm</a></span>
                            </div>
                        </article>
                    <?php } ?>



                    

                </div>
                <!-- /CONTENT -->

                <!-- SIDEBAR -->
                <aside class="col-md-3 sidebar" id="sidebar">
                    <!-- widget search -->
                    <div class="widget shadow">
                        <form method="post" action="index.php?act=blog">
                            <div class="widget-search">
                                <input class="form-control" type="text" placeholder="Tìm kiếm tin tức" name="kyw" type="submit">
                                <button name="search"><i class="fa fa-search"></i></button>
                            </div>
                        </form>

                    </div>
                    <!-- /widget search -->
                    <!-- widget car categories -->
                    <div class="widget shadow property-categories">
                        <h4 class="widget-title">Categories</h4>
                        <div class="widget-content no-pad">
                            <ul>
                                <li>


                                    <ul class="">
                                        <?php
                                        foreach ($danhmuctt as $tt) {
                                            extract($tt);
                                            $linktt = "index.php?act=blog&id_tintuc=" . $id;

                                            echo '
                        <li><a href="' . $linktt . '">' . $name . '</a></li>
                        ';
                                        }
                                        ?>


                                    </ul>
                                </li>
                        </div>
                    </div>
                    <!-- /widget car categories -->
                    <!-- widget detail reservation -->
                    <!-- /widget tabs -->
                    <!-- widget archives -->


                    <!-- /widget archive -->
                    <!-- widget flickr feed -->
                    <div class="widget widget-flickr-feed">
                        <h4 class="widget-title"><span>Ảnh đẹp bất động sản</span></h4>
                        <ul>
                            <li><a href="#"><img src="view/assets/img/preview/flickr/flickr-feed-8.jpg" alt="//"></a></li>
                            <li><a href="#"><img src="view/assets/img/preview/flickr/flickr-feed-9.jpg" alt="//"></a></li>
                            <li><a href="#"><img src="view/assets/img/preview/flickr/flickr-feed-10.jpg" alt="//"></a></li>
                            <li><a href="#"><img src="view/assets/img/preview/flickr/flickr-feed-11.jpg" alt="//"></a></li>
                            <li><a href="#"><img src="view/assets/img/preview/flickr/flickr-feed-12.jpg" alt="//"></a></li>
                            <li><a href="#"><img src="view/assets/img/preview/flickr/flickr-feed-13.jpg" alt="//"></a></li>
                            <li><a href="#"><img src="view/assets/img/preview/flickr/flickr-feed-14.jpg" alt="//"></a></li>
                            <li><a href="#"><img src="view/assets/img/preview/flickr/flickr-feed-15.jpg" alt="//"></a></li>
                        </ul>
                    </div>
                    <!-- /widget flickr feed -->
                    <!-- widget twitter -->
                    <div class="widget shadow widget-twitter">
                        <h4 class="widget-title"><span>Twitter</span></h4>
                        <div class="widget-content">
                            <div class="recent-tweets">
                                <div class="media">
                                    <div class="media-body">
                                        <p><i class="fa fa-twitter"></i> <a href="#">@twittername</a> Để thành công trong lĩnh vực bất động sản, bạn phải luôn luôn và luôn đặt lợi ích tốt nhất cho khách hàng của mình trước. Khi bạn làm điều đó, thì bạn sẽ nhận được nhiều điều mà mình mong muốn và không thể tưởng tượng được. (Anthony Hitt - chuyên gia bất động sản).</p>
                                        <small>1 minute ago</small>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <p><i class="fa fa-twitter"></i> <a href="#">@twittername</a> “Mọi thứ trong bất động sản đều bắt đầu và kết thúc bằng những con người thực sự. Giống như bạn và tôi, nhà đầu tư, khách hàng, nhà môi giới… đều có những nhu cầu, vấn đề, mong muốn, mục tiêu, hy vọng. Hãy giúp nhau cùng thành công, chứ đừng sử dụng chiêu trò hay mánh khóe để lừa gạt nhau. Bởi người mà bạn có thể lừa gạt, chính là người tin tưởng bạn nhất”. Pete Fortunato.</p>
                                        <small>1 minute ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /widget twitter -->
                    <!-- widget tag cloud -->
                    <div class="widget widget-tag-cloud">
                        <h4 class="widget-title"><span>Hay chọn cho mình 1 ngôi nhà ưng ý</span></h4>
                        <ul>
                            <li><a href="index.php?act=batdongsan">Căn hộ chung cư</a></li>
                            <li><a href="index.php?act=batdongsan">nhà bán </a></li>
                            <li><a href="index.php?act=batdongsan">Đất cho thuê</a></li>
                            <li><a href="index.php?act=batdongsan">Đất</a></li>
                            <li><a href="index.php?act=batdongsan">Biệt thự</a></li>
                            <li><a href="index.php?act=batdongsan">view biển</a></li>
                            <li><a href="index.php?act=batdongsan">Đất làm nông</a></li>
                            <li><a href="index.php?act=batdongsan">Đất mặt đường</a></li>
                            <li><a href="index.php?act=batdongsan">Gần khu dân cư</a></li>
                            <li><a href="index.php?act=batdongsan">Nhà trọc trời</a></li>
                        </ul>
                    </div>
                    <!-- /widget tag cloud -->
                </aside>
                <!-- /SIDEBAR -->

            </div>
        </div>
    </div>
    <!-- /PAGE WITH SIDEBAR -->

</div>
<!-- /CONTENT AREA -->
<?php
include "view/footer.php";
?>