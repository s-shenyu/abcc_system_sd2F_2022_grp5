<!DOCTYPE html>
<html>

<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <title>OnLineShop</title>
    <style>
    .nav-item{
      display: flex;
      padding-left: 90%;
      }
      .nav-itemlog{
      padding: 0 0.5%;
      display: flex;
      list-style-type: none;
    }
    .hoge_button3{
     text-align: center;
     margin-bottom:15px;
    }

    a.btn--orange3 {
      color: #fff;
      background-color: #1E90FF;
      border-bottom: 5px solid #1E90FF;
    }
    a.btn--orange3:hover {
    margin-top: 3px;
    color: #fff;
    background:#1E90FF     ;
    border-bottom: 2px solid #1E90FF;
    }
    a.btn--shadow3 {
    -webkit-box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
    box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
    }
    .font{
        color:#000;
    }
    .picture{
      width: 100px;
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
    <div class="col-md-10 offset-md-1 mt-5 mb-3">
        <nobr class="" >
    <font color="white">
    ご注文方法の指定
    <font color="silver">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">  <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/></svg>
    ご注文内容の確認
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">  <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/></svg>
    ご注文完了
    </font>
    </font>
    </nobr>
  </div>
</div>

<div class="container">
    <div class="col-md-10 offset-md-1  mb-5">
        <div style="background-color:#FFFF; padding-top: 20px; padding-bottom: 40px; ">
            <h3 class="font border-bottom" style=" padding-left: 30px; padding-top: 10px; padding-bottom: 10px; ">購入者さま</h3>
            <?php
                $initial_name = "名前";
                $initial_addres = "番号";
                $initial_shi = "福岡";
                $initial_ban = "1-1-1";
                $initial_detail = "アドレス";
            ?>
            <form action="Buyconfirm.php"method="post">
            <h4 style="padding-left: 30px;">お名前<br><input type="text" value=<?=$initial_name ?>></h4>
            <h4 class="font border-bottom"></h4>

            <h4 style="padding-left: 30px;">郵便番号<br><input type="text" value=<?=$initial_addres ?>></h4>
            <h4 class="font border-bottom"></h4>

            <div class="row"><h4 class="col-md-4" style="padding-left: 30px;">都道府県 <select class="form-select col-md-8" aria-label="都道府県"><option selected></select></option></h4></div>
            <h4 class="font border-bottom"></h4>

            <h4 style="padding-left: 30px;">市区町村<br><input type="text" value=<?=$initial_shi ?>></h4>
            <h4 class="font border-bottom"></h4>

            <h4 style="padding-left: 30px;">番地以降<br><input type="text" value=<?=$initial_ban ?>></h4>
            <h4 class="font border-bottom"></h4>

            <h4 style="padding-left: 30px;">メールアドレス<br><input type="text" value=<?=$initial_detail ?>></h4>
            <h4 class="font border-bottom"></h4>
            </form>
            <form style="text-align: center;">
              <br><br>
               </form>
            <h3 class="font border-bottom" style=" padding-left: 30px; padding-top: 10px; padding-bottom: 10px; ">お支払方法</h3>
            
            <h4 style="padding-left: 30px;"><input type="radio"> クレジットカード<h4 style="padding-left: 30px;"><img src="../img/viza.png" class="img-fluid picture" alt=""><img src="../img/master card.png" class="img-fluid picture" alt=""><img src="../img/jcb.png" class="img-fluid picture" alt=""><img src="../img/american express.png" class="img-fluid picture" alt=""><img src="../img/diners club.png" class="img-fluid picture" alt=""></h4></h4>
            <h4 class="font border-bottom"></h4>

            <h4 style="padding-left: 30px;"><input type="radio">銀行振込</h4>
            <h4 class="font border-bottom"></h4>
            
            <h4 style="padding-left: 30px;"><input type="radio">コンビニ決済</h4>
            <h4 class="font border-bottom"></h4>
            
            <h4 style="padding-left: 30px;"><input type="radio">PayPay払い</h4>
            <p style="padding-left: 43px;">お支払いはPayPay残高のみご利用いただけます。</p>
            <h4 class="font border-bottom"></h4>

            <form style="text-align: center;">
              <br><br>
               </form>
            <div class="hoge_button3">
             <a href="" class="btn btn--orange3 btn--cubic3 btn--shadow3 hoge_button3" >
              内容のご確認へ
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
