<?php
session_start();
$_SESSION['userid'] = @$_POST['userid'];
$_SESSION['password'] = @$_POST['password'];
$_SESSION['authuser'] = 0;

//Check username and password information

if (($_SESSION['userid'] == '123') and
    ($_SESSION['password'] == '123')) {
    $_SESSION['authuser'] = 1;
  /*echo '<style type="text/css">';
echo '.welcome{';
echo 'width:auto;';
  echo 'font-size: 15px;';
  echo 'background-color:brown;';
  echo 'color: #FFF;';
  echo ' text-align:right;';
  echo 'margin-bottom: -21px;';
echo '}';
echo '  </style>';
 echo '<p class="welcome">' . 'Hi   ' . $_SESSION['userid'] . '</p>';

*/
 include 'manage.php'; 

} else {

echo '<html>';
echo '<head>';
echo '<link rel="stylesheet" href="css/base.css">';
echo '</head>';
echo '<body>';
echo '  <div class="login">';
echo '  <div class="logincheck">';
echo "Sorry, Please login and use this page";
echo '</br></br></br>';
echo '<a href="index.php">login</a>';
echo '</div></div>';
echo '</body>';

echo '</html>';
}

?>

  


<!--
 
 