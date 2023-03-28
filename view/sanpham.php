<!-- container-row -->
<div class="row">
    <!-- ARTICLE -->
    <article class="col-sm-9">
        <div class="top10 mt-4">
            <div class="card">

                <div class="card-header" style="font-weight: 500">
                    Sản Phẩm <strong><?=$ten_loai?></strong>
                </div>
                <div class="card-body">
                    <?php foreach ($dssp as $sp) {
                        extract($sp);
                        $linkspct = "index.php?act=sanphamct&ma_hh=" . $ma_hh;
                        $imgnew = $img_path . $hinh;
                        echo '<div class="col border mr-4 mt-3">
                <div class="block-img text-center ">
                <a href="' . $linkspct . '"> <img src=' . $imgnew . ' alt="" width="220px" height="230px" style="margin-bottom: 20px" /></a>
               
                </div>
                <span>$' . $don_gia . '</span>
                <h4><a href="' . $linkspct . '">' . $ten_hh . '</a></h4>
              </div>';
                    } ?>
                </div>
            </div>
        </div>

    </article>

    <!-- ASIDE -->
    <aside class="col-sm-3 mt-3">
        <!-- form login -->
        <?php include "boxright.php"; ?>
    </aside>
</div>