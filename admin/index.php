<?php
include "../model/pdo.php";
include "../model/bds.php";
include "../model/loai_bds.php";
include "../model/user.php";
include "../model/role.php";
include "../model/tintuc.php";
include "../model/danhmuc_tintuc.php";
include "../model/dbConfig.php";
include "../model/tuvan.php";
session_start();

if (isset($_SESSION['user']) &&  ($_SESSION['user']['id_role'] != 1)) {
    $_SESSION['khong_co_quyen'] = 'Bạn không có quyền truy cập';
    header('location: ../index.php?act=dangnhap');
    die;
}else if($_SESSION['user'] == NULL){
    $_SESSION['khong_co_quyen'] = 'Bạn không có quyền truy cập';
    header('location: ../index.php?act=dangnhap');
    die;
}

include "header.php";


// if (checkAdminLogin() == false) {
//     $_SESSION['khong_co_quyen'] = 'Bạn không có quyền truy cập';
//     header('location: ../index.php?act=dangnhap');
//     die;
// }

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // Controller bat dong san
        case 'addbds':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $id_loaibds = $_POST['loaibds'];
                $tenbds = $_POST['name_bds'];
                $filename = "";
                $price = $_POST['gia'];
                $diachi = $_POST['diachi'];
                $dientich = $_POST['dientich'];
                $info = $_POST['mota'];
                $sophong = $_POST['sophong'];
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $ngaydang = date('d/m/Y');
                $id_user = $_POST['nguoidang'];
                $targetDir = '../uploads/';
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

                // UPLOAD ẢNH
                if ($_FILES["anh"]['size'] > 0) {
                    $filename = uniqid() . '-' . $_FILES["anh"]['name'];
                    move_uploaded_file($_FILES["anh"]['tmp_name'], '../uploads/' . $filename);
                    $filename = 'uploads/' . $filename;
                }
                // END UPLOAD

                // UPLOAD ẢNH MÔ TẢ
                $id = insert_bds($tenbds, $filename, $price, $diachi, $dientich, $info, $sophong, $ngaydang, $id_loaibds, $id_user);
                foreach ($_FILES["files"]['name'] as $key => $val) {
                    $fileName = basename($_FILES['files']['name'][$key]);
                    $targetFilePath = $targetDir . $fileName;

                    // Check whether file type is valid 
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                    if (in_array($fileType, $allowTypes)) {
                        // Upload file to server 

                        if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                            // Image db insert sql 
                            $upload_img = '/HPV_DA1/uploads/' . $fileName;
                            insert_anhmota($upload_img, $id);
                        }
                    }
                }
                $thongbao = "Add Succesfull";
            }
            $listloaibds = loadAll_danhmuc();
            $listuser = loadAll_user();
            include "bds/add_bds.php";
            break;
        case 'listbds':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_POST['loaibds']) && ($_POST['loaibds'] != "")) {
                $id_loaibds = $_POST['loaibds'];
            } else {
                $id_loaibds = 0;
            }
            $listloaibds = loadAll_danhmuc();
            $listbds = loadall_bds($kyw, $id_loaibds);
            include "bds/list_bds.php";
            break;
        case 'deletebds':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_bds($_GET['id']);
            }
            $listbds = loadall_bds();
            include "bds/list_bds.php";
            break;
        case 'fixbds':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $bds = loadone_bds($_GET['id']);
                $anhmota = load_anhmota($_GET['id']);
                if (is_array($bds)) {
                    extract($bds);
                }
            }
            $listuser = loadAll_user();
            $listloaibds = loadAll_danhmuc();
            include "bds/update_bds.php";
            break;
        case 'updatebds':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $id_bds = $_POST['id'];
                $bds = loadone_bds($id_bds);
                $tenbds = $_POST['name_bds'];
                $anh = $_FILES['anh'];
                $imgValue = $bds['img'];
                $price = $_POST['gia'];
                $diachi = $_POST['diachi'];
                $dientich = $_POST['dientich'];
                $info = $_POST['mota'];
                $sophong = $_POST['sophong'];
                $id_loaibds = $_POST['loaibds'];
                $id_user = $_POST['nguoidang'];
                $filename = "";
                $targetDir = '../uploads/';
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

                // UPDATE ẢNH
                if ($anh['size'] > 0) {
                    $filename = uniqid() . '-' . $anh['name'];
                    move_uploaded_file($anh['tmp_name'], '../uploads/' . $filename);
                    $imgValue = 'uploads/' . $filename;
                }
                // UPLOAD ẢNH MÔ TẢ


                update_bds($id, $tenbds, $imgValue, $price, $diachi, $dientich, $info, $sophong, $id_loaibds, $id_user);
                $thongbao = "Add Succesfull";
            }
            $listloaibds = loadAll_danhmuc();
            $listbds = loadall_bds();
            $listuser = loadAll_user();
            include "bds/list_bds.php";
            break;
        case 'fix_anhmota':
            if (isset($_GET['id_anhmota']) && ($_GET['id_anhmota'] > 0)) {
                $oneanhmota = one_anhmota($_GET['id_anhmota']);
                if (
                    is_array($oneanhmota)
                ) {
                    extract($oneanhmota);
                }
            }
            include "index.php?act=fixbds";
            break;
        case 'update_anhmota':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST["id"];
                $anh = $_FILES['anh'];
                $imgValue = $oneanhmota['file_name'];
                $oneanhmota = one_anhmota($id);
                if ($anh['size'] > 0) {
                    $filename = $anh['name'];
                    move_uploaded_file($anh['tmp_name'], '/DA1_HPV/uploads/' . $filename);
                    $oneanhmota = '/DA1_HPV/uploads/' . $filename;
                }
                update_anhmota($id, $oneanhmota);
            }
            include 'index.php?act=fixbds';
            break;
        case 'delete_anhmota':
            if (isset($_GET['id_anhmota']) && ($_GET['id_anhmota'] > 0)) {
                $id = $_GET['id_anhmota'];
                delete_anhmota($id);
            }
            $anhmota = load_anhmota($id_bds);
            break;
            // Controller loai bat dong san
        case "addloaibds": {
                if (isset($_POST["loaibds"]) && $_POST["loaibds"]) {
                    $loaibds = $_POST["loaibds"];
                    insert_danhmuc($loaibds);
                    $thongbao = 1;
                } else {
                    $thongbao = 0;
                }
                include "loai_bds/add.php";
                break;
            }
        case 'listloaibds':
            $listloaibds = loadAll_danhmuc();
            include "loai_bds/list.php";
            break;
        case 'deleteloaibds':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listloaibds = loadAll_danhmuc();
            include "loai_bds/list.php";
            break;
        case 'sualoaibds':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $loaibds = loadOne_danhmuc($_GET['id']);
                if (is_array($loaibds)) {
                    extract($loaibds);
                }
            }
            include "loai_bds/update.php";
            break;
        case 'updateloaibds':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $loaibds = $_POST["loaibds"];
                $id = $_POST["id"];
                update_danhmuc($id, $loaibds);
            }
            $listloaibds = loadAll_danhmuc();
            include "loai_bds/list.php";
            break;

            // Controller user
        case 'listuser':
            if (isset($_POST['iduser']) && ($_POST['iduser'] != "")) {
                $iduser = $_POST['iduser'];
            } else {
                $iduser = "";
            }
            if (isset($_POST['id_role']) && ($_POST['id_role'] != "")) {
                $id_role = $_POST['id_role'];
            } else {
                $id_role = "";
            }
            $listuser = loadAll_user($iduser, $id_role);
            include "user/list.php";
            break;
        case 'deleteuser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_user($_GET['id']);
            }
            $listuser = loadAll_user();
            include "user/list.php";
            break;
        case 'suauser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $user = loadOne_user($_GET['id']);
                if (is_array($user)) {
                    extract($user);
                }
            }
            $listrole = loadAll_role();
            include "user/update.php";
            break;
        case 'updateuser':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_role = $_POST["id_role"];
                $id = $_POST["id"];
                update_user($id, $id_role);
            }
            $listrole = loadAll_role();
            $listuser = loadAll_user();
            include "user/list.php";
            break;

            //role
        case 'listrole':
            $listrole = loadAll_role();
            break;
            // Controller danh muc tin tuc
        case "add_dm_tintuc": {
                if (isset($_POST['danhmuc_tintuc']) && $_POST['danhmuc_tintuc']) {
                    $danhmuctt = $_POST["danhmuc_tintuc"];
                    insert_danhmuctintuc($danhmuctt);
                    $thongbao = 1;
                } else {
                    $thongbao = 0;
                }
                include "dm_tintuc/add_tt.php";
                break;
            }
        case 'list_dmtintuc':
            $list_dmtintuc = loadAll_danhmuctintuc();
            include "dm_tintuc/list_tt.php";
            break;
        case 'deletedm-tintuc':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuctintuc($_GET['id']);
            }
            $list_dmtintuc = loadAll_danhmuctintuc();
            include "dm_tintuc/list_tt.php";
            break;
        case 'sua_dmtintuc':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $danhmuc_tintuc = loadOne_danhmuctintuc($_GET['id']);
                if (is_array($danhmuc_tintuc)) {
                    extract($danhmuc_tintuc);
                }
            }

            include "dm_tintuc/update_tt.php";
            break;
        case 'update_dmtintuc':
            if (isset($_POST['capnhat'])) {
                $id = $_POST["id"];
                $danhmuc_tintuc = $_POST["danhmuctintuc"];

                update_danhmuctintuc($id, $danhmuc_tintuc);
            }
            $list_dmtintuc = loadAll_danhmuctintuc();
            include "dm_tintuc/list_tt.php";
            break;

            // Controller tin tuc
        case 'addtintuc':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $tieude = $_POST['tieude'];
                $anh = $_FILES["anh"];
                $filename = "";
                $noidung = $_POST['noidung'];
                $mota_ngan = $_POST['mota_ngan'];
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $ngaydangtin = date('d/m/Y');
                $id_danhmuctt = $_POST['danhmuctt'];
                $id_user = $_POST['nguoidang'];
                // UPLOAD ẢNH
                if ($anh['size'] > 0) {
                    $filename = uniqid() . '-' . $anh['name'];
                    move_uploaded_file($anh['tmp_name'], '../uploads/' . $filename);
                    $filename = 'uploads/' . $filename;
                }
                // END UPLOAD
                insert_tintuc($tieude, $filename, $noidung, $mota_ngan, $ngaydangtin, $id_danhmuctt, $id_user);
                $thongbao = "Bạn đã thêm tin tức thành công";
            }


            $list_tintuc = loadAll_danhmuctintuc();
            $listtintuc = loadAll_tintuc();
            $listuser = loadAll_user();
            include "tintuc/add.php";
            break;
        case 'listtintuc':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_POST['id_dm']) && ($_POST['id_dm'] != "")) {
                $id_dm_tintuc = $_POST['id_dm'];
            } else {
                $id_dm_tintuc = "";
            }
            if (isset($_POST['tacgia']) && ($_POST['tacgia'] != "")) {
                $id_user = $_POST['tacgia'];
            } else {
                $id_user = "";
            }
            $listtintuc = loadAll_tintuc($kyw, $id_dm_tintuc, $id_user);
            include "tintuc/list.php";
            break;
        case 'deletetintuc':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_tintuc($_GET['id']);
            }
            $listtintuc = loadAll_tintuc();
            include "tintuc/list.php";
            break;
        case 'suatintuc':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $tintuc = loadOne_tintuc($_GET['id']);
                if (is_array($tintuc)) {
                    extract($tintuc);
                }
            }
            $listuser = loadAll_user();
            $list_tintuc = loadAll_danhmuctintuc();
            include "tintuc/update.php";
            break;
        case 'updatetintuc':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST["id"];
                $tintuc = loadOne_tintuc($id);
                $tieude = $_POST['tieude'];
                $anh = $_FILES['anh'];
                $imgValue = $tintuc['img'];
                $noidung = $_POST['noidung'];
                $mota_ngan = $_POST['mota_ngan'];
                $id_danhmuctt = $_POST['danhmuctt'];
                $id_user = $_POST['nguoidang'];
                // UPDATE ẢNH
                if ($anh['size'] > 0) {
                    $filename = uniqid() . '-' . $anh['name'];
                    move_uploaded_file($anh['tmp_name'], '../uploads/' . $filename);
                    $imgValue = 'uploads/' . $filename;
                }
                update_tintuc($id, $tieude, $imgValue, $noidung, $mota_ngan, $id_danhmuctt, $id_user);
                $thongbao = "Add Succesfull";
            }
            $list_tintuc = loadAll_danhmuctintuc();
            $listtintuc = loadall_tintuc();
            $listuser = loadAll_user();
            include "tintuc/list.php";
            break;
            // Tu van
        case 'list_bds_tuvan':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_POST['fill']) && ($_POST['fill'] != "")) {
                $stt = $_POST['fill'];
            } else {
                $stt = "";
            }
            $listnhanvien = loadAll_nhanvien();
            $listtuvan = loadAll_bds_tuvan($kyw, $stt);
            include 'tuvan/list.php';
            break;
        case 'delete_bds_tuvan':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_tuvan($_GET['id']);
            }
            $listnhanvien = loadAll_nhanvien();
            $listtuvan = loadAll_bds_tuvan();
            include 'tuvan/list.php';
            break;
        case 'sua_bds_tuvan':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $tuvan = loadOne_bds_tuvan($_GET['id']);
                if (is_array($tuvan)) {
                    extract($tuvan);
                }
            }
            $listnhanvien = loadAll_nhanvien();
            $list_tintuc = loadAll_danhmuctintuc();
            include "tuvan/update.php";
            break;
        case 'update_bds_tuvan':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_POST['capnhat'])) {
                $id = $_POST["id"];
                $nhanvien = $_POST['user'];
                $trangthai = $_POST['trangthai'];
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $time_tuvan = date('h:i:sa d/m/Y');
                update_bds_tuvan($id, $nhanvien, $trangthai, $time_tuvan);
            }
            $listtuvan = loadAll_bds_tuvan($kyw);
            include 'tuvan/list.php';
            break;
            // Nhan vien
        case 'list_nhanvien':
            $listnhanvien = loadAll_nhanvien();
            include 'nhanvien/list.php';
            break;
            // 
        case 'exit':
            session_unset();
            header('location:view/account/login.php');
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";