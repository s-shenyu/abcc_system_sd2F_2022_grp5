<!DOCTYPE html>
<html>

<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <title>OnLineShop</title>
    <style>

    .nav-item{
      display: flex;
      margin: 0 auto;
      padding: 0 5%;
      width: 94%;
      }
      .nav-itemlog{
      padding: 0 0.5%;
      display: flex;
      list-style-type: none;
    }


    .hoge_button {
     text-align: center;
     margin-bottom: 50px;
    }
    a.btn--orange {
      color: #fff;
      background-color: #000000;
      border-bottom: 5px solid #000000;
    }
    a.btn--orange:hover {
      margin-top: 3px;
      color: #fff;
      background:#000000 ;
      border-bottom: 2px solid #000000;
    }
    a.btn--shadow {
      -webkit-box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
      box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
    }


    .hoge_button2 {
     width: 250px;
    }
    a.btn--orange2 {
      color: #808080;
      background-color: #EEEEEE;
      border-bottom: 5px solid #EEEEEE;
    }
    a.btn--orange2:hover {
      margin-top: 3px;
      color: #808080;
      background:#EEEEEE ;
      border-bottom: 2px solid #EEEEEE;
    }
    a.btn--shadow2 {
      -webkit-box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
      box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
    }


    .hoge_button3 {
     width: 250px;
    }
    a.btn--orange3 {
      color: #fff;
      background-color: #1E90FF	;
      border-bottom: 5px solid #1E90FF	;
    }
    a.btn--orange3:hover {
    margin-top: 3px;
    color: #fff;
    background:#1E90FF	 ;
    border-bottom: 2px solid #1E90FF	;
    }
    a.btn--shadow3 {
    -webkit-box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
    box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
    }


      .bi-heart{
        color: red
      }

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body background="../img/watercolor_00395.jpeg">

  <div class="container-fluid"style="background-color: #000000;">
    <div class="row">

      <nav class="navbar navbar-expand-md navbar-dark" aria-label="Fourth navbar example" >
        <div class="container-fluid"style="background-color: #000000;">
          <a class="navbar-brand" href="Top.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
          </svg>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item list-style-type: none;">
                <a class="nav-link active" aria-current="page" href="./Outer.php">outer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./Tops.php">tops</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="./Bottoms.php">bottom</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="./Shose.php">shose</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="./Accesory_etc.php">accessory/etc</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="./Look.php">look</a>
              </li>
            </ul>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" id=serch_icn>
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </a>
          <form role="search">
            <input class="form-control" type="search" placeholder="search" aria-label="Search">
          </form>

          <li class="nav-itemlog">
            <a class="nav-link active" href="login.php">login</a>
          </li>

            <a class="navbar-brand" href="cart.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
            </a>
          </div>
        </div>
      </nav>
    </div>
  </div>


<div class="container">
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
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../img/knit.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../img/knit.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../img/knit.png" class="d-block w-100" alt="...">
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
            <div class="col-md-6  p-5">

              <?php
                require_once '../model/DBManagermst.php';

                $dbmng = new DBManagermst();

                //$searchArray = $dbmng->goodsDetail($_POST['id']);

              ?>


                //商品名
                <h4><?php
                //DBManagerから商品詳細情報を取得
                //$getData = $dbmng->XXXXX(XXXXX);
                //foreach ($getData as $row) {
                  //echo "$_GET['googs_name']";
                  //}
                  ?>
                </h4>


                //商品価格
                <h5>¥
                  <?php
                  //DBManagerから商品詳細情報を取得
                  //$getData = $dbmng->XXXXX(XXXXX);
                  //foreach ($getData as $row) {
                    //echo "$_GET['goods_price']";
                    //}
                  ?>
                </h5><br>


                <p>

                  <?php
                  //addNewWishlist
                  echo "
                   <a href='' class='btn btn--orange2 btn--cubic2 btn--shadow2　hoge_button2'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi-heart' viewBox='0 0 16 16'>
                      <path d='m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z'/>
                    </svg>
                    お気入り登録
                    </a>
                    ";?>
                </p>



                <p>
                  <?php
                  echo "
                  <a href='' class='btn btn--orange3 btn--cubic3 btn--shadow3　hoge_button3'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi-cart' viewBox='0 0 16 16'>
                      <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
                    </svg>
                    カートに入れる
                  </a>
                  ";?>
                </p>



                <?php

                ?>


                <p>ランダムパターンの柄にフェイクスウェードの生地切り替えが施されたクルーネックニットです<br>

                こちらイタリア製のニットということもあり、<br>
                デザイン物の割に落ち着いた雰囲気があります。<br>

                ウールほどチクチクしないしアクリルほどボサボサな感じがなく、<br>
                コットンニットに近い触り心地。<br>
                高級感と言うには少し地味なのですが、<br>
                袖を通した時に「あぁ良いニットだなぁ」と<br>
                感じて頂ける生地感かと思います。<br>

                スタイリングですが、<br>
                レザージャケットや黒デニムと合わせて"素材感"をアクセントにした<br>
                組み合わせがオススメ。<br>
                セットアップなどとモードに合わせるのカッコ良いですよ。</p>



                ＊アイロン後に発送致しますが、あくまで古着のため、理解のある方のみのご購入をお願いいたします。<br>
                ＊＊全アイテム古着の為、一点物となります予めご了承下さい。<br>

                ※配送に関しては、月~水までにお支払い頂いたご注文→木曜日に発送。木~日までにお支払い頂いたご注文→月曜日に発送。<br>
                ※郵便局が閉まっているため土日、祝日の発送は不可能となります予めご了承ください。<br>

            </div>
          </div>
      </div>
    </div>
  </div>
</div>




<div class="hoge_button">
   <a href="" class="btn btn--orange btn--cubic btn--shadow　hoge_button" onclick="history.back(-1);return false">一覧に戻る</a>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
