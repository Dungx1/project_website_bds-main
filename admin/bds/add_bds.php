        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Thêm bất động sản</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Bất động sản</a></li>
                                        <li class="breadcrumb-item active">Thêm mới</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <form action="index.php?act=addbds" method="POST" enctype="multipart/form-data" id="createproduct-form" autocomplete="off" class="needs-validation">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Tên bất động sản</label>
                                            <input type="text" name="name_bds" class="form-control" id="product-title-input" placeholder="Nhập vào tên bất động sản" required>
                                        </div>

                                        <div>
                                            <label>Mô tả</label>
                                            <textarea name="mota" id="ckeditor-classic" cols="50" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->


                                <!-- end card -->

                                <div class="card">
                                    <div class="card-header">
                                        <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info" role="tab">
                                                    Thông tin chung
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                                                <div class="row">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-name-input">Địa chỉ</label>
                                                        <input type="text" name="diachi" class="form-control" id="manufacturer-name-input" placeholder="Nhập vào địa chỉ" required>
                                                    </div>
                                                </div>
                                                <!-- end row -->

                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="stocks-input">Số phòng</label>
                                                            <input type="number" name="sophong" value="0" class="form-control" id="stocks-input" placeholder="Nhập số phòng ngủ">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="product-price-input">Giá</label>
                                                            <div class="input-group has-validation mb-3">
                                                                <span class="input-group-text" id="product-price-addon">VND</span>
                                                                <input type="text" name="gia" class="form-control" id="product-price-input" placeholder="Nhập vào giá" aria-label="Price" aria-describedby="product-price-addon" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="product-price-input">Diện tích</label>
                                                            <div class="input-group has-validation mb-3">
                                                                <span class="input-group-text" id="product-price-addon">m²</span>
                                                                <input type="number" name="dientich" class="form-control" id="product-price-input" placeholder="VD 80" aria-label="Price" aria-describedby="product-price-addon" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="product-discount-input">Người đăng</label>
                                                            <div class="input-group mb-3">
                                                                <select name="nguoidang" class="form-control" id="product-discount-input" aria-label="discount" aria-describedby="product-discount-addon">
                                                                    <?php foreach ($listuser as $index => $user) : ?>
                                                                        <option name="user" value="<?= $user['id'] ?>"><?= $user['user'] ?></option>
                                                                    <?php endforeach ?>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <!-- end tab-pane -->

                                        </div>
                                        <!-- end tab content -->
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                                <a href="index.php?act=listbds"><input class="btn btn-success w-sm" value="Danh sách"></a>
                                <!-- <h1>Them anh mo ta</h1>
                                <input type="file" name="images[]" multiple> -->
                                <div class="text-end mb-3">
                                    <input type="submit" name="submit" class="btn btn-success w-sm" value="Thêm">
                                </div>
                                <?php
                                if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                                ?>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Loại bất động sản</h5>
                                    </div>
                                    <div class="card-body">
                                        <select class="form-select" name="loaibds" id="choices-category-input" data-choices data-choices-search-false>
                                            <?php foreach ($listloaibds as $index => $dm) : ?>
                                                <option name="loaibds" value="<?= $dm['id'] ?>"><?= $dm['name'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Hình ảnh</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <p class="text-muted">Thêm ảnh đại diện cho bất động sản</p>
                                            <div class="text-center">
                                                <div class="position-relative d-inline-block">
                                                    <div class="position-absolute top-100 start-100 translate-middle">
                                                        <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                            <div class="avatar-xs">
                                                                <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                                    <i class="ri-image-fill"></i>
                                                                </div>
                                                            </div>
                                                        </label>
                                                        <input class="form-control d-none" name="anh" id="product-image-input" type="file" accept="image/png, image/gif, image/jpeg, image/jpg">
                                                    </div>
                                                    <div class="avatar-lg">
                                                        <div class="avatar-title bg-light rounded">
                                                            <img src="#" id="product-img" class="avatar-md h-auto" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="fs-14 mb-1">Danh mục ảnh</h5>
                                            <p class="text-muted">Thêm ảnh mô tả cho bất động sản</p>


                                            <div class="dropzone" hidden></div>
                                            <div class="fallback">
                                                <input type="file" name="files[]" multiple class="form-control">
                                            </div>
                                            

                                            <ul class="list-unstyled mb-0" id="dropzone-preview">
                                                <li class="mt-2" id="dropzone-preview-list">
                                                    <!-- This is used as the file preview template -->
                                                    <div class="border rounded">
                                                        <div class="d-flex p-2">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar-sm bg-light rounded">
                                                                    <img data-dz-thumbnail class="img-fluid rounded d-block" src="#" alt="Product-Image" />
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div class="pt-1">
                                                                    <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                                    <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                                                </div>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-3">
                                                                <button data-dz-remove class="btn btn-sm btn-danger">Xoá ảnh</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- end dropzon-preview -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </form>