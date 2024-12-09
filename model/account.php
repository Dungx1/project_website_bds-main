<?php
function insert_account($email, $hoten, $tel, $user, $pass)
{
    $sql = "INSERT INTO account(email, hoten, tel, user, pass, id_role) 
            values('$email', '$hoten', '$tel', '$user', '$pass', '3')";
    pdo_execute($sql);
}
function checkuser($user, $pass)
{
    $sql = "SELECT * FROM account WHERE user = '$user' AND pass='$pass'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "SELECT * FROM account WHERE email='$email'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
    $sql = "UPDATE `account` SET `user` = '$user', `pass` = '$pass', `email` = '$email', `tel` = '$tel', `diachi` = '$address'
            WHERE `account`.`id` = $id";
    pdo_execute($sql);
}
function loadall_taikhoan()
{
    $sql = "SELECT*FROM account ORDER BY id DESC";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function loadOne_Nhanvien($id_nhanvien)
{
    $sql = "SELECT * FROM account where id=" . $id_nhanvien;
    $nhanvien = pdo_query_one($sql);
    return $nhanvien;
}
function loadOne_user($id)
{
    $sql = "SELECT * FROM account where id=" . $id;
    $user = pdo_query_one($sql);
    return $user;
}
function delete_taikhoan($id)
{
    $sql = "DELETE FROM  account WHERE id=" . $id;
    pdo_execute($sql);
}
function check_email($email)
{
    $conn = pdo_get_connection();
    $sql  = "SELECT * FROM `account` where email = ? ";
    $check_email = $conn->prepare($sql);
    $check_email->execute([$email]);
    $row_email = $check_email->rowCount();
    return $row_email;
}
function update_mk($password, $email)
{
    $sql = "UPDATE account 
            SET `pass` = '$password'
            WHERE `email` = '$email'";
    pdo_execute($sql);
}
