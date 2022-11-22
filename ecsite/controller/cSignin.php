<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../model/DBManagermst.php';
require '../model/Exception.php';
require '../model/PHPMailer.php';
require '../model/SMTP.php';

$dbmng = new DBManagermst();
$sendMail = new PHPMailer(true);

$mailAndPass = $_POST['mail'].'userMandP'.password_hash($pass, PASSWORD_DEFAULT);
$signinUrl = '../view/'.base64_encode($mailAndPass);

try {
    $dbmng->signin($_POST['mail'], $_POST['pass']);
    header('Location: ../view/index.html');

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
    $sendMail->addAddress('s_shenyu@outlook.com','User');

    $sendMail->isHTML(true);
    $sendMail->Subject = '会員登録のご案内';
    $sendMail->Body = '<h3>ご登録頂き、誠にありがとうございます</h3><br><p>下記URLから登録続きをおこなってください。</p><br><p>'.$signinUrl.'</p>';
    // $sendMail->AltBody = 'メートル内容<br>';

    $sendMail->send();
} catch (BadMethodCallException $ex) {
    header("refresh: 3; url= ../view/Login.php");
    error_log($ex->getMessage() . "\n", 3, "error_log.txt");
    echo $ex->getMessage();
} catch (Exception $ex) {
    error_log($ex->getMessage() . "\n", 3, "error_log.txt");
    echo 'メール発信失敗：', $sendMail->ErrorInfo;
}
?>
