<?php
function insert_sanpham($ten_hh,$don_gia,$hinh,$mo_ta,$ma_loai){
    $sql = "INSERT INTO hanghoa(ten_hh,don_gia,hinh,mo_ta,ma_loai) VALUES ('$ten_hh','$don_gia','$hinh','$mo_ta','$ma_loai')";
    pdo_execute($sql);
}
function delete_sanpham($ma_hh){
    $sql = "delete from hanghoa where ma_hh=".$_GET['ma_hh'];
    pdo_execute($sql);
}

function loadall_sanpham($kyw,$ma_loai){
    $sql = "select * from hanghoa where 1";
    if($kyw!=""){
        $sql.=" and name like'%".$kyw."%'";
    }
    if($ma_loai>0){
        $sql.=" and ma_loai ='".$ma_loai."'";
    }
    $sql.=" order by ma_hh desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home(){
    $sql = "select * from hanghoa where 1 order by ma_hh desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10(){
    $sql = "select * from hanghoa where 1 order by luot_xem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($ma_hh){
    $sql = "select * from hanghoa where ma_hh=".$ma_hh;
    $arrsp = pdo_query_one($sql);
    return $arrsp; 
}
function load_ten_dm($ma_loai){
    if($ma_loai >0){
    $sql = "select * from loai where ma_loai=".$ma_loai;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $ten_loai; 
    }
    else{
        return "";
    }
}
function load_sanpham_cungloai($ma_hh,$ma_loai){
    $sql = "select * from hanghoa where ma_loai=".$ma_loai." AND ma_hh <> ".$ma_hh;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($ma_loai,$ma_hh,$ten_hh,$don_gia,$hinh,$mo_ta){
    if($hinh!="")
    $sql = "UPDATE hanghoa set ma_loai='".$ma_loai."',ten_hh='".$ten_hh."',don_gia='".$don_gia."',hinh='".$hinh."',mo_ta='".$mo_ta."' where ma_hh=".$ma_hh;
    else
    $sql = "UPDATE hanghoa set ma_loai='".$ma_loai."',ten_hh='".$ten_hh."',don_gia='".$don_gia."',mo_ta='".$mo_ta."' where ma_hh=".$ma_hh;
    pdo_execute($sql);
}
?>