<?php
session_start();
require '../model/DBManagermst.php';
$dbmng = new DBManagermst();

$mailAndPass = base64_decode($_GET['info']);
$mail = explode('userMandP', $mailAndPass)[0];
$pass = explode('userMandP', $mailAndPass)[1];
try {
    $result = $dbmng->loginN($mail, $pass);
    foreach ($result as $row) {
        $_SESSION['usermailo'] = $row['user_mail'];
        $_SESSION['usernameo'] = $row['user_name'];
    }
    header('Location: ../view/mypagechange.php');
} catch (Exception $ex) {
    header("refresh: 3; url= ../view/Login.php");
    error_log($ex->getMessage() . "\n", 3, "error_log.txt");
    echo "エラー発生";
}
?>