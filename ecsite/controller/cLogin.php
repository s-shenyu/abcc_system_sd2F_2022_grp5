<?php
session_start();
require '../model/DBManagermst.php';
$dbmng = new DBManagermst();
?>

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
    <link rel="stylesheet" href="../public/css/style1.css">
</head>

<body background="../public/img_site/topimage.jpg">
    <div class="container-fluid" style="height:56px;background-color: #000000;">
        <div class="row">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5 mb-5">
                <div style="background-color:#FFFF">


                    <div class="row">
                        <div class="p-5">
                            <h3>登録またはログインできません</h3>
                        </div>
                        <hr class="hr1">
                    </div>
                    <div class="row">
                        <div class="p-5">
                            <?php
                            try {
                                $result = $dbmng->login($_POST['mail'], $_POST['pass']);
                                foreach ($result as $row) {
                                    $_SESSION['userido'] = $row['user_id'];
                                    $_SESSION['usermailo'] = $row['user_mail'];
                                    $_SESSION['usernameo'] = $row['user_name'];
                                }
                                header('Location: ../view/Index.php');
                            } catch (BadMethodCallException $ex) {
                                header("refresh: 3; url= ../view/Login.php");
                                error_log($ex->getMessage() . "\n", 3, "error_log.txt");
                                echo $ex->getMessage();
                            } catch (LogicException $ex) {
                                header("refresh: 3; url= ../view/Login.php");
                                error_log($ex->getMessage() . "\n", 3, "error_log.txt");
                                echo '<h5>' . $ex->getMessage() . '</h5>';
                            } catch (Exception $ex) {
                                header("refresh: 3; url= ../view/Login.php");
                                error_log($ex->getMessage() . "\n", 3, "error_log.txt");
                                echo '<h5>エラー発生</h5>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="hr1">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>