<!DOCTYPE html>
<html>

<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <title>OnLineShop</title>
  <style>
    .nav-item {
      display: flex;
      padding-left: 90%;
    }

    .nav-itemlog {
      padding: 0 0.5%;
      display: flex;
      list-style-type: none;
    }

    .hoge_button3 {
      text-align: center;
      margin-bottom: 15px;
    }

    a.btn--orange3 {
      color: #fff;
      background-color: #1E90FF;
      border-bottom: 5px solid #1E90FF;
    }

    a.btn--orange3:hover {
      margin-top: 3px;
      color: #fff;
      background: #1E90FF;
      border-bottom: 2px solid #1E90FF;
    }

    a.btn--shadow3 {
      -webkit-box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
      box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
    }

    .font {
      color: #ffff;
    }

    .ban {
      color: red;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body background="../public/img_site/topimage.jpg">

  <?php include_once '../controller/Navbar.php' ?>

  <div class="container">
    <div class="col-md-10 offset-md-1 mt-5 mb-3">
      <nobr class="">
        <font color="silver">
          ご注文方法の指定
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
            <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" />
          </svg>
          ご注文内容の確認
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
            <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" />
          </svg>
          <font color="white">
            ご注文完了
          </font>
        </font>
      </nobr>
    </div>
  </div>

  <div class="container">
    <div class="col-md-10 offset-md-1  mb-5">
      <div style="background-color:#FFFF; padding-top: 30px; padding-bottom: 40px; ">
        <h3 class="font" style="background-color:#1E90FF; padding-top: 10px; padding-bottom: 10px; text-align:center;">ご注文ありがとうございました！</h3>

        <h4 style="padding-top: 50px; text-align:center">注文番号は、<nobr class="ban">０００００００</nobr>です。</h4>
        <form style="text-align: center; ">
          <br><br>
        </form>

        <p style="text-align:center">確認のためのメールが届きますのでご覧ください。</p>
        <form style="text-align: center; ">
          <br><br>
        </form>

        <div class="hoge_button3">
          <a href="" class="btn btn--orange3 btn--cubic3 btn--shadow3 hoge_button3">
            ホームへ戻る
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