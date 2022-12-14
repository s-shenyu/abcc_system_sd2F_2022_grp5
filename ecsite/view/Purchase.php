<?php
session_start();
require '../model/DBManagermst.php';
$dbmng = new DBManagermst();
?>

<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>古着EC｜購入履歴</title>
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
    <?php header('Location: ../view/Login.php'); ?>
  <?php endif; ?>

  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 mt-5 mb-5">
        <div class="p-5" style="background-color:#FFFF">

          <div class="col-md-12 text-dark text-left">
            <font size="5">購入履歴</font>
          </div>

          <div class="row mt-3">
            <div class="col-md-6">
              <p class="text-center">アイテム名</p>
            </div>
            <div class="col-md-4 text-dark">
              <p class="text-center">単価(税込)</p>
            </div>
            <div class="col-md-2 text-dark">
              <p class="text-center">購入日</p>
            </div>
          </div>
          <hr style="margin-top: 1px" />

          <div class="row mt-3">
            <?php
            try {
              $results = $dbmng->showPurchase($_SESSION['userido']);
              foreach ($results as $result) {
                $rows = $dbmng->goodsDetail($result['goods_id']);
                foreach ($rows as $row) {
                  echo '<form class="row mb-1" action="../controller/cDeletewishlist.php" method="post">';
                  echo '<input type="hidden" name="id" value="' . $row['goods_id'] . '">';
                  echo '<div class="col-md-6 mb-2 text-dark">';
                  echo '<img src="' . $row['goods_imgurl1'] . '" width="80" height="120" align="left" hspace="10px">';
                  echo $row['goods_name'];
                  echo '</div>';
                  echo '<div class="col-md-4  text-dark">';
                  echo '<p class="text-center">' . $row['goods_price'] . '</p>';
                  echo '</div>';
                }
                echo '<div class="col-md-2 text-dark">';
                echo '<p class="text-center">' . $result['purchaseH_createdate'] . '</p>';
                echo '</div>';
              }
            } catch (BadMethodCallException $ex) {
              echo '<font color="black"><h4 style="position:relative;left:2%;padding-top: 1%;">' . $ex->getMessage() . '</h4></font>';
            }
            ?>
          </div>

        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>