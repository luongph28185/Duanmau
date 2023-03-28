<div class="row">
    <div class="col-sm-9">
        
        <form action="index.php?act=billcomfirm" method="POST">
            <div class="list-opt mt-4">
                <div class="card">
                    <div class="card-header"  style="border-bottom: none; font-weight: 500; background: greenyellow;">
                        Đơn Hàng Của Tôi
                    </div>

                    <div  class="row card-footer" style="border-top: none">
                        <table>
                        
                            <tr>
                                <th>Mã Đơn Hàng</th>
                                <th>khách hàng</th>
                                <th>Ngày Đặt</th>
                                <th>Số Lượng</th>
                                <th>Tổng Giá Trị Đơn Hàng</th>
                                <th>Trạng thái</th>
                            </tr>
                            <?php
                            if(is_array($listbill)){
                                foreach ($listbill as $bill){
                                    extract($bill);
                                    $ttdh=get_ttdh($bill['bill_status']);
                                    $countsp=loadall_cart_count($bill['id']);
                                    echo '<tr>
                                    <td>'.$bill['id'].'</td>
                                    <td>'.$bill['bill_name'].'</td>
                                    <td>'.$bill['ngaydathang'].'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$bill['total'].'</td>
                                    <td>'.$bill['bill_status'].'</td>
                                          </tr>';
                                }
                            }
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