<?php
session_start();
require '../model/DBManagermst.php';
$dbmng = new DBManagermst();

$idgoods = $_POST['id'];
$iduser = $_SESSION['userido'];

$dbmng->deleteCart($iduser, $idgoods);
header('Location: ../view/cart.php');
?>