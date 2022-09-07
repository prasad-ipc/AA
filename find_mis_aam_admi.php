<?php
include 'login_check.php';
?>
<?php
$_SESSION['project']='AAM ADMI';
$_SESSION['find_url']='mis_aam_admi.php';
?>
<html>
<head>
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/find.css"> 
<style type="text/css">
</style>
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'menu.php';?>
<?php include 'find_body_with_date.php';?>
</body>
</html>
