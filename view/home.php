<!-- container-row -->
<div class="row">
  <!-- ARTICLE -->
  <article class="col-sm-9">
    <!-- slideshow -->
    <div class="slide-show mt-3">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./view/images/slide1.jpg" class="d-block w-100" alt="img layout" style="height: 500px" />
          </div>
          <div class="carousel-item">
            <img src="./view/images/slide2.jpg" class="d-block w-100" alt="img layout" style="height: 500px" />
          </div>
          <div class="carousel-item">
            <img src="./view/images/slide3.jpg" class="d-block w-100" alt="img layout" style="height: 500px" />
          </div>
          <div class="carousel-item">
            <img src="./view/images/slide4.jpg" class="d-block w-100" alt="img layout" style="height: 500px" />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- product -->
    <div class="container text-center">
      <!-- row 1 -->
      <div class="row">
        <?php foreach ($spnew as $sp) {
          extract($sp);
          $linkspct = "index.php?act=sanphamct&idsp=" . $ma_hh;
          $imgnew = $img_path . $hinh;
          echo '<div class="col border mr-4 mt-3">
                <div class="block-img text-center ">
                <a href="' . $linkspct . '"> <img src=' . $imgnew . ' alt="" width="220px" height="230px" style="margin-bottom: 20px" /></a>
               
                </div>
                <span>$' . $don_gia . '</span>
                <h4><a href="' . $linkspct . '">' . $ten_hh . '</a></h4>
                <form action="index.php?act=addtocart" method="POST">
                <input type="hidden" name="ma_hh" value="' . $ma_hh . '">
                <input type="hidden" name="ten_hh" value="' . $ten_hh . '">
                <input type="hidden" name="hinh" value="' . $hinh . '">
                <input type="hidden" name="don_gia" value="' . $don_gia . '">
                <input type="submit" name="addtocart" value="them gio hang">
                </form>
              </div>';
        } ?>

      </div>

    </div>
  </article>

  <!-- ASIDE -->
  <aside class="col-sm-3 mt-3">
    <!-- form login -->
    <?php
    include "boxright.php";
    ?>
  </aside>
</div>