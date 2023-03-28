<article class="mt-4 mb-5" style="padding-bottom: 200px;">
      <h2>Thêm Sản Phẩm</h2>
       <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label"  style="font-weight: bold;">Danh mục</label>
            <select name="ma_loai" id="ma_loai">
            <?php
              foreach ($listdanhmuc as $danhmuc) {
            
                extract($danhmuc);
                echo'<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
              }
             
              ?>
              
            </select>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label"  style="font-weight: bold;">Tên hàng hóa</label>
            <input type="text" name="ten_hh" class="form-control w-50" id="formGroupExampleInput2">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label"  style="font-weight: bold;">Đơn Giá</label>
            <input type="text" name="don_gia" class="form-control w-50" id="formGroupExampleInput2">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label"  style="font-weight: bold;">Hình</label>
            <input type="file" name="hinh" class="form-control w-50" id="formGroupExampleInput2">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label"  style="font-weight: bold;">mô tả</label>
            <input type="text" name="mo_ta" class="form-control w-50" id="formGroupExampleInput2">
          </div>
          <div class="form-group mb-3">
            <input type="submit" name="themmoi" class="btn btn-success" value="Thêm mới">
            <input type="submit"  class="btn btn-danger" value="Nhập lại">
            <a href="index.php?act=listsp" class="btn btn-primary">Danh sách</a>
          </div>
          <?php
          if(isset($notice)&&($notice > 0)){
            echo $notice;
          }
          
          ?>
       </form>
      </article>
         <!-- FOOTER -->
         <footer class="container bg-dark text-center text-white">
          <!-- Copyright -->
          <div class="text-center p-3">
            © 2020 Copyright:
            <a class="trans-04 text-none txt-f hov-red"   href="../index.html">X-Shop.com</a>
          </div>
          <!-- Copyright -->
        </footer>
    </div>