<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Sửa ảnh mô tả</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ảnh mô tả</a></li>
                                <li class="breadcrumb-item active">Sửa</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form action="index.php?act=update_anhmota" method="post" id="createproduct-form" autocomplete="off" class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Ảnh mô tả</label><br>
                                    <input type="hidden" name="id" id="" value="<?php if (isset($id) && ($id > 0)) echo $oneanhmota['id']; ?>">
                                    <img src="<?=$file_name?>" style="width: 100%;height:350px;object-fit:cover;" alt="">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Chọn tệp muốn sửa</label><br>
                                    <input type="file" name="anh" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- end card -->
                        <div class="text-end mb-3">
                        <input type="submit" name="capnhat" class="btn btn-success w-sm" value="Sửa">
                            <a href="index.php?act=listbds"><button type="button" class="btn btn-success w-sm">Danh sách</button></a>
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