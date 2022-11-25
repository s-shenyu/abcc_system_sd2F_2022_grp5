<?php
session_start();
require '../model/DBManagermst.php';
$dbmng = new DBManagermst();

try {
    $result = $dbmng->login($_POST['mail'], $_POST['pass']);
    foreach ($result as $row) {
        $_SESSION['usermailo'] = $row['user_mail'];
        $_SESSION['usernameo'] = $row['user_name'];
    }
    header('Location: ../view/Top.php');
} catch (BadMethodCallException $ex) {
    header("refresh: 3; url= ../view/Login.php");
    error_log($ex->getMessage() . "\n", 3, "error_log.txt");
    echo $ex->getMessage();
} catch (LogicException $ex) {
    header("refresh: 3; url= ../view/Login.php");
    error_log($ex->getMessage() . "\n", 3, "error_log.txt");
    echo $ex->getMessage();
    echo $_POST['pass'];
} catch (Exception $ex) {
    header("refresh: 3; url= ../view/Login.php");
    error_log($ex->getMessage() . "\n", 3, "error_log.txt");
    echo "エラー発生";
}
?>