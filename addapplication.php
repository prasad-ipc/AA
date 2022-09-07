<?php
include 'login_check.php';
?>
<html>
<head>
	<title>Add application</title>
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'menu.php';?>

<?php
  //echo ' <form method="post" action="insertdata.php">';
echo ' <form method="post" action="insertdata.php">';
  echo '<p>Enter your NPS ID: ';
  echo ' <input type="text" name="npsid"/>';
   echo '</p>';
   echo '<p>Enter applicationdate:(YYYY-MM-DD) ';
   echo ' <input type="text" name="appdate"/>';
   echo '</p>';
   echo '<p>Enter No of applications: ';
   echo ' <input type="text" name="appnos"/>';
   echo '<p>';
   echo ' <input type="submit" name="submit" value="Submit"/>';
   echo '</p>';
  echo '</form>';
  
?>


</body>
</html>