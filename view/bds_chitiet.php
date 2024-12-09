<?php
include "view/header.php";
?>
<div class="content-area">

    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs text-center">
        <div class="container">
            <div class="page-header">
                <h1>HPV</h1>
            </div>
            <ul class="breadcrumb">
                <li><a href="#">Bất động sản</a></li>
                <li><a href="#">Chi tiết</a></li>
                <!-- <li class="active">Portfolio</li> -->
            </ul>
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE WITH SIDEBAR -->
    <section class="page-section sub-page">
        <div class="container">
            <?php
            extract($onebds);
            ?>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-12 project-media">

                    <div class="img-carousel">
                        <?php foreach ($anhmota as $index => $img) : ?>
                            <div><img class="img_mota" src="<?= $img['file_name'] ?>" alt="" /></div>
                        <?php endforeach ?>
                    </div>
                    <div></div>
                    <h3 id="ten_bds_chitiet" class="block-title"><span><?= $name ?></span></h3>
                    <p style="text-transform:capitalize;"><?= $ngaydang ?></p>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-7">
                    <?php
                    if (isset($oneuser)) {
                        extract($oneuser);
                    }
                    ?>
                    <div class="caption">
                        <h3 class="block-title"><span>Người đăng</span></h3>
                        <ul class="team-details">
                            <li style="text-transform: capitalize;"><i class="fa fa-user">&nbsp;&nbsp;</i><?= $oneuser['hoten'] ?></li>
                            <li><i class="fa fa-phone">&nbsp;&nbsp;</i><?= $oneuser['tel'] ?></li>
                            <li><i class="fa fa-envelope">&nbsp;&nbsp;</i> <a href="#"><?= $oneuser['email'] ?></a></li>
                        </ul>
                    </div>

                    <div class="project-overview">
                        <h3 class="block-title"><span>Mô tả</span></h3>
                        <p><?= $info ?></p>
                    </div>

                    <div class="project-details">
                        <h3 class="block-title"><span>Thông tin chi tiết</span></h3>
                        <dl class="dl-horizontal">
                            <dt>Giá</dt>
                            <dd><?= $price ?> VND</dd>
                            <dt>Diện tích</dt>
                            <dd><?= $dientich ?> m²</dd>
                            <dt>Số phòng</dt>
                            <dd><?= $sophong ?></dd>
                            <dt>Địa chỉ</dt>
                            <dd><?= $location ?></dd>
                            <dt>Ngày đăng</dt>
                            <dd><?= $ngaydang ?></dd>
                        </dl>

                        <h6 class="thongbao">
                            <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            ?>
                        </h6>
                        <div class="button">
                            <?php
                            if (isset($_SESSION['user'])) {
                                $id_login = $_SESSION['user'];
                            ?>
                                <?php
                                if ($id_login['id_role'] == 3) {
                                ?>
                                    <a href="#" class="btn btn-block btn-theme btn-theme-dark" onclick="modal()">Tư vấn ngay</a>
                                    <div class="modal-content" id="modal">
                                        <div class="modal-header bg-light p-3">
                                            <a href="" id="hidemodal" onclick="hidemodal()">
                                                <i class="fa-solid fa-xmark"></i>
                                            </a>
                                        </div>
                                        <form action="index.php?act=tuvan" id="form_modal" method="POST">
                                            <input type="hidden" name="id_login" value="<?= $id_login['id'] ?>">
                                            <div class="modal-body">
                                                <input type="hidden" id="id-field" />
                                                <div class="mb-3" id="modal-id" style="display: none;">
                                                    <label for="id-field1" class="form-label"></label>
                                                    <input type="hidden" id="id-field1" name="id_bds" class="form-control" placeholder="ID" readonly value="<?= $onebds['id'] ?>" />
                                                    <input type="hidden" id="id-field1" name="name" class="form-control" placeholder="ID" readonly value="<?= $onebds['name'] ?>" />
                                                    <input type="hidden" id="id-field1" name="img" class="form-control" placeholder="ID" readonly value="<?= $onebds['img'] ?>" />
                                                </div>
                                            
                                                <div class="mb-3">
                                                    <label for="customername-field" class="form-label">Tên đăng nhập</label>
                                                    <input type="text" name="user" value="<?= $id_login['user'] ?>" id="customername-field" disabled class="form-control" placeholder="Nhập vào họ tên" />

                                                </div>

                                                <div class="mb-3">
                                                    <label for="phone-field" class="form-label">Lời nhắn</label>
                                                    <textarea name="note_user" class="form-control " cols="30" rows="10">Tôi quan tâm đến bất động sản này</textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <!-- <button type="submit" name="tuvan" class="btn btn-block btn-theme btn-theme-dark" id="add-btn">Gửi</button> -->
                                                    <a href=""> <input type="submit" name="tuvan" class="btn btn-block btn-theme btn-theme-dark" id="add-btn" value="gửi" onclick="done()"></a>
                                                    <span id="loituvan"></span>
                                                </div>
                                            </div>
                                            <?php
                                            $idbds = $_GET['idbds'];
                                            ?>
                                        </form>
                                    </div>
                                <?php
                                }
                                ?>

                            <?php
                            } else {
                                echo '
                                <a href="index.php?act=dangnhap&url=' . $url_bds . '" class="btn btn-block btn-theme btn-theme-dark" onclick="modal()">Đăng nhập để tư vấn</a>
                                <div align="center"><p style="color:red;font-size:18px;margin-top:10px">Bạn cần đăng nhập để đăng ký tư vấn !</p></div>';
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
            <script>
                function modal() {
                    document.getElementById('modal').style.display = 'contents';
                }

                function hidemodal() {
                    document.getElementById('modal').style.display = 'none';
                }

                function done() {
                    swal("Đăng ký thành công!", "Bạn đã đăng ký tư vấn thành công!", "success");
                }
            </script>

            <hr class="page-divider" />

            <hr class="page-divider half" />


            <h2 class="block-title">Bất động sản liên quan</h2>

            <div class="row thumbnails portfolio">
                <?php
                foreach ($bds_cungloai as $same_bds) {
                    extract($same_bds);
                    $linkbds = "index.php?act=batdongsanchitiet&idbds=" . $id;
                    echo '
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <a href="' . $linkbds . '">
                                                    <img class="img_lienquan" src="' . $img . '" alt="">
                                                    <div class="caption hovered">
                                                        <div class="caption-wrapper div-table">
                                                            <div class="caption-inner div-cell">
                                                                <h3 id="ten_bds" class="caption-title">' . $name . '</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                ';
                }
                ?>
            </div>

        </div>
    </section>
    <!-- /PAGE WITH SIDEBAR -->

</div>
<!-- /CONTENT AREA -->
<?php
include "view/footer.php";
?>