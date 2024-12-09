<?php
    function insert_danhmuc($loaibds){
        $sql ="INSERT INTO `loaibds`(`name`) VALUES ('$loaibds')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id){
        $sql = "DELETE FROM loaibds WHERE id=".$id;
        pdo_query($sql);
    }

    function update_danhmuc($id,$loaibds){
        $sql="update loaibds set name='".$loaibds."' where id=".$id;
        pdo_execute($sql);              
    }

    function loadOne_danhmuc($id){
        $sql="SELECT * FROM loaibds where id=".$id;
        $danhmuc=pdo_query_one($sql);
        return $danhmuc;
    }

    function loadAll_danhmuc(){
        $sql = "SELECT * FROM loaibds order by id";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }
?>