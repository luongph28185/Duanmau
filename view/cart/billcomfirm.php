<div class="row">
    <div class="col-sm-9">
        <div class="top10 mt-4 alert alert-success mt-3" >Đặt Hàng Thành Công</div>
        <form action="index.php?act=billcomfirm" method="POST">
        <div class="list-opt mt-4">
                <div class="card">
                    <div class="card-header" style="border-bottom: none; font-weight: 500; background: gray;">
                        Cảm ơn!
                    </div>

                    <div class="card-footer" style="border-top: none; text-align:center; color: greenyellow; font-weight: bold;">
                       cảm ơn quý khách đã mua hàng!
                    </div>
                </div>
            </div>
            <?php
            if(isset($bill)&&(is_array($bill))){
                extract($bill);
            }
            ?>
            <div class="list-opt mt-4">
                <div class="card">
                    <div class="card-header" style="border-bottom: none; font-weight: 500; background: gray;">
                        Thông Tin Đơn Hàng
                    </div>

                    <div class="card-footer" style="border-top: none;  color: greenyellow; font-weight: bold;">
                      <li>-Mã đơn hàng TTL-<?=$bill['id'];?></li> 
                      <li>-ngày đặt hàng: <?=$bill['ngaydathang'];?></li> 
                      <li>-Tổng đơn hàng: <?=$bill['total'];?></li>
                      <li>-phương thức thanh toán: <?=$bill['bill_pttt'];?></li> 
                    </div>
                </div>
            </div>
            <div class="card list-opt mt-4">
                <table>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><?=$bill['bill_name'];?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><?=$bill['bill_adress'];?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?=$bill['bill_email'];?></td>
                    </tr>
                    <tr>
                        <td>Điện thoai</td>
                        <td><?=$bill['bill_tel'];?></td>
                    </tr>
                </table>
            </div>

            <div class="list-opt mt-4">
                <div class="card">
                    <div class="card-header" style="border-bottom: none; font-weight: 500">
                        Chi tiết giỏ hàng 
                    </div>

                    <div  class="row card-footer" style="border-top: none">
                        <table >
                        
                            
                            
                            <?php
                            bill_chi_tiet($billct);
                            ?>
                            

                        </table>
                    </div>
                </div>
            </div>

            
        </form>
    </div>
    <div class="col-sm-3 mt-3">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>