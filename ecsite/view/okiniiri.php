<!DOCTYPE html>
<html>

<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <title>お気に入り</title>
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
        <div style="background-color:#FFFF">

          <div class="row">
            <div class="col-md-12 text-dark text-left pt-3">
              <h3>お気に入り<h3>
            </div>
          </div>
          <hr>


          <div class="row mt-3">
            <div class="col-md-6">
              <p class="text-center">アイテム名</p>
            </div>
            <div class="col-md-2 text-dark">
              <p class="text-center">単価(税込)</p>
            </div>
          </div>
          <hr style="margin-top: 1px" />

          <div class="row mt-3">
            <?php
            require '../model/DBManagermst.php';
            $dbmng = new DBManagermst();
            $result = $dbmng->showWishlist('*');
            try {
              foreach ($result as $row) {
                echo '<div class="col-md-6 text-dark">';
                echo '<img src="' . $row['goods_imgurl1'] . '" width="150" height="150" align="left">';
                echo   $row['goods_name'];
                echo '</div>';
                echo '<div class="col-md-2 text-dark">';
                echo '<p class="text-center">' . $row['goods_price'] . '</p>';
                echo '</div>';
                echo '<div class="col-md-2 text-dark">';
                echo '<table>';
                echo '<tr>';
                echo '<td><button class="btn btn-primary" style="width: 150px;">カートに入れる</button></td>'; //?
                echo '<td><button class="btn btn-outline-dark" style="width: 80px;">削除</button></td>'; //?
                echo '</tr>';
                echo '</table>';
                echo '</div>';
                echo '</div>';
              }
            } catch (error $err) {
              echo "error";
            }
            ?>

          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>