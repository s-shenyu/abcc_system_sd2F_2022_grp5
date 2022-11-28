<?php
session_start();
require '../model/DBManagermst.php';
$dbmng = new DBManagermst();

try {
    $dbmng->buyGoods($_POST['id'], $_POST['addr'], $_POST['goods']);
    header('Location: ../view/Top.php');
} catch (Exception $ex) {
    header("refresh: 3; url= ../view/Top.php");
    error_log($ex->getMessage() . "\n", 3, "error_log.txt");
    echo "エラー発生";
}
?>