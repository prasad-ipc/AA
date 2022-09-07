<?php
session_start();
Unset($_SESSION['user_id']);
Unset($_SESSION['authuser']);
Unset($_SESSION['userpass']);
session_destroy();
echo '<html>';
echo '<head>';
echo '<link rel="stylesheet" href="css/base.css">';
include 'header.php';
echo '</head>';
echo '<body>';
echo '	<div class="login">';
echo '	<div class="logincheck">';
echo "Sorry, Please login and use this page";
echo '</br></br></br>';
echo '<a href="index.php">login</a>';
echo '</div></div>';
echo '</body>';

echo '</html>';
?>