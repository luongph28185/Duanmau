<article >
        <table class="table mt-4 mb-4">
            <thead class="table-success">
              <tr>
                <th></th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
         <?php
         foreach ($listdanhmuc as $dm) {
            extract($dm);
            $suadm="./index.php?act=suadm&ma_loai=".$ma_loai;
            $xoadm="./index.php?act=xoadm&ma_loai=".$ma_loai;
            echo '<tr>
            <td class="pb-3 pt-3"><input type="checkbox" name="" id=""></td>
            <td class="pb-3 pt-3">'.$ma_loai.'</td>
            <td class="pb-3 pt-3">'.$ten_loai.'</td>
            <td class="td-opt pb-3 pt-3">
                 <a href="'.$suadm.'" class="btn-edit">Sửa</a>
                <a href="'.$xoadm.'" class="btn-delete">Xóa</a>
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