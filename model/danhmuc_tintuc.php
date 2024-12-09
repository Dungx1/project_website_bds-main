<?php
    function insert_danhmuctintuc($danhmuctt){
        $sql ="INSERT INTO `danhmuc_tintuc`(name) VALUES ('$danhmuctt')";
        pdo_execute($sql);
    }

    function delete_danhmuctintuc($id){
        $sql = "DELETE FROM danhmuc_tintuc WHERE id =".$id;
        pdo_query($sql);
    }

    function update_danhmuctintuc($id,$danhmuctt){
        $sql="update danhmuc_tintuc set name='".$danhmuctt."' where id=".$id;
        pdo_execute($sql);              
    }

    function loadOne_danhmuctintuc($id){
        $sql="SELECT * FROM danhmuc_tintuc where id=".$id;
        $danhmuc=pdo_query_one($sql);
        return $danhmuc;
    }

    function loadAll_danhmuctintuc(){
        $sql = "SELECT * FROM danhmuc_tintuc";
        $list_dmtintuc=pdo_query($sql);
        return $list_dmtintuc;
    }
?>