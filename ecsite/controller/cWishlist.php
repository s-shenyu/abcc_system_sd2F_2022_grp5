<?php
session_start();
require '../model/DBManagermst.php';
$dbmng = new DBManagermst();

$idgoods = $_POST['id'];
$iduser = $_SESSION['userido'];

$dbmng->addNewWishlist($iduser, $idgoods);
header('Location: ../view/Detail.php?idgoods=' . base64_encode($idgoods));
?>