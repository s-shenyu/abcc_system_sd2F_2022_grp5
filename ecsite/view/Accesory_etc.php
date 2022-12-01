<?php
session_start();
require '../model/DBManagermst.php';
$dbmng = new DBManagermst();
?>
<!DOCTYPE html>
<html>

<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <title>OnLineShop</title>
    <style>
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body background="../public/img_site/topimage.jpg">

<?php if (isset($_SESSION['userido'])) : ?>
    <?php include_once '../controller/NavbarLogin.php' ?>
  <?php else : ?>
    <?php include_once '../controller/Navbar.php' ?>
  <?php endif; ?>

<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div>

          <div name="maindiv" class="container">
            <div class="row  gy-5 gx-3 mt-1 mb-5">

            <?php
              try {
                $result = $dbmng->showGoodsByTag('Acce');
                foreach ($result as $row) {
                  echo '<div class="col-6 col-md-3">';
                  echo '<div style="width:100%; border-style:none;">';
                  if ($row['goods_flg'] == 1) {
                    echo '<a href="Detail.php?idgoods=' . base64_encode($row['goods_id']) . '" class="img">';
                  } else {
                    echo '<a class="img">';
                  }
                  echo '<button type="button" class="btn btn-light">';
                  echo '<img src="' . $row['goods_imgurl1'] . '" class="card-img-top"  style="border:none"><br>';
                  echo '<div>';
                  echo '<div class="goodsNa" style="margin:auto;"><b>' . $row['goods_name'] . '</b></div>';
                  if ($row['goods_flg'] == 1) {
                    echo '<p style="color:#4e454a; padding-top:5%;">￥' . $row['goods_price'] . '</p>';
                  } else {
                    echo '<p style="color:red; padding-top:5%;">SOLD OUT</p>';
                  }
                  echo '</div>';
                  echo '</button>';
                  echo '</a>';
                  echo '</div>';
                  echo '</div>';
                }
              } catch (error $err) {
                echo '<font color="white"><h4 style="position:relative;left:2%;padding-top: 1%;">エラーです</h4></font>';
              }
              ?>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>

</html>
