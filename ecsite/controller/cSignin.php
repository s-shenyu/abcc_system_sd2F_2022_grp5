<?php
session_start();
require '../model/DBManagermst.php';
$dbmng = new DBManagermst();

$to = "s_shenyu@outlook.com";
$subject = "mail";
$message = "signin url";
$from = "shi_shenyu@outlook.com";
$header = "From:".$from;

try {
    $dbmng->signin($_POST['mail'], $_POST['pass']);
    mail($to, $subject, $message, $header);
    // foreach ($result as $row) {
    //     $_SESSION['usermailo'] = $row['user_mail'];
    //     $_SESSION['usernameo'] = $row['user_name'];
    // }
    header('Location: ../Index.php');
} catch (BadMethodCallException $ex) {
    header("refresh: 3; url= ../view/Login.php");
    error_log($ex->getMessage() . "\n", 3, "error_log.txt");
    echo $ex->getMessage();
} catch (Exception $ex) {
    header("refresh: 3; url= ../view/Login.php");
    error_log($ex->getMessage() . "\n", 3, "error_log.txt");
    echo "エラー発生";
}
?>