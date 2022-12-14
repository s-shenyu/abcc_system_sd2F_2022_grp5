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
                <h3 style="padding-top: 100px; padding-bottom: 10px;  text-align:center">新規会員登録</h3>
                <h6 style="padding-top: 20px; text-align:center">
                    <p>会員になると、マイページから注文履歴を確認いただけます。</p>
                    <p>次回ご注文時より、お名前や住所、お支払い方法などの入力を省略いただけます。</p>
                </h6>
                <hr class="hr1">
                <br><br>
                <h4 style="text-align:center">メールアドレスに送信致しました。</h4>
                <h4 style="text-align:center">ご確認をお願い致します。</h4>
                <br><br><br><br>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="../public/script/script.js"></script>
</body>

</html>