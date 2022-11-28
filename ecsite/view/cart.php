<!DOCTYPE html>
<html>

<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <title>カート</title>
  <style>
    .bg-img {
      background-image: url("img/topimage.jpg");
      background-size: cover;
      background-position: center 60%;
    }

    .iro {
      color: gray;
      text-decoration: none;
    }

    .nav-item {
      display: flex;
      margin: 0 auto;
      padding: 0 5%;
      width: 94%;
    }

    .nav-itemlog {
      padding: 0 0.5%;
      display: flex;
      list-style-type: none;
    }

    #serch_icn {
      margin: 0 1%;
      color: white;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../public/css/style.css">
</head>

<body background="../public/img_site/topimage.jpg">
  <?php include_once '../controller/Navbar.php' ?>

  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 mt-5 mb-5">
        <div class="p-5" style="background-color:#FFFF">

          <div class="col-md-12 text-dark text-left">
            <font size="5">カートに入ってるアイテム</font>
          </div>

          <div class="row mt-3">
            <div class="col-md-6">
              <p class="text-center">アイテム名</p>
            </div>
            <div class="col-md-6 text-dark">
              <p class="text-center">小計(税込)</p>
            </div>
          </div>
          <hr style="margin-top: 1px" />

          <div class="row mt-3">
            <?php
            echo '<div class="col-md-6 text-dark">';
            echo '<img src="../img/knit.png" width="100" height="150" align="left" hspace="10px">';
            echo $row['goods_name'];
            echo '<button class="btn btn-light">x削除</button>';//?
            echo '</div>';
            echo '<div class="col-md-6  text-dark">';
            echo '<p class="text-center">'.$row['goods_price'].'</p>';
            echo '</div>';
            ?>
          </div>

        </div>
      </div>
    </div>
  </div>

</body>

</html>