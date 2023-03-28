<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/viewcart.php";

include "header.php";
//controler
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case "adddm":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_loai = $_POST['ten_loai'];
                insert_danhmuc($ten_loai);
                $notice = "Thêm thành công !";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                delete_danhmuc($_GET['ma_loai']);
            }

            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                $arrdm = loadone_danhmuc($_GET['ma_loai']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten_loai = $_POST['ten_loai'];
                $ma_loai = $_POST['ma_loai'];
                update_danhmuc($ma_loai, $ten_loai);
                $notice = "Cập nhật thành công !";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
            //controlor sanpham

        case "addsp":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ma_loai = $_POST['ma_loai'];
                $ten_hh = $_POST['ten_hh'];
                $don_gia = $_POST['don_gia'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                $mo_ta = $_POST['mo_ta'];
                insert_sanpham($ten_hh, $don_gia, $hinh, $mo_ta, $ma_loai);
                $notice = "Thêm thành công !";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':

            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $ma_loai = $_POST['ma_loai'];
            } else {
                $kyw = "";
                $ma_loai = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $ma_loai);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['ma_hh']) && ($_GET['ma_hh'] > 0)) {
                delete_sanpham($_GET['ma_hh']);
            }

            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['ma_hh']) && ($_GET['ma_hh'] > 0)) {
                $arrsp = loadone_sanpham($_GET['ma_hh']);
            }
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ma_loai = $_POST['ma_loai'];
                $ma_hh = $_POST['ma_hh'];
                $ten_hh = $_POST['ten_hh'];
                $don_gia = $_POST['don_gia'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                $mo_ta = $_POST['mo_ta'];
                update_sanpham($ma_loai, $ma_hh, $ten_hh, $don_gia, $hinh, $mo_ta);
                $notice = "Cập nhật thành công !";
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }

            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'dsbl':
            $listbl = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }

            $listbl = loadall_bl();
            include "binhluan/list.php";
            break;
        case 'listbill':
            $listbill = loadall_bill(0);
            include "bill/listbill.php";
            break;
        case 'xoabill':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_bill($_GET['id']);
            }
            $listbill = loadall_bill(0);
            include "bill/listbill.php";
            break;
            
        case 'listtk':
            $listtk = loadall_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listtk = loadall_thongke();
            include "thongke/bieudo.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "home.php";
include "footer.php";
