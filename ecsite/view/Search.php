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

  <?php include_once '../controller/Navbar.php' ?>

  <font color="white">
    <h4 style="position:relative;left:2%;padding-top: 1%;">検索結果 . . .</h4>
  </font>
  <div name="maindiv" class="container">
    <div class="row  gy-5 gx-3 mt-1 mr-1 ml-1 mb-5">

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div>

              <div name="maindiv" class="container">
                <div class="row  gy-5 gx-3 mt-1 mb-5">

                  <?php
                  require '../model/DBManagermst.php';
                  $dbmng = new DBManagermst();
                  $result = $dbmng->showGoodsBySearch($_POST['keyword']);
                  try {
                    foreach ($result as $row) {
                      echo '<div class="col-6 col-md-3">';
                      echo '<div class="card" style="border-style:none;">';
                      echo '<button>';
                      echo '<a href="Datail.php" class="img">';
                      echo '<img src="' . $row['goods_imgurl1'] . '" class="card-img-top"  style="border:none">';
                      echo '<div class="card-body"></a>';
                      echo '<h7 class="card-title">' . $row['goods_name'] . '</h7>';
                      echo '<div class="iro">';
                      echo '<p class="card-text">￥' . $row['goods_price'] . '</p></div></div>';
                      echo '</button>';
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
    </div>
</body>

</html>