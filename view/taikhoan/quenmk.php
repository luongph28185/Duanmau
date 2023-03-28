<!-- container-row -->
<div class="row">
    <!-- ARTICLE -->
    <article class="col-sm-9">
        <div class="top10 mt-4">
            <div class="card">
                
                <div class="card-header" style="font-weight: 500">
                    Quên Mật Khẩu
                </div>
                <div class="card-body">
                   <form action="index.php?act=quenmk" method="POST">
                <div class="mb-3 mt-3 px-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email"/>
                </div>
                
                <button type="submit" value="gui" class="btn btn-primary mx-3 pb-2 mb-3 trans-04" name="guiemail">
                  gửi
                </button>
                <button type="reset" class="btn btn-primary mx-3 pb-2 mb-3 trans-04">
                  nhập lại
                </button>
                   </form>
                   <?php
                   if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                   }
                   ?>
                </div>
            </div>
        </div>
        
        
    </article>

    <!-- ASIDE -->
    <aside class="col-sm-3 mt-3">
        <!-- form login -->
        <?php include "view/boxright.php";?>
    </aside>
</div>