<?php
session_start();

if (isset($_SESSION['userido'])) {
  $iduser = $_SESSION['userido'];
} else {
  $iduser = 0;
}

require '../model/DBManagermst.php';
$dbmng = new DBManagermst();
$goods = $dbmng->goodsDetail(base64_decode($_GET['idgoods']));
$idgood;
foreach ($goods as $row) {
  $idgood = $row['goods_id'];
}
?>

<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>古着EC｜商品詳細</title>
  <style>
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../public/css/style1.css">
</head>

<body background="../public/img_site/topimage.jpg">

  <?php if (isset($_SESSION['userido'])) : ?>
    <?php include_once '../controller/NavbarLogin.php' ?>
  <?php else : ?>
    <?php include_once '../controller/Navbar.php' ?>
  <?php endif; ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 offset-md-1 mt-5 mb-5">
        <div style="background-color:#FFFF">


          <div class="row">
            <div class="col-md-5 offset-md-1">

              <div id="carouselExampleIndicators" class="carousel slide pt-5" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner mb-5">
                  <div class="carousel-item active">
                    <img src="<?php foreach ($goods as $good) {
                                echo $good['goods_imgurl1'];
                              } ?>" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php foreach ($goods as $good) {
                                echo $good['goods_imgurl2'];
                              } ?>" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php foreach ($goods as $good) {
                                echo $good['goods_imgurl3'];
                              } ?>" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php foreach ($goods as $good) {
                                echo $good['goods_imgurl4'];
                              } ?>" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

            </div>
            <div class="col-md-6 p-5">
              <!-- 商品名 -->
              <h4 class="mb-3">
                <?php foreach ($goods as $good) {
                  echo $good['goods_name'];
                } ?>
              </h4>


              <!-- 商品価格 -->
              <h5>¥<?php foreach ($goods as $good) {
                      echo $good['goods_price'];
                    } ?>
              </h5><br>

              <form action="../controller/cWishlist.php" method="post">
                <input type="hidden" name="id" value="<?php echo $idgood ?>">
                <?php if (!isset($_SESSION['userido'])) : ?>
                  <a href="./Login.php" class='btn btn--orange2 btn--cubic2 btn--shadow2 hoge_button2'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi-heart' viewBox='0 0 16 16'>
                      <path d='m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z' />
                    </svg>
                    お気入り登録
                  </a>
                <?php elseif ($dbmng->goodsDetailWishlist($iduser, $idgood) == true) : ?>
                  <input type="hidden" name="favorite" value="addfav">
                  <button type="submit" class='btn btn--orange2 btn--cubic2 btn--shadow2 hoge_button2'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi-heart' viewBox='0 0 16 16'>
                      <path d='m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z' />
                    </svg>
                    お気入り登録
                  </button>
                <?php else : ?>
                  <div class='btn btn--orange2 btn--cubic2 btn--shadow2 hoge_button2'>
                    お気入り登録した
                  </div>
                <?php endif; ?>
              </form><br>

              <form action="../controller/cCart.php" method="post">
                <input type="hidden" name="id" value="<?php echo $idgood ?>">
                <?php if (!isset($_SESSION['userido'])) : ?>
                  <a href="./Login.php" class='btn btn--orange3 btn--cubic3 btn--shadow3 hoge_button3'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi-cart' viewBox='0 0 16 16'>
                      <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z' />
                    </svg>
                    カートに入れる
                  </a>
                <?php elseif ($dbmng->goodsDetailCart($iduser, $idgood) == true) : ?>
                  <input type="hidden" name="favorite" value="addfav">
                  <button type="submit" class='btn btn--orange3 btn--cubic3 btn--shadow3 hoge_button3'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi-cart' viewBox='0 0 16 16'>
                      <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z' />
                    </svg>
                    カートに入れる
                  </button>
                <?php else : ?>
                  <div type="submit" class='btn btn--orange3 btn--cubic3 btn--shadow3 hoge_button3'>
                    カートに入れた
                  </div>
                <?php endif; ?>
              </form>

              <p>
                <hr class="hr1">
                <?php
                foreach ($goods as $good) {
                  echo $good['goods_detail'];
                }
                ?>
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>