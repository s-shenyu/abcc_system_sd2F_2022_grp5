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

    a.btn--orange3 {
      color: #fff;
      background-color: #C0C0C0	;
      border-bottom: 5px solid #C0C0C0	;
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
              <div class="col-md-4 p-5">
                <h3>マイページ</h3>
              </div>

              <div class="col-md-5">
              </div>

              <div class="col-md-3  p-5">
                <div class="hoge_button3">
                   <a href="" class="btn btn--orange3 btn--cubic3 btn--shadow3">
                    ログアウト
                  </a>
                </div>
            </div>
            <hr class="hr1">
          </div>


        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-4 p-5">
            <h5>アカウント設定</h5>
          </div>
          <div class="col-md-6  p-5">
            <div class="">
              <a href="AccountSet.html">配送先やクレジットカード情報にの登録・変更ができます。＞</a>
            </div>
          </div>
          <div class="col-md-1">
          </div>
        </div>
        <hr class="hr1">

    <div class="row">
      <div class="col-md-1">
      </div>
        <div class="col-md-4 p-5">
          <h5>購入履歴</h5>
        </div>
      <div class="col-md-7  pt-5 pb-5 text-right">
        <div class="">
           <a href="AccountSet.html">過去の購入履歴が確認できます。＞</a>
        </div>
      </div>
      <div class="col-md-1">
      </div>
    </div>
    <hr class="hr1">



    <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-4 p-5">
        <h5>お気に入り</h5>
      </div>
      <div class="col-md-7  p-5">
        <div class="">
          <a href="AccountSet.html">お気に入り登録したアイテムが確認できます。＞</a>
        </div>
      </div>
      <div class="col-md-1">
      </div>
    </div>


      </div>
    </div>
  </div>
</div>

<hr class="hr1">




<div class="hoge_button">
   <a href="" class="btn btn--orange btn--cubic btn--shadow　hoge_button">一覧に戻る</a>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
