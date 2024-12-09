<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signup-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 01:09:38 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Đăng ký | HPV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/view/assets/img/logo_sm.png">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>
<style>
    h6 {
        color: red;
        padding-bottom: 10px;
    }
</style>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden m-0">
                            <div class="row justify-content-center g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="index.html" class="d-block">
                                                    <img src="assets/images/logo-light.png" alt="" height="18">
                                                </a>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="mb-3">
                                                    <i class="ri-double-quotes-l display-4 text-success"></i>
                                                </div>

                                                <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner text-center text-white-50 pb-5">
                                                        <div class="carousel-item active">
                                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Đăng ký tài khoản</h5>
                                            <p class="text-muted">Nhận tài khoản HPV miễn phí của bạn ngay</p>
                                        </div>

                                        <div class="mt-4">
                                            <form class="needs-validation" action="index.php?act=dangky" method="POST">
                                            <div class="mb-3">
                                                    <label for="username" class="form-label">Họ và tên<span class="text-danger">*</span></label>
                                                    <input type="text" name="hoten" class="form-control" id="username" placeholder="Nhập vào họ và tên" >
                                                    <div class="invalid-feedback">
                                                        Vui lòng nhập vào họ tên của bạn
                                                    </div>
                                                </div>
                                                <h6><?php if (isset($error['hoten'])) {echo $error['hoten'];}?></h6>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Tên đăng nhập <span class="text-danger">*</span></label>
                                                    <input type="text" name="user" class="form-control" id="username" placeholder="Nhập vào tên đăng nhập" >
                                                    <div class="invalid-feedback">
                                                        Vui lòng nhập vào tên đăng nhập
                                                    </div>
                                                </div>
                                                <h6><?php if (isset($error['user'])) {echo $error['user'];}?></h6>
                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" class="form-control" id="useremail" placeholder="Nhập vào địa chỉ email" >
                                                    <div class="invalid-feedback">
                                                        Vui lòng nhập vào email của bạn
                                                    </div>
                                                </div>
                                                <h6><?php if (isset($error['email'])) {echo $error['email'];}?></h6>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Số điện thoại<span class="text-danger">*</span></label>
                                                    <input type="text" name="tel" class="form-control" id="username" placeholder="Nhập vào số điện thoại" >
                                                    <div class="invalid-feedback">
                                                        Vui lòng nhập vào số điện thoại
                                                    </div>
                                                </div>
                                                <h6><?php if (isset($error['tel'])) {echo $error['tel'];}?></h6>
                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Mật khẩu</label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" name="pass" class="form-control pe-5 password-input" onpaste="return false" placeholder="Nhập vào mật khẩu " id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                        Vui lòng nhập vào mật khẩu 
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><?php if (isset($error['pass'])) {echo $error['pass'];}?></h6>
                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Nhập lại mật khẩu</label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" name="repass" class="form-control pe-5 password-input" onpaste="return false" placeholder="Nhập lại mật khẩu" id="password-input" aria-describedby="passwordInput" >
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                        Vui lòng nhập lại mật khẩu 
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><?php if (isset($error['repass'])) {echo $error['repass'];}?></h6>

                                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                    <h5 class="fs-13">Mật khẩu cần phải chứa:</h5>
                                                    <p id="pass-length" class="invalid fs-12 mb-2">Ít nhất <b>8 ký tự</b></p>
                                                    <p id="pass-lower" class="invalid fs-12 mb-2"><b>Chữ cái thường</b> (a-z)</p>
                                                    <p id="pass-upper" class="invalid fs-12 mb-2">Viết in hoa <b>chữ cái đầu (A-Z)</b></p>
                                                    <p id="pass-number" class="invalid fs-12 mb-0">Có ít nhất <b>một chữ số</b> (0-9)</p>
                                                </div>

                                                <div class="mt-4">
                                                    <h6 class="thongbao">
                                                        <?php
                                                        if (isset($thongbao) && ($thongbao != "")) {
                                                            echo $thongbao;
                                                        }
                                                        ?>
                                                    </h6>
                                                    <input class="btn btn-success w-100" type="submit" name="dangky" value="Đăng ký">
                                                </div>

                                                
                                            </form>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <p class="mb-0">Bạn đã có tài khoản ? Hãy <a href="index.php?act=dangnhap" class="fw-semibold text-primary text-decoration-underline"> Đăng nhập</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- validation init -->
    <script src="assets/js/pages/form-validation.init.js"></script>
    <!-- password create init -->
    <script src="assets/js/pages/passowrd-create.init.js"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signup-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 01:09:38 GMT -->

</html>