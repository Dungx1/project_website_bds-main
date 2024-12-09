<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Cập nhật động sản</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bất động sản</a></li>
                                <li class="breadcrumb-item active">Cập nhật</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form id="createproduct-form" autocomplete="off" class="needs-validation" action="index.php?act=updatebds" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Tên bất động sản</label>
                                    <input type="text" name="name_bds" value="<?= $name ?>" class="form-control" id="product-title-input" placeholder="Nhập vào tên bất động sản" required>
                                </div>

                                <div>
                                    <label>Mô tả</label>
                                    <textarea name="mota" id="ckeditor-classic" cols="50" rows="10"><?= $info ?></textarea>
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
                                                <input type="text" name="diachi" value="<?= $location ?>" class="form-control" id="manufacturer-name-input" placeholder="Nhập vào địa chỉ" required>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="stocks-input">Số phòng</label>
                                                    <input type="number" name="sophong" value="<?= $sophong ?>" class="form-control" id="stocks-input" placeholder="Nhập số phòng ngủ" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="product-price-input">Giá</label>
                                                    <div class="input-group has-validation mb-3">
                                                        <span class="input-group-text" id="product-price-addon">$</span>
                                                        <input type="text" name="gia" value="<?= $price ?>" class="form-control" id="product-price-input" placeholder="Nhập vào giá" aria-label="Price" aria-describedby="product-price-addon" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="product-price-input">Diện tích</label>
                                                    <div class="input-group has-validation mb-3">
                                                        <span class="input-group-text" id="product-price-addon">m2</span>
                                                        <input type="number" name="dientich" value="<?= $dientich ?>" class="form-control" id="product-price-input" placeholder="VD 80" aria-label="Price" aria-describedby="product-price-addon" required>
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

                        <div class="text-end mb-3">
                            <input type="hidden" name="id" id="" value="<?php if (isset($id) && ($id > 0)) echo $bds['id']; ?>">
                            <input type="submit" name="submit" class="btn btn-success w-sm" value="Cập nhật">
                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                    <input type="button" class="btn btn-success w-sm" value="Xóa"></a>
                            </li>
                            <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mt-2 text-center">
                                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                    <h4>Are you sure ?</h4>
                                                    <p class="text-muted mx-4 mb-0">Bạn có chắc muốn xóa loại bất động sản này không ?</p>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Không</button>
                                                <a href="index.php?act=deletebds&id=<?php if (isset($id) && ($id > 0)) echo $id; ?>"><button type="button" class="btn w-sm btn-danger" id="delete-record">Cóoooooo!</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                        <option name="name" <?php if ($bds['id_loaibds'] == $dm['id']) : ?>selected <?php
                                            endif ?> value="<?= $dm['id'] ?>"><?= $dm['name'] ?></option>
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
                                                    <?php
                                                    $linkanh = "../" . $bds['img'];
                                                    ?>
                                                    <?php if ($bds['img']  != "") : ?>
                                                        <div>
                                                            <img src="<?= $linkanh ?>" width="80px" height="80px">
                                                        </div>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!-- end col -->
                </div>
                <!-- end row -->

            </form>