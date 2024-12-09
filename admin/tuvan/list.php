<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Danh sách bất động sản tư vấn </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bất động sản tư vấn</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="customerList">
                        <div class="card-header border-bottom-dashed">

                            <div class="row g-4 align-items-center">
                                <div class="col-sm">
                                    <div>
                                        <h5 class="card-title mb-0">Danh sách bất động sản tư vấn:</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-body border-bottom-dashed border-bottom">
                            <form action="index.php?act=list_bds_tuvan" method="POST">
                                <div class="row g-3">
                                    <div class="col-xl-4">
                                        <div class="search-box">
                                            <input type="text" name="kyw" class="form-control search" placeholder="Nhập mã tư vấn cần tìm">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="search-box">
                                            <select name="fill" class="form-control search">
                                                <option value="">Chọn trạng thái</option>
                                                <option value="0">Đang chờ</option>
                                                <option value="1">Đã giao việc</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xl-5">
                                        <div class="row g-3">
                                            <div class="col-sm-4">
                                                <div class="">
                                                    <button type="submit" name="search" class="btn btn-success add-btn">Tìm kiếm</button>
                                                </div>
                                            </div>
                                            <!--end col-->

                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </form>
                        </div>

                        <div class="card-body">
                            <div>
                                <div class="table-responsive table-card mb-1">
                                    <table class="table align-middle" id="customerTable">
                                        <thead class="table-light text-muted">
                                            <tr>
                                                <th>Mã tư vấn</th>
                                                <th>Tên bất động sản</th>
                                                <th>Tên khách hàng</th>
                                                <th>Email</th>
                                                <th>Sđt</th>
                                                <th>Lời nhắn</th>
                                                <th>Thời gian yêu cầu</th>
                                                <th>Trạng thái</th>
                                                <th>Nhân viên</th>
                                                <th>Thời gian tư vấn</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            <tr>
                                                <?php
                                                foreach ($listtuvan as $tuvan) : {
                                                        extract($tuvan);
                                                        $uptuvan = "index.php?act=sua_bds_tuvan&id=" . $id;
                                                        $deltuvan = "index.php?act=delete_bds_tuvan&id=" . $id;
                                                    } 
                                                    ?>
                                                    <td class="customer_name"><?= $tuvan['id'] ?></td>
                                                    <?php
                                                        $bds = loadone_bds($tuvan['id_bds']);
                                                        extract($bds);
                                                        echo '
                                                        <td class="customer_name">' . $name . '</td>
                                                        ';
                                                    ?>
                                                    <?php
                                                        $user = loadOne_user($tuvan['id_user']);
                                                        extract($user);
                                                        echo '
                                                        <td class="customer_name">' . $user . '</td>
                                                        <td class="customer_name">' . $email . '</td>
                                                        <td class="customer_name">' . $tel . '</td>
                                                        ';
                                                    ?>
                                                    <td class="customer_name"><?= $tuvan['note_user'] ?></td>
                                                    <td class="customer_name"><?= $tuvan['time_yeucau'] ?></td>
                                                    <td>
                                                        <?php if ($tuvan['trangthai'] == 1) : ?>
                                                            <?php echo '<a class="btn btn-success">Đã giao việc</a>' ?>
                                                        <?php else : ?>
                                                            <?php echo '<a class="btn btn-danger" href="' . $uptuvan . '">Đang chờ</a>' ?>
                                                        <?php endif ?>
                                                    </td>

                                                    <?php
                                                    if (isset($tuvan['id_nhanvien'])) {
                                                        $nhanvien = loadOne_Nhanvien($tuvan['id_nhanvien']);
                                                        extract($nhanvien);
                                                        echo '<td class="customer_name">' . $user . '</td>';
                                                    } else {
                                                        echo '<td class="customer_name"></td>';
                                                    }
                                                    ?>
                                                    <td class="customer_name"><?= $tuvan['time_tuvan'] ?></td>
                                                    <td class="customer_name">
                                                        <a href="<?= $deltuvan ?>">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        </a>
                                                    </td>
                                            </tr>
                                        <?php endforeach ?>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!--end col-->
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->