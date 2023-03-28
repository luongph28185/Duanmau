<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybl){
    $sql = "INSERT INTO binhluan(noidung,iduser,idpro,ngaybl) VALUES ('$noidung','$iduser','$idpro','$ngaybl')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql = "select * from binhluan where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'";
    $sql.=" order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function loadall_bl(){
    $sql = "select * from binhluan order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function delete_binhluan($id){
    $sql = "delete from binhluan where id=".$_GET['id'];
    pdo_execute($sql);
}
?>