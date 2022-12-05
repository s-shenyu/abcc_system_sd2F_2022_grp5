<?php
session_start();
require '../model/DBManagermst.php';
$dbmng = new DBManagermst();
if (isset($_SESSION['userido'])==false) {
  header('Location: ../view/Login.php');
}
?>

<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>古着EC｜注文確認</title>
  <style>
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../public/css/style.css">
</head>

<body background="../public/img_site/topimage.jpg">
  <?php include_once '../controller/NavbarLogin.php' ?>

  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 mt-5 mb-3">
        <nobr class="">
          <font color="silver">
            ご注文方法の指定
          </font>
          <font color="white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
              <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" />
            </svg></font>
          <font color="white">
            ご注文内容の確認
          </font>
          <font color="white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
              <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" />
            </svg></font>
          <font color="silver">
            ご注文完了
          </font>
        </nobr>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 mt-5 mb-5 pb-3" style="background-color:#FFFF;">
        <form class="row mb-1" action="../controller/cBuy.php" method="post">
          <h3 style="padding-top: 2%; padding-bottom:4%; padding-left:2%; text-align:left">購入アイテム</h3>
          <hr>
          <div class="row">
            <div class="col-7 text-dark ">
              <p style="position:relative;left:65%;">アイテム名</p>
            </div>
            <div class="col-5 text-dark">
              <p style="position:relative;left:63%;">小計(税込)</p>
            </div>
          </div>

          <hr width="100%">
          <div class="row mt-3">
            <?php
            $sumprice = 0;
            try {
              $results = $dbmng->showCart($_SESSION['userido']);
              foreach ($results as $result) {
                $rows = $dbmng->goodsDetail($result['goods_id']);
                foreach ($rows as $row) {
                  echo '<input type="hidden" name="id[]" value="' . $row['goods_id'] . '">';
                  echo '<div class="col-7 mb-3 text-dark">';
                  echo '<img src="' . $row['goods_imgurl1'] . '" width="80" height="120" align="left" hspace="10px">';
                  echo $row['goods_name'];
                  echo '</div>';
                  echo '<div class="col-5 text-dark">';
                  echo '<p class="text-center">' . $row['goods_price'] . '</p>';
                  $sumprice += $row['goods_price'];
                  echo '</div>';
                }
              }
            } catch (BadMethodCallException $ex) {
              echo '<font color="black"><h4 style="position:relative;left:2%;padding-top: 1%;">' . $ex->getMessage() . '</h4></font>';
            }
            ?>
          </div>
          <hr>
          <h4 class="gokei">合計(税込) :￥<?php echo $sumprice ?></h4>

          <hr>
          <hr>

          <h3 style="padding-top: 2%; padding-bottom:1%; padding-left:2%; text-align:left">購入者情報</h3>
          <?php
          $address = $_POST['ken'] . $_POST['shi'] . $_POST['ban'] . $_POST['dtl'];
          echo '<hr>';
          echo '<input type="hidden" name="name" value="' . $_POST['name'] . '">';
          echo '<h5>お名前 : ' . $_POST['name'] . '</h5>';
          echo '<hr>';
          echo '<input type="hidden" name="post" value="' . $_POST['post'] . '">';
          echo '<h5>お届け先 : 〒' . $_POST['post'] . '</h5>';
          echo '<input type="hidden" name="address" value="' . $address . '">';
          echo '<h6>' . $address . '</h6>';
          echo '<hr>';
          echo '<input type="hidden" name="tel" value="' . $_POST['tel'] . '">';
          echo '<h5>電話番号 : ' . $_POST['tel'] . '</h5>';
          echo '<hr>';
          echo '<input type="hidden" name="payment" value="' . $_POST['payment'] . '">';
          echo '<h5>お支払方法 : ' . $_POST['payment'] . '</h5>';
          echo '<hr>';
          echo '<div align="center">';
          echo '<button type="submit" class="btn btn-primary"style="width: 20%;">注文する</button>';
          echo '</div>';
          ?>
          </from>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>