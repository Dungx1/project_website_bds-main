<?php
function delete_tintuc($id)
{
    $sql = "DELETE FROM tintuc WHERE id =" . $id;
    pdo_query($sql);
}

function insert_tintuc($tieude, $hinh, $noidung, $mota_ngan, $ngaydangtin, $id_danhmuctt, $id_user)
{
    $sql = "INSERT INTO  tintuc(tieude,img,noidung,mota_ngan,ngaydangtin,id_danhmuctt,id_user) 
        values('$tieude','$hinh','$noidung','$mota_ngan','$ngaydangtin','$id_danhmuctt','$id_user')";
    pdo_execute($sql);
}

function loadOne_tintuc($id)
{
    $sql = "SELECT * FROM tintuc where id=" . $id;
    $tintuc = pdo_query_one($sql);
    return $tintuc;
}

// function loadAll_tintuc()
// {
//     $sql = "SELECT * FROM tintuc order by tieude desc limit 0,5";
//     $listtintuc = pdo_query($sql);
//     return $listtintuc;
// }


function loadAll_tintuc($kyw = "", $id_dm_tintuc = 0,$id_user=0)
{
    $sql = "SELECT * FROM tintuc WHERE 1";
    if ($kyw != "") {
        $sql .= " and tieude like '%" . $kyw . "%'";
    }
    if ($id_dm_tintuc > 0) {
        $sql .= " and id_danhmuctt = '" . $id_dm_tintuc . "' ";
    }
    if ($id_user > 0) {
        $sql .= " and id_user = '" . $id_user . "' ";
    }
    $sql .= " ORDER BY id DESC";
    $listtintuc = pdo_query($sql);
    return $listtintuc;
}

function load_ten_tt($id_tintuc)
{
    if ($id_tintuc > 0) {
        $sql = "SELECT * FROM tintuc$id_tintuc WHERE id=" . $id_tintuc;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}


function tang_viewtintuc($id)
{
    $sql = "UPDATE tintuc SET view = view + 1 WHERE id=" . $id;
    pdo_query($sql);
}
function load_tintuc_cungloai($id,$id_danhmuctt)
{
    $sql = "Select * from tintuc WHERE id_danhmuctt = " . $id_danhmuctt . " AND id <> " . $id;
    $tintuc = pdo_query($sql);
    return $tintuc;
}
function loadAll_tintuc_top5()
{
    $sql = "Select * from tintuc WHERE id order by view desc limit 0,5";
    $listtintuc = pdo_query($sql);
    return $listtintuc;
}

function update_tintuc($id, $tieude, $imgValue, $noidung, $mota_ngan, $id_danhmuctt, $id_user)
{
    $sql = "UPDATE `tintuc` SET 
        `tieude`='$tieude',
        `noidung`='$noidung',
        `img`='$imgValue',
        `id_danhmuctt`='$id_danhmuctt',
        `id_user`=' $id_user',
        `mota_ngan`='$mota_ngan'
         WHERE id = " . $id;
    pdo_execute($sql);
}