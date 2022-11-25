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
  <?php include_once '../controller/Navbar.php' ?>

  <div class="container">
    <div class="col-md-10 offset-md-1 mt-5 mb-5">
      <div style="background-color:#FFFF">
        <h3 style="padding-top: 100px; padding-bottom: 50px;  text-align:center">ログイン</h3>

        <form action="../controller/cLogin.php" method="post" style="text-align:center;">
          <p style="text-align:center">メールアドレス</p>
          <input type="text" placeholder="sample@stor.jp" size="10" name="mail" style="width:400px; height:30px;"><br><br>

          <p style="text-align:center">パスワード</p>
          <input type="password" placeholder="６文字以上半角英数字" size="10" name="pass" style="width:400px; height:30px;"><br><br>

          <div class="hoge_button3">
            <button type="submit" class="btn btn--orange3 btn--cubic3 btn--shadow3 hoge_button3">
              ログイン
            </button>
          </div>
        </form>

        <div class="link">
          <a href="./Signin.php">
            新規会員登録はこちら
          </a>
        </div>

      </div>
    </div>
  </div>






  </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>