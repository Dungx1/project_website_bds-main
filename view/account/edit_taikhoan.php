<?php
include "view/header.php";
?>
<!-- CONTENT AREA -->
<div class="content-area">

    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs text-center">
        <div class="container">
            <div class="page-header">
                <h1>Cập nhật thông tin tài khoản</h1>
            </div>
            <ul class="breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li class="active">Cập nhật tài khoản</li>
            </ul>
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE -->
    <section class="page-section color">
        <div class="container">

            <div class="row">

                <div class="col-md-4">
                    <div class="contact-info">

                        <h2 class="block-title"><span>Liên hệ với chúng tôi</span></h2>

                        <div class="media-list">
                            <div class="media">
                                <i class="pull-left fa fa-home"></i>
                                <div class="media-body">
                                    <strong>Địa chỉ:</strong><br>
                                    11c 131/24 Đường Phương Canh, Xuân Phương, Nam Từ Liêm, Hà Nội
                                </div>
                            </div>
                            <div class="media">
                                <i class="pull-left fa fa-phone"></i>
                                <div class="media-body">
                                    <strong>Số điện thoại:</strong><br>
                                    0339410975
                                </div>
                            </div>
                            <div class="media">
                                <i class="pull-left fa fa-envelope-o"></i>
                                <div class="media-body">
                                    <strong>Fax:</strong><br>
                                    0123456789
                                </div>
                            </div>

                            <div class="media">
                                <div class="media-body">
                                    <strong>Dịch vụ khách hàng:</strong><br>
                                    <a href="mailto:hello@rentit.com">Vanvu@gmail.com</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <strong>Hoàn tiền:</strong><br>
                                    <a href="mailto:hello@rentit.com">Migu@gmail.com</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-8 text-left">

                    <h2 class="block-title"><span>Thông tin tài khoản</span></h2>
                    <?php
                    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);
                    }
                    ?>
                    <!-- Contact form -->
                    <form action="index.php?act=edit_taikhoan" name="contact-form" method="POST" class="contact-form">
                        <div class="outer required">
                            <div class="form-group af-inner">
                                <label for="name">Họ và tên</label>
                                <input type="text" name="user" value="<?= $user ?>" id="name" placeholder="Tên" value="" size="30" data-toggle="tooltip" title="Name is required" class="form-control placeholder" required />
                            </div>
                        </div>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="<?= $email ?>" id="email" placeholder="Email" value="" size="30" data-toggle="tooltip" title="Email is required" class="form-control placeholder" required />
                            </div>
                        </div>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <label for="subject">Mật khẩu</label>
                                <input type="password" name="pass" value="<?= $pass ?>" id="subject" placeholder="Mật khẩu" value="" size="30" data-toggle="tooltip" title="Subject is required" class="form-control placeholder" required />
                            </div>
                        </div>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <label for="subject">Địa chỉ</label>
                                <input type="text" name="address" value="<?= $diachi ?>" id="subject" placeholder="Địa chỉ" value="" size="30" data-toggle="tooltip" title="Subject is required" class="form-control placeholder" required />
                            </div>
                        </div>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <label for="subject">Số điện thoại</label>
                                <input type="text" name="tel" value="<?= $tel ?>" id="subject" placeholder="Mật khẩu" value="" size="30" data-toggle="tooltip" title="Subject is required" class="form-control placeholder" required />
                            </div>
                        </div>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <input type="hidden" name="id" id="" value="<?= $id ?>">
                                <input type="submit" name="capnhat" value="Cập nhật" class="form-button form-button-submit btn btn-theme btn-theme-dark" id="submit_btn" />
                                <input type="reset" name="reset" value="Nhập lại" class="form-button form-button-submit btn btn-theme btn-theme-dark" id="submit_btn" />
                            </div>
                        </div>

                    </form>

                    <!-- /Contact form -->

                </div>

            </div>

        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <div class="page-section no-padding">
        <div class="container full-width">

            <!-- Google map -->
            <div class="google-map">
                <div id="map-canvas"></div>
            </div>
            <!-- /Google map -->

        </div>
    </div>
    <!-- /PAGE -->

</div>

<?php
include "view/footer.php";
?>