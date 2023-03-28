<div class="row">
    <article class="col-sm-9">
    <div >
        <div class="alert alert-success mt-3">Giỏ hàng</div>
        <div class="row">
            <table class="me-3">
                <tr>
                    <th>Hình</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                    <?php
                    viewcart();
                    ?>
                </tr>
            </table>
        </div>
        <div class=" mb">
            <a href="index.php?act=bill"><input type="button" class="btn btn-success" value="Đồng ý đặt hàng"></a>
            <a href="index.php?act=deletecart"><input type="button" class="btn btn-danger" value="Xóa giỏ hàng"></a>
        </div>
    </div>
    </article>
    <div class="col-sm-3 mt-3">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>