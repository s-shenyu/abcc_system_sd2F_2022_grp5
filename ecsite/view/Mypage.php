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
  <title>OnLineShop</title>
  <style>
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../public/css/style1.css">
</head>

<body background="../img/watercolor_00395.jpeg">
  <?php if (isset($_SESSION['userido'])) : ?>
    <?php include_once '../controller/NavbarLogin.php' ?>
  <?php else : ?>
    <?php header('Location: ../view/Login.php'); ?>
  <?php endif; ?>

  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 mt-5 mb-5">
        <div style="background-color:#FFFF">


          <div class="row">
            <div class="col-md-4 p-5">
              <h3>マイページ</h3>
            </div>

            <div class="col-md-5">
            </div>

            <div class="col-md-3 p-5">
              <div class="hoge_button3">
                <a href="../controller/cLogout.php" class="btn btn--orange3 btn--cubic3 btn--shadow3">
                  ログアウト
                </a>
              </div>
            </div>
            <hr class="hr1">
          </div>


          <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-4 p-5">
              <h5>アカウント設定</h5>
            </div>
            <div class="col-md-6 p-5">
              <div class="">
                <a href="AccountSet.php">配送先やクレジットカード情報にの登録・変更ができます。＞</a>
              </div>
            </div>
            <div class="col-md-1">
            </div>
          </div>
          <hr class="hr1">

          <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-4 p-5">
              <h5>購入履歴</h5>
            </div>
            <div class="col-md-6 p-5">
              <div class="">
                <a href="Purchase.php">過去の購入履歴が確認できます。＞</a>
              </div>
            </div>
            <div class="col-md-1">
            </div>
          </div>
          <hr class="hr1">



          <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-4 p-5">
              <h5>お気に入り</h5>
            </div>
            <div class="col-md-6 p-5">
              <div class="">
                <a href="Wishlist.php">お気に入り登録したアイテムが確認できます。＞</a>
              </div>
            </div>
            <div class="col-md-1">
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

  <hr class="hr1">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>