<?php
session_start();
require '../model/DBManagermst.php';
$dbmng = new DBManagermst();

try {
    $dbmng->buyGoods($_SESSION['userido'], $_POST['name'], $_POST['post'], $_POST['address'], $_POST['tel'], $_POST['id']);
    foreach ($_POST['id'] as $good) {
        // $dbmng->deleteWishlist($_SESSION['userido'], $good);
        $dbmng->deleteCartBuy($good);
    }
    header('Location: ../view/Complete.php');
} catch (Exception $ex) {
    header("refresh: 3; url= ../view/Index.php");
    error_log($ex->getMessage() . "\n", 3, "error_log.txt");
    echo "エラー発生";
}
?>