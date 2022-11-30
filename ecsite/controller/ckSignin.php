<?php
session_start();
require '../model/DBManagermst.php';

$dbmng = new DBManagermst();

$mail = $_POST['mail'];
$pass = $_POST['pass'];

try {
    $dbmng->signin($mail, $pass);
    $_SESSION['userido'] = $mail;
    $_SESSION['usermailo'] = $mail;
    header('Location: ../view/AccountSet.php');
} catch (BadMethodCallException $ex) {
    header("refresh: 3; url= ../view/Signin.php");
    error_log($ex->getMessage() . "\n", 3, "error_log.txt");
    echo $ex->getMessage();
} catch (Exception $ex) {
    header("refresh: 3; url= ../view/Signin.php");
    error_log($ex->getMessage() . "\n", 3, "error_log.txt");
    echo '発信失敗';
}
?>
