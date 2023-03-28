<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro= $_REQUEST['idpro'];
$dsbl=loadall_binhluan($idpro);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="list-opt mt-4">
  <div class="card">
    <div class="card-header" style="border-bottom: none; font-weight: 500">
      Bình Luận
    </div>
    <div class="card-text">
      <ul class="list-group" style="border-radius: inherit; border-right: none">
       <table>
       <?php
        
        foreach ($dsbl as $bl) {
                  extract($bl);
                  echo '<tr><td>'.$noidung.'</td>';
                  echo '<td>'.$iduser.'</td>';
                  echo '<td>'.$ngaybl.'</td></tr>';
                }
        ?>
       </table>

      </ul>
    </div>
    <div class="card-footer" style="border-top: none">
      <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" style="display:flex;">
        <input type="hidden" name="idpro" value="<?=$idpro?>">
        <input name="noidung" type="text" class="form-control" />
        <input type="submit" name="guibinhluan" value="gửi bình luận">
      </form>

    </div>
      <?php
      if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
        $noidung=$_POST['noidung'];
        $idpro=$_POST['idpro'];
        $iduser=$_SESSION['user']['id'];
        $ngaybl= date('h:i:sa d/m/Y');
        $dsbl = insert_binhluan($noidung,$iduser,$idpro,$ngaybl);
        header("location: ".$_SERVER['HTTP_REFERER']);
      }
      
      ?>

  </div>
</div>
</body>
</html>