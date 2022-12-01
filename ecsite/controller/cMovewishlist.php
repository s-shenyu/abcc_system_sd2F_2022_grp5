<?php
session_start();
require '../model/DBManagermst.php';
$dbmng = new DBManagermst();

$idgoods = 0;
foreach ($_POST['id'] as $goods) {
    if($_POST[$goods]){
        $idgoods = $goods;
    }
}
$iduser = $_SESSION['userido'];
try {
    $flg = 0;
    $results = $dbmng->showCart($iduser);
    foreach ($results as $result) {
        if ($result['goods_id'] == $idgoods) {
            $flg++;
        }
    }
    if ($flg == 0) {
        $dbmng->addNewCart($iduser, $idgoods);
    }
} catch (BadMethodCallException $ex) {
    $dbmng->addNewCart($iduser, $idgoods);
}
header('Location: ../view/Wishlist.php');
?>