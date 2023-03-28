<article >
        <table class="table mt-4 mb-4">
            <thead class="table-success">
              <tr>
                <th>Mã Danh Mục</th>
                <th>Tên Danh Mục</th>
                <th>Số Lượng </th>
                <th>Giá Thấp Nhất</th>
                <th>Giá cao Nhất</th>
                <th>Giá Trung Bình</th>
              </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listtk as $tk) {
                    extract($tk);
                    echo '<tr>
                    <td>'.$madm.'</td>
                    <td>'.$tendm.'</td>
                    <td>'.$countsp.'</td>
                    <td>'.$minprice.'</td>
                    <td>'.$maxprice.'</td>
                    <td>'.$avgprice.'</td>
                        </tr>';
                }
                ?>
               
            
              
            </tbody>
          </table>
          <div class="form-group pb-4">
            <a href="index.php?act=bieudo" ><input type="button" class="btn btn-success" value="xem bieu do"></a>
          </div>
      </article>