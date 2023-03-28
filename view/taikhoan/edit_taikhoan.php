<!-- container-row -->
<div class="row">
    <!-- ARTICLE -->
    <article class="col-sm-9">
        <div class="top10 mt-4">
            <div class="card">
                
                <div class="card-header" style="font-weight: 500">
                    Cập Nhật Tài Khoản
                </div>
                <?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
                ?>
                <div class="card-body">
                   <form action="index.php?act=edit_taikhoan" method="POST">
                <div class="mb-3 mt-3 px-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?=$email?>"/>
                </div>
                <div class="mb-3 mt-3 px-3">
                  <label for="user" class="form-label">Tên đăng nhập:</label>
                  <input type="text" class="form-control" id="user" name="user" value="<?=$user?>"/>
                </div>
                <div class="mb-3 mt-3 px-3">
                  <label for="pass" class="form-label">password:</label>
                  <input type="password" class="form-control" id="pass" name="pass" value="<?=$pass?>"/>
                </div>
                <div class="mb-3 mt-3 px-3">
                  <label for="adress" class="form-label">Địa chỉ:</label>
                  <input type="text" class="form-control" id="adress" name="adress" value="<?=$adress?>"/>
                </div>
                <div class="mb-3 mt-3 px-3">
                  <label for="tel" class="form-label">Điện Thoại:</label>
                  <input type="text" class="form-control" id="tel" name="tel" value="<?=$tel?>"/>
                </div>
                <div>
                <input type="hidden" name="id" value="<?=$id?>">
                <button type="submit" value="capnhat" class="btn btn-primary mx-3 pb-2 mb-3 trans-04" name="capnhat">
                  cap nhat
                </button>
                <button type="reset" class="btn btn-primary mx-3 pb-2 mb-3 trans-04">
                  nhập lại
                </button>
                </div>
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