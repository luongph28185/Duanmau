<div class="login-form">
            <div class="card">
              <div class="card-header" style="font-weight: 500">TÀI KHOẢN</div>
              <?php 
              if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
              ?>
                <div class="mb-3 mt-3 px-3">
                  <label for="user" class="form-label">Chào bạn, </label>
                 <strong><?=$user?></strong>
                </div>
                <div class="opt-acc">
                  <ul>
                    <li><a href="index.php?act=mybill">đơn hàng của tôi</a></li>
                    <li><a href="index.php?act=quenmk">quên mật khẩu</a></li>
                    <li><a href="index.php?act=edit_taikhoan">cập nhật tài khoản</a></li>
                    <?php
                      if($role==1){
                    ?>
                    <li><a href="admin/index.php">đăng nhập admin</a></li>
                    <?php }?>
                    <li><a href="index.php?act=thoat">thoát</a></li>
                  </ul>
                </div>

              <?php
              } else {
              ?>
              <form action="index.php?act=dangnhap" method="post">
                <div class="mb-3 mt-3 px-3">
                  <label for="user" class="form-label"
                    >Tên đăng nhập:</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="user"
                    placeholder="Nhập username"
                    name="user"
                  />
                </div>
                <div class="mb-3 px-3">
                  <label for="pass" class="form-label">Mật khẩu:</label>
                  <input
                    type="password"
                    class="form-control"
                    id="pass"
                    placeholder="Nhập mật khẩu"
                    name="pass"
                  />
                </div>
                <div class="form-check mb-3 mx-3">
                  <label class="form-check-label" style="font-size: 14px">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      name="remember"
                    />
                    Ghi nhớ tài khoản
                  </label>
                </div>
                <input
                  name="dangnhap"
                  type="submit"
                  class="btn btn-primary mx-3 pb-2 mb-3 trans-04"
                  value="Đăng nhập"
                >
                <div class="opt-acc">
                  <ul>
                    <li><a href="">Quên mật khẩu ?</a></li>
                    <li><a href="index.php?act=dangky">Đăng ký tài khoản mới</a></li>
                  </ul>
                </div>
              
              </form>
              <?php } ?>
            </div>
          </div>

          <!-- list opt -->
          <div class="list-opt mt-4">
            <div class="card">
              <div
                class="card-header"
                style="border-bottom: none; font-weight: 500"
              >
                DANH MỤC
              </div>
              <div class="card-text">
                <ul
                  class="list-group"
                  style="border-radius: inherit; border-right: none"
                >
                <?php
                foreach ($dsdm as $dm) {
                  extract($dm);
                 
                  $linkdm="index.php?act=sanpham&ma_loai=".$ma_loai;
                  echo '<li
                  class="list-group-item list-group-item-action"
                  style="border-left: none; border-right: none"
                >
                  <a href="'.$linkdm.'" class="cate">'.$ten_loai.'</a>
                </li>';
                }
                ?>
                <!--
                                
                  
                  <li
                    class="list-group-item list-group-item-action"
                    style="border-left: none; border-right: none"
                  >
                    <a href="#" class="cate">Điện thoại</a>
                  </li>
                  <li
                    class="list-group-item list-group-item-action"
                    style="border-left: none; border-right: none"
                  >
                    <a href="#" class="cate">Laptop</a>
                  </li>
                  <li
                    class="list-group-item list-group-item-action"
                    style="border-left: none; border-right: none"
                  >
                    <a href="#" class="cate">Tay cầm chơi game</a>
                  </li>
                  <li
                    class="list-group-item list-group-item-action"
                    style="border-left: none; border-right: none"
                  >
                    <a href="#" class="cate">Sạc dự phòng</a>
                  </li>
                  <li
                    class="list-group-item list-group-item-action"
                    style="border-left: none; border-right: none"
                  >
                    <a href="#" class="cate">Kính thực tế ảo</a>
                  </li>
                  <li
                    class="list-group-item list-group-item-action"
                    style="border-left: none; border-right: none"
                  >
                    <a href="#" class="cate">Chuột máy tính</a>
                  </li>
                  <li
                    class="list-group-item list-group-item-action"
                    style="border-left: none; border-right: none"
                  >
                    <a href="#" class="cate">Bàn chải điện</a>
                  </li>
                  <li
                    class="list-group-item list-group-item-action"
                    style="border-left: none; border-right: none"
                  >
                    <a href="#" class="cate">Máy hút bụi</a>
                  </li>
                  <li
                    class="list-group-item list-group-item-action"
                    style="border-left: none; border-right: none"
                  >
                    <a href="#" class="cate">Tai nghe</a>
                  </li>
                 -->
                </ul>
              </div>
              <div class="card-footer" style="border-top: none">
              <form action="index.php?act=sanpham" method="POST">
              <input
                  name="kyw"
                  type="text"
                  class="form-control"
                  placeholder="Nhập từ khóa tìm kiếm"
                  width="50px"
                />
                <input type="submit" name="timkiem" value="tim kiem">
              </form>
               
              </div>
            </div>
          </div>

          <!-- list top 10 -->
          <div class="top10 mt-4">
            <div class="card">
              <div class="card-header" style="font-weight: 500">
                TOP 10 YÊU THÍCH
              </div>
              <div class="card-body">
                <ul class="ultop10">
                  <?php
                  foreach ($dstop10 as $sp) {
                    extract($sp);
                    $linkspct="index.php?act=sanphamct&idsp=".$ma_hh;
                    $img = $img_path.$hinh;
                    echo '<li>
                    <img
                      src="'.$img.'"
                      alt=""
                      style="
                        border: 1px solid #dee3e0;
                        width: 30px;
                        border-radius: 5px;
                        margin-right: 10px;
                      "
                    />
                    <a href="'.$linkspct.'">'.$ten_hh.'</a>
                  </li>';
                  }
                  ?>
                  <!--
                    
                  <li class="mt-2">
                    <img
                      src="view/images/brush.png"
                      alt=""
                      style="
                        border: 1px solid #dee3e0;
                        width: 30px;
                        border-radius: 5px;
                        margin-right: 10px;
                      "
                    />
                    <a href="">Bàn chải điện Seago SG 507</a>
                  </li>
                  <li class="mt-2">
                    <img
                      src="view/images/charging.png"
                      alt=""
                      style="
                        border: 1px solid #dee3e0;
                        width: 30px;
                        border-radius: 5px;
                        margin-right: 10px;
                      "
                    />
                    <a href="">Sạc không dây Anker</a>
                  </li>
                  <li class="mt-2">
                    <img
                      src="view/images/cleaner.png"
                      alt=""
                      style="
                        border: 1px solid #dee3e0;
                        width: 30px;
                        border-radius: 5px;
                        margin-right: 10px;
                      "
                    />
                    <a href="">Máy hút bụi Dyson</a>
                  </li>
                  <li class="mt-2">
                    <img
                      src="view/images/gamepad.png"
                      alt=""
                      style="
                        border: 1px solid #dee3e0;
                        width: 30px;
                        border-radius: 5px;
                        margin-right: 10px;
                      "
                    />
                    <a href="">Tay cầm chơi game Terios</a>
                  </li>
                  <li class="mt-2">
                    <img
                      src="../image/glasses.png"
                      alt=""
                      style="
                        border: 1px solid #dee3e0;
                        width: 30px;
                        border-radius: 5px;
                        margin-right: 10px;
                      "
                    />
                    <a href="">Kính thực tế ảo Oculus</a>
                  </li>
                  <li class="mt-2">
                    <img
                      src="view/images/headphones.png"
                      alt=""
                      style="
                        border: 1px solid #dee3e0;
                        width: 30px;
                        border-radius: 5px;
                        margin-right: 10px;
                      "
                    />
                    <a href="">Tai nghe Sony WH-1000xm4</a>
                  </li>
                  <li class="mt-2">
                    <img
                      src="view/images/laptop.png"
                      alt=""
                      style="
                        border: 1px solid #dee3e0;
                        width: 30px;
                        border-radius: 5px;
                        margin-right: 10px;
                      "
                    />
                    <a href="">Laptop Dell Inspiron 5515</a>
                  </li>
                  <li class="mt-2">
                    <img
                      src="view/images/mouse.png"
                      alt=""
                      style="
                        border: 1px solid #dee3e0;
                        width: 30px;
                        border-radius: 5px;
                        margin-right: 10px;
                      "
                    />
                    <a href="">Chuột máy tính Logitech</a>
                  </li>
                  <li class="mt-2">
                    <img
                      src="view/images/smartwacth.png"
                      alt=""
                      style="
                        border: 1px solid #dee3e0;
                        width: 30px;
                        border-radius: 5px;
                        margin-right: 10px;
                      "
                    />
                    <a href="">Đồng hồ thông minh Xiaomi</a>
                  </li>
                   -->
                </ul>
              </div>
            </div>
          </div>