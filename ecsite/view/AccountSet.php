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
  <link rel="stylesheet" href="../public/css/style2.css">
</head>

<body background="../img/watercolor_00395.jpeg">
  <?php if (isset($_SESSION['userido'])) : ?>
    <?php include_once '../controller/NavbarLogin.php' ?>
  <?php else : ?>
    <?php include_once '../controller/Navbar.php' ?>
  <?php endif; ?>

  <div class="container">
    <div class="col-md-10 offset-md-1 mt-5 mb-5">
      <div style="background-color:#FFFF">

        <h3 style="padding-top: 100px; padding-bottom: 50px; text-align:center">アカウント設定</h3>

        <form action="../controller/ckSigninadd.php" method="post" style="text-align: center">
          <nobr class="box">名前</nobr><input type="text" style="width:400px">
          <hr class="hr1">
          <nobr class="box">Pass</nobr><input type="text" style="width:400px">
        </form>

        <hr class="hr1">

        <!-- <form style="text-align: center">
          <nobr class="box">住所入力</nobr><input type="text" style="width:400px">
        </form>

        <hr class="hr1">

        <div class="row">
          <div class="col-md-6 pb-5">
            <form style="text-align: center">
              <nobr class="box">住所表示</nobr>
            </form>
          </div>

          <div class="col-md-6 pb-5">
            <form style="text-align: center">
              <nobr class="box">住所表示</nobr>
            </form>
          </div> -->

        <div class="hoge_button3">
          <a href="" class="btn btn--orange3 btn--cubic3 btn--shadow3　hoge_button3">
            登録
          </a>
        </div>

      </div>
    </div>
  </div>
  </div>




  <div class="hoge_button">
    <a href="" class="btn btn--orange btn--cubic btn--shadow　hoge_button">一覧に戻る</a>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>