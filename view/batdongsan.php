<?php
include "view/header.php";
?>

<!-- PAGE WITH SIDEBAR -->
<section class="page-section sub-page">
    <div class="container">
        <div style="margin-bottom: 20px;width:350px;" class="widget shadow">
            <form method="post" action="index.php?act=batdongsan" class="widget-search">
                <input class="form-control" type="text" name="kyw" placeholder="Tìm kiếm bất động sản">
                <button type="submit" name="search"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="clearfix text-center">
            <ul id="filtrable" class="filtrable clearfix">
                <li class="all current"><a href="index.php?act=features" data-filter="*">Mới</a></li>
                <li class="all current"><a href="index.php?act=batdongsan" data-filter="*">Tất cả</a></li>
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

        <div class="row thumbnails portfolio isotope isotope-items">
            <?php
            foreach ($ds_bds as $bds) {
                extract($bds);
                $linkbds = "index.php?act=batdongsanchitiet&idbds=" . $id;
                echo '
                    <div class="col-md-3 col-sm-6 isotope-item dress ">
                        <div class="thumbnail no-border no-padding">
                            <div class="media">
                                <a href="' . $linkbds . '"><img  class="box_img_bds" src="' . $img . '"  alt=""></a>
                            </div>
                            <div id="box_bds" class="caption" >
                                <h3 id="ten_bds" class="caption-title"><a href="' . $linkbds . '">' . $name . '</a></h3>
                                <div class="info_bds">
                                    <strong>' . $price . '&nbsp;&nbsp;&nbsp;&nbsp; <span>' . $dientich . ' m²</span></strong> 
                                    <p style="text-transform:capitalize;">' . $location . '</p>
                                </div>
                            </div>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                ';
            }
            ?>



        </div>








        <!-- Pagination -->
        <!-- <div class="pagination-wrapper">
            <ul class="pagination">
                <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div> -->
        <!-- /Pagination -->

    </div>
</section>
<!-- /PAGE WITH SIDEBAR -->

<?php
include "view/footer.php";
?>