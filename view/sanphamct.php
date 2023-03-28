<!-- container-row -->
<div class="row">
    <!-- ARTICLE -->
    <article class="col-sm-9">
        <div class="top10 mt-4">
            <div class="card">
                <?php
                extract($one_sp);
                ?>
                <div class="card-header" style="font-weight: 500">
                    <?= $ten_hh ?>
                </div>
                <div class="card-body">
                    <?php
                    $img = $img_path . $hinh;
                    echo '<div class="spct" ><img src="' . $img . '"></div>';
                    echo $mo_ta;
                    echo $don_gia;
                    ?>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                    $("#binhluan").load("view/binhluan/binhluanform.php",{idpro: <?=$ma_hh?>});
            });
        </script>

        <div class="top10 mt-4">
            <div class="card">
                <div class="card-header" style="font-weight: 500" id="binhluan">
                    
                </div>
                <div class="card-body" id="binhluan">

                </div>
            </div>
        </div>
        <div class="top10 mt-4">
            <div class="card">
                <div class="card-header" style="font-weight: 500">
                    Hàng cùng loại
                </div>
                <div class="card-body">
                    <?php
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $linksp = "index.php?act=sanphamct&idsp=" . $ma_hh;
                        echo '<li><a href="' . $linksp . '">' . $ten_hh . '</a></li>';
                    }
                    ?>
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