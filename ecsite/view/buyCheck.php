<!DOCTYPE html>
<html>

<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <title>OnLineShop</title>
    <style>
       .bg-img{
  		background-image: url("img/topimage.jpg");
  		background-size: cover;
  		background-position: center 60%;
  	}

    .iro {
      color: gray;
      text-decoration: none;
    }
  
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

    #serch_icn{
      margin:0 1%;
      color:white;
    }
    .hoge_button3 {
      text-align: center;
      margin-bottom: 50px;
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

    .hr1 {
      margin:50px;
    }
    
    .gokei{
      padding-left: 74%;
    }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body background="../public/img_site/topimage.jpg">

<?php include_once '../controller/Navbar.php' ?>

<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1 mt-5 mb-3">
        <nobr class="" >
    <font color="silver">
    ご注文方法の指定
    </font>
    <font color="white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">  <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/></svg></font>
    <font color="white">
    ご注文内容の確認
    </font>
    <font color="white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">  <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/></svg></font>
    <font color="silver">
    ご注文完了
    </font>
    </nobr>
  </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1 mt-5 mb-5 pb-3" style="background-color:#FFFF;" >
      
        <h3 style="padding-top: 2%; padding-bottom:4%; padding-left:2%; text-align:left">購入アイテム</h3>

       <div class="row">
          <div class="col-7 text-dark "><p style="position:relative;left:65%;">アイテム名</p></div>
          <div class="col-5 text-dark"><p style="position:relative;left:63%;">小計(税込)</p></div>
       </div>

       <hr width="100%">

       <div class="row mt-3">
        echo '<div class="col-md-3">';
        echo '<img src="../public/img_site/s.jpg" width="150" height="150">';
        echo '</div>';
        echo '<div class="col-md-6 text-dark ">';
        echo 'Embroidered MA-1 blouson "Black" [@zastin_tcp] <br>';
        echo '</div>';
        echo '<div class="col-md-3 text-dark">';
        echo '<p class="text-center">¥29,800</p>';
        echo '</div>';
        echo '</div>';  

        <div class="row mt-3">
        <div class="col-md-3">
        <img src="../public/img_site/s.jpg" width="150" height="150">
        </div>
          <div class="col-md-6 text-dark ">
                Embroidered MA-1 blouson "Black" [@zastin_tcp] <br>
          </div>
          <div class="col-md-3 text-dark">
              <p class="text-center">¥29,800</p>
          </div>
        </div>  

        <div class="row mt-3">
        <div class="col-md-3">
        <img src="../public/img_site/s.jpg" width="150" height="150">
        </div>
          <div class="col-md-6 text-dark ">
                Embroidered MA-1 blouson "Black" [@zastin_tcp] <br>
          </div>
          <div class="col-md-3 text-dark">
              <p class="text-center">¥29,800</p>
          </div> 
        </div>  
        
      <hr>
      <h4 class="gokei">合計(税込) :￥123,000</h4>
      <h3 style="padding-top: 2%; padding-bottom:1%; padding-left:2%; text-align:left">購入者情報</h3>
      <hr>
      <h5>お名前</h5>
      <hr>
      <h5>お届け先</h5>
      <hr>
      <h5>電話番号</h5>
      <hr>
      <h5>お支払方法</h5>
      <hr>
      <div align="center">
      <button class=" btn btn-primary"style="width: 20%;">注文する</button>
      </div>

      </div>
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>

</html>
