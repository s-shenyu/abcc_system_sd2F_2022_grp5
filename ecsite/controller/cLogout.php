<?php
session_start();
session_destroy();
header('Location: ../view/top.php');
?>