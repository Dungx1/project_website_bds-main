<?php 
    function loadAll_role(){
        $sql = "SELECT * FROM role order by id_role";
        $listrole=pdo_query($sql);
        return $listrole;
    }
    function loadOne_role($id_role){
        $sql="SELECT * FROM role where id_role=".$id_role;
        $role=pdo_query_one($sql);
        return $role;
    }
