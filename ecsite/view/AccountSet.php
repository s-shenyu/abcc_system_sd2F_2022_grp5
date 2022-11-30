<?php

use LDAP\Result;

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
  <link rel="stylesheet" href="../public/css/style.css">
</head>

<body background="../public/img_site/topimage.jpg">
  <?php if (isset($_SESSION['userido'])) : ?>
    <?php include_once '../controller/NavbarLogin.php' ?>
  <?php else : ?>
    <?php header('Location: ../view/Login.php'); ?>
  <?php endif; ?>

  <div class="container">
    <div class="col-md-10 offset-md-1 mt-5 mb-5">
      <div style="background-color:#FFFF">

        <h3 style="padding-top: 100px; padding-bottom: 50px; text-align:center">アカウント設定</h3>

        <?php
        $name = '';
        $pass = '';
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
            $pass = $result['user_pass'];
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
        <form action="../controller/ckSigninadd.php" method="post">
          <h4 style="padding-left: 30px;">お名前<br><input type="text" name="name" value="<?php echo $name ?>"></h4>
          <h4 style="padding-left: 30px;">パスワード<br><input type="password" name="pass" value="<?php echo $pass ?>"></h4>
          <br>
          <hr class="hr1">
          <h4 style="padding-left: 30px;">郵便番号<br><input type="tel" name="post" value="<?php echo $post ?>"></h4>
          <h4 class="col-md-4" style="padding-left: 30px;">都道府県<br>
            <?php
            $ken_datas = '';
            $ken_data = [
              '北海道', //北海道       
              '青森県', '秋田県', '山形県', '岩手県', '宮城県', '福島県', //東北地方
              '栃木県', '茨城県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県', //関東地方
              '新潟県', '富山県', '石川県', '福井県', '長野県', '岐阜県', '山梨県', '静岡県', //中部地方
              '滋賀県', '三重県', '京都府', '大阪府', '奈良県', '和歌山県', '兵庫県', //近畿地方
              '鳥取県', '岡山県', '島根県', '広島県', '山口県', //中国地方
              '香川県', '愛媛県', '高知県', '徳島県', //四国地方
              '福岡県', '佐賀県', '長崎県', '大分県', '熊本県', '宮崎県', '鹿児島県', '沖縄県' //九州沖縄地方
            ];
            foreach ($ken_data as $ken_data_key => $ken_data_val) {
              if($ken_data_key == $ken){
                $ken_datas .= '<option value="' . $ken_data_key . '" selected>' . $ken_data_val . '</option>';
              }else{
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
          <h4 style="padding-left: 30px;">市区町村<br><input type="text" name="shi" value="<?php echo $shi ?>"></h4>
          <h4 style="padding-left: 30px;">番地<br><input type="text" name="ban" value="<?php echo $ban ?>"></h4>
          <h4 style="padding-left: 30px;">詳細住所<br><input type="text" name="dtl" value="<?php echo $dtl ?>"></h4>
          <h4 style="padding-left: 30px;">電話番号<br><input type="tel" name="tel" value="<?php echo $tel ?>"></h4>
          <hr class="hr1">
          <div class="hoge_button3">
            <button type="submit" class="btn btn--orange3 btn--cubic3 btn--shadow3 hoge_button3">
              登録
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>