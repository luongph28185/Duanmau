<?php
function viewcart()
{
    global $img_path;
    $tong = 0;
    $i = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $pay = $cart[3] * $cart[4];
        $tong += $pay;

        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="xoa"></a>';
        echo '<tr>
                        <td><img src="' . $hinh . '" alt="" width=80px;></td>
                        <td>' . $cart[1] . '</td>
                        <td>' . $cart[3] . '</td>
                        <td>' . $cart[4] . '</td>
                        <td>' . $pay . '</td>
                        <td>' . $xoasp . '</td>
                        </tr>';
        $i += 1;
    }
    echo '<tr>
                        <td colspan="4">Tổng đơn hàng</td>
                        <td>' . $tong . '</td>
                        </tr>';
}
function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    echo '<tr>
                        <td>hình</td>
                        <td>sản phẩm</td>
                        <td>đơn giá</td>
                        <td>số lượng</td>
                        <td>thành tiền</td>
                        <td>thao tác</td>
        </tr>';


    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];

        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="xoa"></a>';
        echo '<tr>
                        <td><img src="' . $hinh . '" alt="" width=80px;></td>
                        <td>' . $cart['name'] . '</td>
                        <td>' . $cart['price'] . '</td>
                        <td>' . $cart['soluong'] . '</td>
                        <td>' . $cart['thanhtien'] . '</td>
                        <td>' . $xoasp . '</td>
                        </tr>';
        $i += 1;
    }
    echo '<tr>
                        <td colspan="4">Tổng đơn hàng</td>
                        <td>' . $tong . '</td>
                        </tr>';
}
function tong_donhang()
{

    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $pay = $cart[3] * $cart[4];
        $tong += $pay;
    }
    return $tong;
}
function insert_bill($iduser, $name, $email, $adress, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO bill(iduser,bill_name,bill_email,bill_adress,bill_tel,bill_pttt,ngaydathang,total) 
    VALUES ('$iduser','$name','$email','$adress','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) 
    VALUES ('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_bill($iduser){
    $sql="select * from bill where 1";
    if($iduser>0) $sql.=" AND iduser=".$iduser;
    $sql.=" order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadall_b(){
    $sql = "select * from bill order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function delete_bill($id){
    $sql = "delete from bill where id=".$_GET['id'];
    pdo_execute($sql);
}
function loadall_cart($idbill){
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill){
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function get_ttdh($n){
    switch ($n) {
        case '0':
            $tt = "đơn hàng mới";
            break;
        case '1':
            $tt = "đang xử lý";
            break;
        case '2':
            $tt = "đang giao hàng";
            break;
        case '3':
            $tt = "hoàn tất";
            break;

        default:
            $tt = "đơn hàng mới";
            break;
    }
    return $tt;
}
function loadall_thongke(){
    $sql="select loai.ma_loai as madm, loai.ten_loai as tendm, count(hanghoa.ma_hh) as countsp, min(hanghoa.don_gia) as minprice, max(hanghoa.don_gia) as maxprice, avg(hanghoa.don_gia) as avgprice";
    $sql.=" from hanghoa left join loai on loai.ma_loai=hanghoa.ma_hh";
    $sql.=" group by loai.ma_loai order by loai.ma_loai desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
