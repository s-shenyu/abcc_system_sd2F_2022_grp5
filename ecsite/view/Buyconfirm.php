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
    <script>
function cancel(){
  let ngflg = 0;
        let name = document.getElementById("name").value;
        let post = document.getElementById("pcode").value;
        let city = document.getElementById("city").value;
        let ban = document.getElementById("ban").value;
        let email = document.getElementById("email").value;

        name_error.innerHTML = "";
        if(name == ""){ 
          name_error.innerHTML = "入力は必須です。";
          ngflg = 1;
        }

        post_error.innerHTML = "";
        if(post == ""){
          post_error.innerHTML = "入力は必須です。";
          ngflg = 1;
        }else{
          var regexp = /^\d{7}$/;
        if(regexp.test(post) != true){ 
          ngflg = 1;
          post_error.innerHTML = "正しい郵便番号を入力してください。";
         }
        }

        city_error.innerHTML = "";
        if(city == ""){ 
          city_error.innerHTML = "入力は必須です。";
          ngflg = 1;
        }

        ban_error.innerHTML = "";
        if(ban == ""){
          ban_error.innerHTML = "入力は必須です。";
          ngflg = 1;
        }

        email_error.innerHTML = "";
        if(email == ""){
          email_error.innerHTML = "入力は必須です。";
          ngflg = 1;
        }else{
          var regexp = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/;
        if(regexp.test(email) != true){
          email_error.innerHTML = "正しいメールアドレスを入れてください。";
          ngflg = 1;
           }
          }

        if(ngflg == 1){
          return false;
        }
      }
      </script>
</head>

<body background="../public/img_site/topimage.jpg">

<?php include_once '../controller/Navbar.php' ?>

<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1 mt-5 mb-3">
        <nobr class="" >
    <font color="white">
    ご注文方法の指定
    </font>
    <font color="white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">  <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/></svg></font>
    <font color="silver">
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
    <div class="col-md-10 offset-md-1  mb-5">
        <div style="background-color:#FFFF; padding-top: 20px; padding-bottom: 40px; ">
            <h3 class="font border-bottom" style=" padding-left: 30px; padding-top: 10px; padding-bottom: 10px; ">購入者さま</h3>

            <h4 style="padding-left: 30px;">お名前<br><input type="text" id="name"></h4>
            <p id="name_error"></p>
            <h4 class="font border-bottom"></h4>

            <h4 style="padding-left: 30px;">郵便番号<br><input type="text" id="pcode"></h4>
            <p id="post_error"></p>
            <h4 class="font border-bottom"></h4>

            <div class="row"><h4 class="col-md-4" style="padding-left: 30px;">都道府県
            <?php
// ①配列にデータを設定
$ken_data = ['hokkaido'=>'北海道',//北海道
             'aomori'=>'青森県','akita'=>'秋田県','yamagata'=>'山形県','iwate'=>'岩手県','miyagi'=>'宮城県','hukushima'=>'福島県',//東北地方
             'tochigi'=>'栃木県','ibaraki'=>'茨城県','gunma'=>'群馬県','saitama'=>'埼玉県','chiba'=>'千葉県','tokyo'=>'東京都','kanagawa'=>'神奈川県',//関東地方
             'nigata'=>'新潟県','toyama'=>'富山県','ishikawa'=>'石川県','hukui'=>'福井県','nagano'=>'長野県','gihu'=>'岐阜県','yamanashi'=>'山梨県','shizuoka'=>'静岡県',//中部地方
             'shiga'=>'滋賀県','mie'=>'三重県','kyoto'=>'京都府','osaka'=>'大阪府','nara'=>'奈良県','wakayama'=>'和歌山県','hyogo'=>'兵庫県',//近畿地方
             'tootori'=>'鳥取県','okayama'=>'岡山県','shimane'=>'島根県','hiroshima'=>'広島県','yamaguchi'=>'山口県',//中国地方
             'kagawa'=>'香川県','ehime'=>'愛媛県','kochi'=>'高知県','kochi'=>'徳島県',//四国地方
             'hukuoka'=>'福岡県','saga'=>'佐賀県','nagasaki'=>'長崎県','oita'=>'大分県','kumamoto'=>'熊本県','miyazaki'=>'宮崎県','kagoshima'=>'鹿児島県','okinawa'=>'沖縄県'//九州沖縄地方
            ];

foreach($ken_data as $ken_data_key => $ken_data_val){
   $ken_data .= "<option value='".$ken_data_key;
   $ken_data .= "'>". $ken_data_val. "</option>";
}
 
?>
<select name='ken'>
<?php 
echo $ken_data; 
?>
</select>
</h4></div>
            <h4 class="font border-bottom"></h4>

            <h4 style="padding-left: 30px;">市区町村<br><input type="text" id="city"></h4>
            <p id="city_error"></p>
            <h4 class="font border-bottom"></h4>

            <h4 style="padding-left: 30px;">番地以降<br><input type="text" id="ban"></h4>
            <p id="ban_error"></p>
            <h4 class="font border-bottom"></h4>

            <h4 style="padding-left: 30px;">メールアドレス<br><input type="text" id="email"></h4>
            <p id="email_error"></p>
            <h4 class="font border-bottom"></h4>

            <form style="text-align: center;">
              <br><br>
               </form>
            <h3 class="font border-bottom" style=" padding-left: 30px; padding-top: 10px; padding-bottom: 10px; ">お支払方法</h3>
            
            <h4 style="padding-left: 30px;"><input type="radio" name="payment" value="credit" checked> クレジットカード<h4 style="padding-left: 30px;"><img src="../img/viza.png" class="img-fluid picture" alt=""><img src="../img/master card.png" class="img-fluid picture" alt=""><img src="../img/jcb.png" class="img-fluid picture" alt=""><img src="../img/american express.png" class="img-fluid picture" alt=""><img src="../img/diners club.png" class="img-fluid picture" alt=""></h4></h4>
            <h4 class="font border-bottom"></h4>

            <h4 style="padding-left: 30px;"><input type="radio" name="payment" value="bank">銀行振込</h4>
            <h4 class="font border-bottom"></h4>
            
            <h4 style="padding-left: 30px;"><input type="radio" name="payment" value="convenience">コンビニ決済</h4>
            <h4 class="font border-bottom"></h4>
            
            <h4 style="padding-left: 30px;"><input type="radio" name="payment" value="paypay">PayPay払い</h4>
            <p style="padding-left: 43px;">お支払いはPayPay残高のみご利用いただけます。</p>
            <h4 class="font border-bottom"></h4>

            <form style="text-align: center;">
              <br><br>
               </form>
               <div class="hoge_button3">
              <a href="buyCheck.php" class="btn btn--orange3 btn--cubic3 btn--shadow3 hoge_button3" >
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
