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

$dbmng->deleteWishlist($iduser, $idgoods);
header('Location: ../view/Wishlist.php');
?>