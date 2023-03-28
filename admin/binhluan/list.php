<article >
        <table class="table mt-4 mb-4">
            <thead class="table-success">
              <tr>
                <th></th>
                <th>ID</th>
                <th>Nội Dung</th>
                <th>User</th>
                <th>Idpro</th>
                <th>Ngày Bình Luận</th>
                
                <th></th>
              </tr>
            </thead>
            <tbody>
         <?php
         foreach ($listbl as $bl) {
            extract($bl);
            $suabl="./index.php?act=suabl&id=".$id;
            $xoabl="./index.php?act=xoabl&id=".$id;
            echo '<tr>
            <td class="pb-3 pt-3"><input type="checkbox" name="" id=""></td>
            <td class="pb-3 pt-3">'.$id.'</td>
            <td class="pb-3 pt-3">'.$noidung.'</td>
            <td class="pb-3 pt-3">'.$iduser.'</td>
            <td class="pb-3 pt-3">'.$idpro.'</td>
            <td class="pb-3 pt-3">'.$ngaybl.'</td>
            
            <td class="td-opt pb-3 pt-3">
                 <a href="'.$suabl.'" class="btn-edit">Sửa</a>
                <a href="'.$xoabl.'" class="btn-delete">Xóa</a>
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