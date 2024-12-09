<?php
include "view/header.php";
?>
<!-- CONTENT AREA -->
<div class="content-area">

    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs text-center">
        <div class="container">
            <div class="page-header">
                <h1>Liên hệ với chúng tôi</h1>
            </div>
            <ul class="breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li class="active">Liên hệ</li>
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

                    <h2 class="block-title"><span>Form liên hệ</span></h2>

                    <!-- Contact form -->
                    <form name="contact-form" method="post" action="index.php?act=contact" class="contact-form" >

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <label class="sr-only" for="name">Họ và tên</label>
                                <input type="text" value="" name="name" id="name" placeholder="Tên" class="form-control placeholder" />
                            </div>
                        </div>
                        <h6><?php if (isset($error['name'])) {echo $error['name'];}?></h6>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <label class="sr-only" for="email">Email</label>
                                <input type="text" name="email" id="email" placeholder="Email" value="" size="30" class="form-control placeholder" />
                            </div>
                        </div>
                        <h6><?php if (isset($error['email'])) {echo $error['email'];}?></h6>

                        <div class="form-group af-inner">
                            <label class="sr-only" for="input-message">Lời nhắn</label>
                            <textarea name="message" id="input-message" placeholder="Lời nhắn" rows="4" cols="50" class="form-control placeholder"></textarea>
                        </div>
                        <h6><?php if (isset($error['message'])) {echo $error['message'];}?></h6>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <input type="submit" name="submit" class="form-button form-button-submit btn btn-theme btn-theme-dark" id="submit_btn" value="Gửi" />
                            </div>
                        </div>
                        <h6 class="thongbao">
                            <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            ?>
                        </h6>

                    </form>

                    <!-- /Contact form -->

                </div>

            </div>

        </div>
    </section>
    <!-- /PAGE -->
    <script>
        var ex = document.getElementById('contact-form');

        function thongbao(ex) {
            alert('ok');
        }
    </script>
    <!-- PAGE -->
    <div class="page-section no-padding">
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

</div>
<?php
include "view/footer.php";
?>