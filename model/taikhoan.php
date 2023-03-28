<?php
function loadall_taikhoan(){
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id){
    $sql = "delete from taikhoan where id=".$_GET['id'];
    pdo_execute($sql);
}
function insert_taikhoan($email,$user,$pass){
    $sql = "INSERT INTO taikhoan(email,user,pass) VALUES ('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user, $pass){
    $sql = "select * from taikhoan where user='".$user."' AND pass='".$pass."'";
    $arrsp = pdo_query_one($sql);
    return $arrsp;
} 
function checkemail($email){
    $sql = "select * from taikhoan where email='".$email."'";
    $arrsp = pdo_query_one($sql);
    return $arrsp;
} 
function update_taikhoan($id,$user,$pass,$email,$adress,$tel){
   
    $sql = "UPDATE taikhoan set user='".$user."',pass='".$pass."',email='".$email."',adress='".$adress."',tel='".$tel."' where id=".$id;
    pdo_execute($sql);
}
?>