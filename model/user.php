<?php
  function delete_taikhoan($id){
    $sql = "DELETE FROM  account WHERE id=".$id;
    pdo_execute($sql);
}
    function delete_user($id){
        $sql = "DELETE FROM account WHERE id =".$id;
        pdo_query($sql);
    }

    function loadAll_user($iduser = 0,$id_role = 0){
        $sql = "SELECT * FROM account WHERE 1";
        if ($iduser > 0) {
            $sql .= " and id= '" . $iduser . "' ";
        }
        if ($id_role > 0) {
            $sql .= " and id_role= '" . $id_role . "' ";
        }
        $sql .= " ORDER BY id DESC";
        $listuser=pdo_query($sql);
        return $listuser;
    }
    function update_user($id,$id_role){
        $sql="update account set id_role='".$id_role."' where id=".$id;
        pdo_execute($sql);              
    }
    function loadAll_nhanvien(){
        $sql = "SELECT * FROM account where id_role=2";
        $listnhanvien=pdo_query($sql);
        return $listnhanvien;
    } 
    function loadOne_Nhanvien($id){
        $sql = "SELECT * FROM account where id_role=2 and id=".$id;
        $nhanvien=pdo_query_one($sql);
        return $nhanvien;
    }
    function loadOne_user($id){
        $sql="SELECT * FROM account where id=".$id;
        $user=pdo_query_one($sql);
        return $user;
    }
    function loadAll_tacgia(){
        $sql = "SELECT * FROM account where id_role=4 or id_role= 1";
        $listtacgia=pdo_query($sql);
        return $listtacgia;
    } 
    function checkAdminLogin(){
        if (isset($_SESSION['user']) && ($_SESSION['user']['id_role'] == 1)) {
            return true;
        }
        return false;
    }
?>
