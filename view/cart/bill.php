<div class="row">
    <div class="col-sm-9">
        <div class="alert alert-success mt-3">Thông Tin Đặt Hàng</div>
        <form action="index.php?act=billcomfirm" method="POST">
            <div class="card">
                <table>
                    <?php
                    if (isset($_SESSION['user'])) {
                        $name = $_SESSION['user']['user'];
                        $adress = $_SESSION['user']['adress'];
                        $email = $_SESSION['user']['email'];
                        $tel = $_SESSION['user']['tel'];
                       
                    } else {
                        $name = "";
                        $adress = "";
                        $email = "";
                        $tel = "";
                        
                    }
                    ?>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><input type="text" name="name" value="<?= $name ?>"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="adress" value="<?= $adress ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="<?= $email ?>"></td>
                    </tr>
                    <tr>
                        <td>Điện thoai</td>
                        <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                    </tr>
                </table>
            </div>

            <div class="list-opt mt-4">
                <div class="card">
                    <div class="card-header" style="border-bottom: none; font-weight: 500">
                        Phương Thức Thanh Toán
                    </div>

                    <div class="card-footer" style="border-top: none">
                        <table border='1'>

                            <tr>
                                <td><input type="radio" name="pttt"  value="1" checked>trả tiền khi nhận hàng</td>
                                <td><input type="radio" name="pttt"  value="2">thanh toán vi momo</td>
                                <td><input type="radio" name="pttt"  value="3">thanh toán online</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="list-opt mt-4">
                <div class="card">
                    <div class="card-header" style="border-bottom: none; font-weight: 500">
                        Thông Tin Giỏ Hàng
                    </div>

                    <div  class="row card-footer" style="border-top: none">
                        <table>
                        
                            <tr>
                                <th>Hình</th>
                                <th>Sản Phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số Lượng</th>
                                <th>Thành Tiền</th>
                                <th>Thao tác</th>
                            </tr>
                            

                            <?php
                            viewcart();
                            ?>

                        </table>
                    </div>
                </div>
            </div>

            <div class="row mb">
                <a ><input type="submit" class="btn btn-success mt-5" value="Đồng ý đặt hàng" name="dongydathang"></a>
                
            </div>
        </form>
    </div>
    <div class="col-sm-3 mt-3">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>