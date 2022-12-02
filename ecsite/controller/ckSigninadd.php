<?php
session_start();
require '../model/DBManagermst.php';

$dbmng = new DBManagermst();

$id = $_SESSION['userido'];
$name = $_POST['name'];
$pass = $_POST['pass'];
$post = $_POST['post'];
$ken = $_POST['ken'];
$shi = $_POST['shi'];
$ban = $_POST['ban'];
$dtl = $_POST['dtl'];
$tel = $_POST['tel'];

$dbmng->changeInfo($id, $name);
$result = $dbmng->showInfo($id);
foreach ($result as $row) {
    if ($pass!=$row['user_pass']) {
        $dbmng->changePass($id, $pass);
    }
}
$dbmng->changeAdress($id, $post, $ken, $shi, $ban, $dtl, $tel);
header('Location: ../view/Index.php');
?>
