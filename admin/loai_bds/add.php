<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Thêm loại bất động sản</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Loại bất động sản</a></li>
                                <li class="breadcrumb-item active">Thêm loại</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form action="index.php?act=addloaibds" method="post" id="createproduct-form" autocomplete="off" class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Tên loại bất động sản</label>
                                    <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
                                    <input type="text" class="form-control d-none" id="product-id-input">
                                    <input type="text" name="loaibds" class="form-control" id="product-title-input" value="" placeholder="Nhập vào tên bất động sản" required>
                                    <div class="invalid-feedback">Vui lòng nhập vào tên loại bất động sản</div> <br>
                                    <?php if ($thongbao == 1) : ?>
                                        <span style="color:green">   Thêm thành công !</span>
                                    <?php elseif ($thongbao == 0) : ?>
                                        <span style="color:red">   Vui lòng nhập loại bất động sản</span>
                                    <?php endif ?>
                                </div>

                            </div>
                        </div>

                        <!-- end card -->
                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-success w-sm">Thêm</button>
                            <a href="index.php?act=listloaibds"><button type="button" class="btn btn-success w-sm">Danh sách</button></a>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </form>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>