<?php
    // Kiểm tra định dạng email
function is_email($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}
function is_tel($str){
    return (!preg_match("/^(09|03|07|08|05|02)+([0-9]{8})$/",$str)) ? FALSE : TRUE;
}
?>