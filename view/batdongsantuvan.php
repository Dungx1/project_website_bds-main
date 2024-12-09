<?php
include "view/header.php";
?>
<div id="bangtuvan" class="row">
    <div class="col-lg-12">
        <div class="card" id="customerList">


            <div class="card-body">
                <div>
                    <div class="page-section breadcrumbs text-right">
                        <h1 class="nhanvien">Bảng phân công nhân viên tư vấn</h1>
                        <h5 class="bdstuvan">Danh sách bất động sản tư vấn được đăng ký</h5>
                    </div>
                    <div class="table-responsive table-card mb-1">
                        <table class="table align-middle" id="customerTable">
                            <thead class="table-light text-muted">
                                <tr>
                                    <th class="sort" data-sort="eamil">ID Tư vấn</th>
                                    <th class="sort" data-sort="eamil">Tên bất động sản</th>
                                    <th class="sort" data-sort="action">Ảnh</th>
                                    <th class="sort" data-sort="customer_name">Tên khách hàng</th>
                                    <th class="sort" data-sort="email">Email</th>
                                    <th class="sort" data-sort="phone">Sđt</th>
                                    <th class="sort" data-sort="date">Nội dung</th>
                                    <th class="sort" data-sort="status">Thời gian yêu cầu</th>
                                    <th class="sort" data-sort="status">Thời gian tư vấn</th>
                                    <th class="sort" data-sort="status">Nhân viên</th>
                                    <th class="sort" data-sort="action">Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody class="list form-check-all">
                                <tr>
                                    <?php
                                    foreach ($listtuvan as $tuvan) :
                                        extract($tuvan);
                                    if(isset($_SESSION['user'])){
                                        $id_nhanvien = $_SESSION['user']['id'];
                                    }
                                    
                                    ?>
                                <tr>
                                    <td class="customer_name"><?= $tuvan['id'] ?></td>
                                    <?php
                                        $bds = loadone_bds($tuvan['id_bds']);
                                        extract($bds);
                                        echo '
                                                <td class="customer_name">' . $name . '</td>
                                                <td class="customer_name"><img src="' . $img . '" style="object-fit:cover;width:50px;height:50px;"></td>
                                                ';
                                    ?>
                                    <?php
                                        $user = loadOne_user($tuvan['id_user']);
                                        extract($user);
                                        echo '
                                                <td class="customer_name">' . $hoten . '</td>
                                                <td class="customer_name">' . $email . '</td>
                                                <td class="customer_name">' . $tel . '</td>
                                                ';
                                    ?>
                                    <td class="customer_name"><?= $tuvan['note_user'] ?></td>
                                    <td class="customer_name"><?= $tuvan['time_yeucau'] ?></td>
                                    <td class="customer_name"><?= $tuvan['time_tuvan'] ?></td>

                                    <?php
                                        if (isset($tuvan['id_nhanvien'])) {
                                            $nhanvien = loadOne_Nhanvien($tuvan['id_nhanvien']);
                                            extract($nhanvien);
                                            echo '<td class="customer_name">' . $hoten . '</td>';
                                        } else {
                                            echo '<td class="customer_name"></td>';
                                        }
                                    ?>

                                    <?php if ($tuvan['trangthai'] == 1) : ?>
                                        <?php echo '<td style="color:green;">Đã giao việc</td>' ?>
                                    <?php else : ?>
                                        <?php echo '<td style="color:red;">Đang chờ</td>' ?>
                                    <?php endif ?>
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


<?php
include "view/footer.php";
?>