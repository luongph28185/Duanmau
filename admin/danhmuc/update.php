<?php
 if(is_array($arrdm)){
    extract($arrdm);
     
 }
?>
<article class="mt-4 mb-5" style="padding-bottom: 200px;">
    <h2>Cập Nhật Hàng Hóa</h2> <br>
       <form action="./index.php?act=updatedm" method="post">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label " style="font-weight: bold;">Mã loại</label>
            <input type="text" name="ma_loai" class="form-control w-50 bg-light" id="formGroupExampleInput" placeholder="auto number" readonly>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label"  style="font-weight: bold;">Tên loại</label>
            <input type="text" name="ten_loai" value="<?= $ten_loai  ?>"  class="form-control w-50" id="formGroupExampleInput2">
          </div>
          <div class="form-group mb-3">
            <input type="hidden" name="ma_loai" value="<?= $ma_loai ?>">
            <input type="submit" name="capnhat" class="btn btn-success" value="cap nhat">
            <input type="submit"  class="btn btn-danger" value="Nhập lại">
            <a href="./index.php?act=listdm" class="btn btn-primary">Danh sách</a>
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