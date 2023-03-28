<?php
session_start();
include "model/pdo.php";
include "model/taikhoan.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/viewcart.php";
include "view/header.php";
include "globle.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                $ma_loai = $_GET['ma_loai'];
            } else {
                $ma_loai = 0;
            }
            $dssp = loadall_sanpham($kyw, $ma_loai);
            $ten_loai = load_ten_dm($ma_loai);
            include "view/sanpham.php";
            break;


        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $ma_hh = $_GET['idsp'];
                $one_sp = loadone_sanpham($ma_hh);
                extract($one_sp);
                $sp_cung_loai = load_sanpham_cungloai($ma_hh, $ma_loai);

                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }

            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "đăng ký thành công, vui lòng đăng nhập!";
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('location:index.php');
                    //$thongbao = "bạn đã đăng nhập thành công!";
                } else {
                    $thongbao = "Tài khoản không hợp lệ";
                }
                insert_taikhoan($email, $user, $pass);
            }

            include "view/taikhoan/dangnhap.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $adress = $_POST['adress'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $adress, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                header('location:index.php?act=edit_taikhoan');
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "mật khẩu của bạn là " . $checkemail['pass'];
                } else {
                    $thongbao = "email không tồn tại ";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        case 'thoat':
            session_unset();
            header('location: index.php');
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['ma_hh'];
                $namesp = $_POST['ten_hh'];
                $img = $_POST['hinh'];
                $price = $_POST['don_gia'];
                $soluong = 1;
                $pay = $price * $soluong;
                $spadd = [$id, $namesp, $img, $price, $soluong, $pay];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "view/cart/viewcart.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_slice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('location: index.php?act=viewcart');
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'billcomfirm':

            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
                else $id = 0;
                $name = $_POST['name'];
                $email = $_POST['email'];
                $adress = $_POST['adress'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongdonhang = tong_donhang();
                $idbill = insert_bill($iduser, $name, $email, $adress, $tel, $pttt, $ngaydathang, $tongdonhang);
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "view/cart/billcomfirm.php";
            break;
        case 'mybill':
            $listbill=loadall_bill($_SESSION['user']['id']);
            include "view/cart/mybill.php";
            break;
        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
