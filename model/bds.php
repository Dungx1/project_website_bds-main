<?php
function insert_bds($tenbds, $hinh, $price, $diachi, $dientich, $info, $sophong,$ngaydang,$id_loaibds,$id_user)
{
    $sql = "INSERT INTO `bds` (`name`, `img`, `price`, `location`, `dientich`, `info`, `sophong`, `ngaydang`, `id_loaibds`, `id_user`) 
        VALUES ('$tenbds', '$hinh', '$price', '$diachi', '$dientich', '$info', '$sophong', '$ngaydang', '$id_loaibds','$id_user')";
    $id = pdo_query_last_id($sql);
    return $id;
}

function delete_bds($id)
{
    $sql = "DELETE FROM bds WHERE id=" . $id;
    pdo_execute($sql);
}
function loadall_bds($kyw = "", $id_loaibds = 0)
{
    $sql = "SELECT * FROM bds WHERE 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($id_loaibds > 0) {
        $sql .= " and id_loaibds= '" . $id_loaibds . "' ";
    }

    $sql .= " ORDER BY id DESC";
    $listbds = pdo_query($sql);
    return $listbds;
}
function loadall_bds_home()
{
    $sql = "SELECT*FROM bds WHERE 1 ORDER BY id DESC LIMIT 0,8";
    $listpro = pdo_query($sql);
    return $listpro;
}
function load_ten_dm($id_loaibds)
{
    if ($id_loaibds > 0) {
        $sql = "SELECT * FROM loaibds WHERE id=" . $id_loaibds;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
function loadone_bds($id)
{
    $sql = "SELECT * FROM bds WHERE id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_bds_cungloai($id, $id_loaibds)
{
    $sql = "SELECT * FROM bds WHERE id_loaibds=" . $id_loaibds . " AND id<>" . $id;
    $listbds = pdo_query($sql);
    return $listbds;
}
function update_bds($id, $tenbds, $imgValue, $price, $diachi, $dientich, $info, $sophong, $id_loaibds, $id_user)
{
        $sql="UPDATE `bds` SET 
        `name`='$tenbds',
        `img`='$imgValue',
        `price`='$price',
        `location`='$diachi',
        `dientich`='$dientich',
        `info`='$info',
        `sophong`='$sophong',
        `id_loaibds`='$id_loaibds',
        `id_user`='$id_user' WHERE `id`='$id' ";
    pdo_execute($sql);
}
function tang_view($id)
{
    $sql = "UPDATE bds SET luotxem = luotxem + 1 WHERE id=" . $id;
    pdo_query($sql);
}
function loadAll_bds_top5()
{
    $sql = "Select * from bds WHERE 1 order by luotxem desc limit 0,5";
    $listpro = pdo_query($sql);
    return $listpro;
}
function insert_anhmota($fileName,$id_bds){
    $sql = "INSERT INTO `images`(`file_name`, `id_bds`) VALUES ('$fileName','$id_bds')";
    pdo_execute($sql);
}
function update_anhmota($id,$fileName){
    $sql = "UPDATE `images` SET 
    `file_name` = '$fileName' WHERE id=".$id;
    pdo_execute($sql);
}
function delete_anhmota($id){
    $sql = "DELETE FROM images WHERE id=" . $id;
    pdo_execute($sql);
}
function load_anhmota($id)
{
    $sql = "SELECT * FROM images where id_bds=".$id;
    $anhmota = pdo_query($sql);
    return $anhmota;
}
function one_anhmota($id){
    $sql = "SELECT * FROM images where id=".$id;
    $oneanhmota = pdo_query_one($sql);
    return $oneanhmota;
}