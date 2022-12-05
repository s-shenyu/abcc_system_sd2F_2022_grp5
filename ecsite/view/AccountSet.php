<?php
session_start();
require '../model/DBManagermst.php';
require '../model/ArrayKen.php';
$dbmng = new DBManagermst();
$arrk = new ArrayKen();
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
  <title>古着EC｜情報編集</title>
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
          <h4 style="padding-left: 18%;">お名前<br><input type="text" name="name" value="<?php echo $name ?>" required></h4>
          <h4 style="padding-left: 18%;">パスワード<br><input type="password" name="pass" value="<?php echo $pass ?>" required></h4>
          <h6 style="padding-left: 18%;">*入力しないとパスワード変更しません</h6>
          <br>
          <hr class="hr1">
          <h4 style="padding-left: 18%;">郵便番号<br><input type="tel" name="post" value="<?php echo $post ?>" required></h4>
          <h4 class="col-md-4" style="padding-left: 18%;">都道府県<br>
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
          <h4 style="padding-left: 18%;">市区町村<br><input type="text" name="shi" value="<?php echo $shi ?>" size="56" required></h4>
          <h4 style="padding-left: 18%;">番地<br><input type="text" name="ban" value="<?php echo $ban ?>" size="56" required></h4>
          <h4 style="padding-left: 18%;">詳細住所<br><input type="text" name="dtl" value="<?php echo $dtl ?>" size="56"></h4>
          <h4 style="padding-left: 18%;">電話番号<br><input type="tel" name="tel" value="<?php echo $tel ?>" required></h4>
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