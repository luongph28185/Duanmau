<article >
        <table class="table mt-4 mb-4">
            <thead class="table-success">
              <tr>
                <th></th>
                <th>Mã TK</th>
                <th>USER</th>
                <th>PASS</th>
                <th>EMAIL</th>
                <th>ADRESS</th>
                <th>TEL</th>
                <th>ROLE</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
         <?php
         foreach ($listtaikhoan as $taikhoan) {
            extract($taikhoan);
            $suatk="./index.php?act=suatk&id=".$id;
            $xoatk="./index.php?act=xoatk&id=".$id;
            echo '<tr>
            <td class="pb-3 pt-3"><input type="checkbox" name="" id=""></td>
            <td class="pb-3 pt-3">'.$id.'</td>
            <td class="pb-3 pt-3">'.$user.'</td>
            <td class="pb-3 pt-3">'.$pass.'</td>
            <td class="pb-3 pt-3">'.$email.'</td>
            <td class="pb-3 pt-3">'.$adress.'</td>
            <td class="pb-3 pt-3">'.$tel.'</td>
            <td class="pb-3 pt-3">'.$role.'</td>
            <td class="td-opt pb-3 pt-3">
                 <a href="'.$suatk.'" class="btn-edit">Sửa</a>
                <a href="'.$xoatk.'" class="btn-delete">Xóa</a>
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
            <a href="./index.php?act=adddm" class="btn btn-primary">Nhập thêm</a>
          </div>
      </article>