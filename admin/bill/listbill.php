<article >
        <table class="table mt-4 mb-4">
            <thead class="table-success">
              <tr>
                <th></th>
                <th>Mã Đơn Hàng</th>
                <th>Khách Hàng</th>
                <th>Số Lượng Hàng</th>
                <th>Giá Trị Đơn Hàng</th>
                <th>Ngày Đặt Hàng</th>
                <th>Tình Trạng Đơn Hàng</th>
                <th>Thao tác</th>
                
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php
            foreach ($listbill as $bill) {
              extract($bill);
              $suabill="./index.php?act=suabill&id=".$id;
              $xoabill="./index.php?act=xoabill&id=".$id;
              $kh=$bill["bill_name"].'
              <br>'.$bill["bill_email"].'
              <br>'.$bill["bill_adress"].'
              <br>'.$bill["bill_tel"];
              $ttdh=get_ttdh($bill["bill_status"]);
              $count=loadall_cart_count($bill["id"]);
              echo '<tr>
              <td class="pb-3 pt-3"><input type="checkbox" name="" id=""></td>
              <td class="pb-3 pt-3">'.$bill['id'].'</td>
              <td class="pb-3 pt-3">'.$kh.'</td>
              <td class="pb-3 pt-3">'.$count.'</td>
              <td class="pb-3 pt-3">'.$bill['total'].'</td>
              <td class="pb-3 pt-3">'.$bill['ngaydathang'].'</td>
              <td class="pb-3 pt-3">'.$ttdh.'</td>
              
              <td class="td-opt pb-3 pt-3">
                   <a class="btn btn-success" href="'.$suabill.'" class="btn-edit">Sửa</a>
                  <a class="btn btn-danger" href="'.$xoabill.'" class="btn-delete">Xóa</a>
              </td>
            </tr>  ';
            }
            ?>
            
              
            </tbody>
          </table>
          <div class="form-group pb-4">
            <button class="btn btn-success">Chọn tất cả</button>
            <button class="btn btn-warning">Bỏ chọn tất cả</button>
            <button class="btn btn-danger">Xóa các mục đã chọn</button>
          </div>
      </article>