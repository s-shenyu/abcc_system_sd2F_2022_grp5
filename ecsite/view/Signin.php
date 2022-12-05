<?php
session_start();
if (isset($_SESSION['userido'])) {
  header('Location: ../view/top.php');
}
?>

<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>古着EC｜会員登録</title>
  <style>
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../public/css/style.css">
</head>

<body background="../public/img_site/topimage.jpg">
  <?php include_once '../controller/Navbar.php' ?>

  <div class="container">
    <div class="col-md-10 offset-md-1 mt-5 mb-5">
      <div style="background-color:#FFFF">
        <h3 style="padding-top: 100px; padding-bottom: 10px;  text-align:center">新規会員登録</h3>

        <h6 style="padding-top: 20px; text-align:center">
          <p>会員になると、マイページから注文履歴を確認いただけます。</p>
          <p>次回ご注文時より、お名前や住所、お支払い方法などの入力を省略いただけます。</p>
        </h6>

        <hr class="hr1">

        <div id="signinform" style="text-align:center;">
          <div>
            <p style="text-align:center">メールアドレスを入力して下さい</p>
            <input v-model="mail" type="text" placeholder="sample@stor.jp" size="10" name="mail" style="width:400px; height:30px;">
            <p v-if="isEmail" class="typeError" style="height:30px">Eメールアドレスの形式で入力してください。</p>
            <p v-else class="typeError" style="height:30px"></p>

            <p style="text-align:center">パスワードを入力して下さい</p>
            <input v-model="pass" type="password" placeholder="６文字以上半角英数字" size="10" name="pass" style="width:400px; height:30px;">
            <p v-if="isPass" class="typeError" style="height:30px">６文字以上半角英数字で入力してください。</p>
            <p v-else class="typeError" style="height:30px"></p>

            <p style="text-align:center">再度パスワードを入力して下さい</p>
            <input v-model="pass2" type="password" placeholder="６文字以上半角英数字" size="10" name="pass2" style="width:400px; height:30px;">
            <p v-if="isSamePass" class="typeError" style="height:30px">パスワードは一致していません。</p>
            <p v-else class="typeError" style="height:30px"></p>
          </div>
          <div v-if="isAllOK">
            <div class="hoge_button3" style="text-align:center;">
              <button class="btn btn--orange3 btn--cubic3 btn--shadow3 hoge_button3"><del>確認</del></button>
            </div>
          </div>
          <div v-else>
            <form action="../controller/ckSignin.php" method="post" style="text-align:center;">
              <input v-model="mail" type="hidden" name="mail" value="">
              <input v-model="pass" type="hidden" name="pass" value="">
              <div class="hoge_button3">
                <button type="submit" class="btn btn--orange3 btn--cubic3 btn--shadow3 hoge_button3">確認</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="../public/script/scriptVue.js"></script>
</body>

</html>