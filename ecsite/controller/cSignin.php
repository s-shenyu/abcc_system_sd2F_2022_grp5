<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../model/DBManagermst.php';
require '../model/Exception.php';
require '../model/PHPMailer.php';
require '../model/SMTP.php';

$dbmng = new DBManagermst();
$sendMail = new PHPMailer(true);

$mail = $_POST['mail'];
$pass = password_hash($pass, PASSWORD_DEFAULT);
$mailAndPass = $mail.'userMandP'.$pass;
$signinUrl = 'http://localhost/web/abcc_system_sd2F_2022_grp5/ecsite/controller/cSignincheck.php?info='.base64_encode($mailAndPass);

try {
    $dbmng->signin($mail, $pass);
    header('Location: ../controller/cSigninnext.php');

    $sendMail->CharSet = 'UTF-8';
    $sendMail->SMTPDebug = 0;
    $sendMail->isSMTP();
    $sendMail->Host = 'smtp.office365.com';
    $sendMail->SMTPAuth = true;
    $sendMail->Username = 'asog5ecsite@outlook.com';
    $sendMail->Password = 'Adminecsite';
    $sendMail->SMTPSecure = 'tls';
    $sendMail->Port = 587;

    $sendMail->setFrom('asog5ecsite@outlook.com','ECSite');
    $sendMail->addAddress($mail,'User');

    $sendMail->isHTML(true);
    $sendMail->Subject = '会員登録のご案内';
    $sendMail->Body = '<h3>ご登録頂き、誠にありがとうございます</h3><br><p>下記URLから登録続きをおこなってください。</p><br><p>'.$signinUrl.'</p>';
    // $sendMail->AltBody = 'メートル内容<br>';

    $sendMail->send();
} catch (BadMethodCallException $ex) {
    header("refresh: 3; url= ../view/Signin.php");
    error_log($ex->getMessage() . "\n", 3, "error_log.txt");
    echo $ex->getMessage();
} catch (Exception $ex) {
    header("refresh: 3; url= ../view/Signin.php");
    error_log($ex->getMessage() . "\n", 3, "error_log.txt");
    echo 'メール発信失敗：', $sendMail->ErrorInfo;
}
?>
