<?php
session_start();
require '../model/DBManagermst.php';
require '../model/ArrayKen.php';
$dbmng = new DBManagermst();
$arrk = new ArrayKen();
?>

<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>古着EC｜注文</title>
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
      <div class="col-md-10 offset-md-1 mt-5 mb-3">
        <nobr class="">
          <font color="white">
            ご注文方法の指定
          </font>
          <font color="white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
              <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" />
            </svg></font>
          <font color="silver">
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
    <div class="col-md-10 offset-md-1  mb-5">
      <div style="background-color:#FFFF; padding-top: 10px;">
        <h3 class="font border-bottom" style=" padding-left: 30px; padding-top: 30px; padding-bottom: 50px; ">購入者さま</h3>

        <?php
        $name = '';
        $post = '';
        $ken = '';
        $shi = '';
        $ban = '';
        $dtl = '';
        $tel = '';
        try {
          $results = $dbmng->showInfo($_SESSION['userido']);
          foreach ($results as $result) {
            $name = empty($result['user_name']) ? $name : $result['user_name'];
            $rows = $dbmng->showAddress($result['user_id']);
            foreach ($rows as $row) {
              $post = empty($row['address_post']) ? $post : $row['address_post'];
              $ken = empty($row['address_ken']) ? $ken : $row['address_ken'];
              $shi = empty($row['address_shi']) ? $shi : $row['address_shi'];
              $ban = empty($row['address_ban']) ? $ban : $row['address_ban'];
              $dtl = empty($row['address_detail']) ? $dtl : $row['address_detail'];
              $tel = empty($row['address_number']) ? $tel : $row['address_number'];
            }
          }
        } catch (BadMethodCallException $ex) {
          echo '<font color="black"><h4 style="position:relative;left:2%;padding-top: 1%;">' . $ex->getMessage() . '</h4></font>';
        }
        ?>
        <form action="./BuyCheck.php" method="post">
          <h4 style="padding-left: 30px;">お名前<br><input v-model="name" type="text" name="name" value="<?php echo $name ?>" required></h4>
          <hr class="hr1">
          <h4 style="padding-left: 30px;">郵便番号<br><input v-model="post" type="tel" name="post" value="<?php echo $post ?>" required></h4>
          <h4 class="col-md-4" style="padding-left: 30px;">都道府県<br>
            <?php
            $ken_datas = '';
            foreach ($arrk->ken_data as $ken_data_key => $ken_data_val) {
              if ($ken_data_key == $ken) {
                $ken_datas .= '<option value="' . $ken_data_key . '" selected>' . $ken_data_val . '</option>';
              } else {
                $ken_datas .= '<option value="' . $ken_data_key . '">' . $ken_data_val . '</option>';
              }
            }
            ?>
            <select name='ken'>
              <?php
              echo $ken_datas;
              ?>
            </select>
          </h4>
          <h4 style="padding-left: 30px;">市区町村<br><input v-model="shi" type="text" name="shi" value="<?php echo $shi ?>" required></h4>
          <h4 style="padding-left: 30px;">番地<br><input type="text" name="ban" value="<?php echo $ban ?>" required></h4>
          <h4 style="padding-left: 30px;">詳細住所<br><input type="text" name="dtl" value="<?php echo $dtl ?>"></h4>
          <h4 style="padding-left: 30px;">電話番号<br><input v-model="tel" type="tel" name="tel" value="<?php echo $tel ?>" required></h4>
          <hr class="hr1"><br>
          <h3 class="font border-bottom" style=" padding-left: 30px; padding-top: 10px; padding-bottom: 50px; ">お支払方法</h3>
          <h4 style="padding-left: 30px;"><input type="radio" name="payment" value="credit" checked>
            クレジットカード
            <div style="padding-left: 30px;">
              <img src="../public/img_site/viza.png" class="img-fluid picture" alt="" style="height: 50px;">
              <img src="../public/img_site/master.png" class="img-fluid picture" alt="" style="height: 50px;">
              <img src="../public/img_site/jcb.png" class="img-fluid picture" alt="" style="height: 50px;">
              <img src="../public/img_site/amex.png" class="img-fluid picture" alt="" style="height: 50px;">
              <img src="../public/img_site/diners.png" class="img-fluid picture" alt="" style="height: 50px;">
            </div>
          </h4>
          <h4 class="font border-bottom"></h4>
          <h4 style="padding-left: 30px;"><input type="radio" name="payment" value="bank">銀行振込</h4>
          <h4 class="font border-bottom"></h4>
          <h4 style="padding-left: 30px;"><input type="radio" name="payment" value="convenience">コンビニ決済</h4>
          <h4 class="font border-bottom"></h4>
          <h4 style="padding-left: 30px;"><input type="radio" name="payment" value="paypay">PayPay払い</h4>
          <h4 class="font border-bottom"></h4>
          <div class="hoge_button3">
            <button type="submit" class="mt-5 btn btn--orange3 btn--cubic3 btn--shadow3 hoge_button3">
              確認画面へ
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>