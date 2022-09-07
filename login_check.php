<?php 
session_start();
if(!isset($_SESSION['authuser'])){
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
exit;
}



?>