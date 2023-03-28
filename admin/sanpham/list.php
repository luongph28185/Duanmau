<article ><br>
      <form action="index.php?act=listsp" method="POST">
          <input type="text" name="kyw">
          <select name="ma_loai" id="ma_loai">
          <option value="0" selected>all</option>
            <?php
              foreach ($listdanhmuc as $danhmuc) {
            
                extract($danhmuc);
                echo'<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
              }
             
              ?>
              
            </select>
            <input type="submit" name="listok" value="go">
        </form>
        <table class="table mt-4 mb-4">
            <thead class="table-success">
              <tr>
                <th></th>

                <th>Tên hàng hóa</th>
                <th>đơn giá</th>
                <th>Hình</th>
          
                <th>Mô tả</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
         <?php
         foreach ($listsanpham as $sp) {
            extract($sp);
            $suahh="./index.php?act=suasp&ma_hh=".$ma_hh;
            $xoahh="./index.php?act=xoasp&ma_hh=".$ma_hh;
            $hinhpart="../upload/".$hinh;
            if(is_file($hinhpart)){
              $hinh="<img src='".$hinhpart."'height='100'>";
            } else {
              $hinh="no photo";
            }
            echo '<tr>
            <td class="pb-3 pt-3"><input type="checkbox" name="" id=""></td>
            <td class="pb-3 pt-3">'.$ten_hh.'</td>
            <td class="pb-3 pt-3">'.$don_gia.'</td>
            <td class="pb-3 pt-3">'.$hinh.'</td>
            <td class="pb-3 pt-3">'.$mo_ta.'</td>
            <td class="td-opt pb-3 pt-3">
                 <a href="'.$suahh.'" class="btn-edit">Sửa</a>
                <a href="'.$xoahh.'" class="btn-delete">Xóa</a>
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
            <a href="./index.php?act=addsp" class="btn btn-primary">Nhập thêm</a>
          </div>
      </article>