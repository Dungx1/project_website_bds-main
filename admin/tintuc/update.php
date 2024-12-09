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
                        <h4 class="mb-sm-0">Chỉnh Sửa Tin Tức</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tin Tức</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form id="createproduct-form" autocomplete="off" class="needs-validation" action="index.php?act=updatetintuc" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Tiêu đề</label>
                                    <input type="text" name="tieude" class="form-control" id="product-title-input" value="<?php if (isset($tieude) && ($tieude != "")) echo $tieude; ?>">
                                </div>

                                <div>
                                    <label>Nội dung</label>
                                    <textarea name="noidung" id="ckeditor-classic" cols="50" rows="10"><?php if (isset($noidung) && ($noidung != "")) echo $noidung; ?></textarea>
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
                                                <label class="form-label" for="manufacturer-name-input">Mô tả ngắn</label>
                                                <input type="text" name="mota_ngan" class="form-control" id="manufacturer-name-input" value="<?php if (isset($mota_ngan) && ($mota_ngan != "")) echo $mota_ngan; ?>">
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row">


                                            <div class="col-lg-6 col-sm-2">
                                                <div class="mb-3">
                                                    <div class="card">
                                                        <label class="form-label" for="product-discount-input">Loại tin tức</label>
                                                        <select class="form-select" name="danhmuctt" id="choices-category-input" data-choices data-choices-search-false>
                                                            <?php foreach ($list_tintuc as $index => $dmtt) : ?>
                                                                <option name="name" <?php if ($tintuc['id_danhmuctt'] == $dmtt['id']) : ?>selected <?php
                                                                     endif ?> value="<?=$dmtt['id'] ?>"><?= $dmtt['name'] ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="product-discount-input">Người đăng</label>
                                                    <div class="input-group mb-3">
                                                        <select name="nguoidang" class="form-control" id="product-discount-input" aria-label="discount" aria-describedby="product-discount-addon">
                                                            <?php foreach ($listuser as $index => $user) : ?>
                                                                <option name="user" <?php if ($tintuc['id_user'] == $user['id']) : ?>selected <?php
                                                                     endif ?> value="<?= $user['id'] ?>"><?= $user['user'] ?></option>
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
                        <input type="submit" name="capnhat" class="btn btn-success w-sm" value="Cập nhật">
                        <div class="text-end mb-3">
                            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                            <a href="index.php?act=listtintuc"><input class="btn btn-success w-sm" value="Danh sách"></a>

                            <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                <input type="button" class="btn btn-success w-sm" value="Xóa"></a>
                        </div>
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
                                            <a href="index.php?act=deletetintuc&id=<?php if (isset($id) && ($id > 0)) echo $id; ?>"><button type="button" class="btn w-sm btn-danger" id="delete-record">Cóoooooo!</button></a>
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
                                <h5 class="card-title mb-0">Hình ảnh</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <p class="text-muted">Thay đổi ảnh đại diện cho tin tức</p>
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
                                                    $linkanh = "../" . $tintuc['img'];
                                                    ?>
                                                    <?php if ($tintuc['img']  != "") : ?>
                                                        <div>
                                                            <img src="<?= $linkanh ?>" width="80px" height="80px">
                                                        </div>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                    
                                    <!-- end dropzon-preview -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end col -->
                </div>
                <!-- end row -->

            </form>