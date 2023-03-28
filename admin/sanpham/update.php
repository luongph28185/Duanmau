<?php
if (is_array($arrsp)) {
  extract($arrsp);
}
$hinhpart = "../upload/" . $hinh;
if (is_file($hinhpart)) {
  $hinh = "<img src='" . $hinhpart . "'height='100'>";
} else {
  $hinh = "no photo";
}
?>
<article class="mt-4 mb-5" style="padding-bottom: 200px;">
  <h2>Cập nhật Sản Phẩm</h2>
  <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Tên hàng hóa</label>
      <input type="text" value="<?= $ten_hh  ?>" name="ten_hh" class="form-control w-50" id="formGroupExampleInput2">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Đơn Giá</label>
      <input type="text" value="<?= $don_gia  ?>" name="don_gia" class="form-control w-50" id="formGroupExampleInput2">
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Hình</label>
      <input type="file"  name="hinh" class="form-control w-50" id="formGroupExampleInput2">
      <?= $hinh  ?>
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">mô tả</label>
      <input type="text" value="<?= $mo_ta  ?>" name="mo_ta" class="form-control w-50" id="formGroupExampleInput2">
    </div>


    <div class="form-group mb-3">
      <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">
      <input type="hidden" name="ma_loai" value="<?= $ma_loai ?>">
      <input type="submit" name="capnhat" class="btn btn-success" value="cập nhật">
      <input type="submit" class="btn btn-danger" value="Nhập lại">
      <a href="index.php?act=listsp" class="btn btn-primary">Danh sách</a>
    </div>
    <?php
    if (isset($notice) && ($notice > 0)) {
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
    <a class="trans-04 text-none txt-f hov-red" href="../index.html">X-Shop.com</a>
  </div>
  <!-- Copyright -->
</footer>
</div>