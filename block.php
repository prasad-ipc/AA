<?php include 'header.php'; ?>
<?php include 'menu.php';?>
<html>
<head>

<style type="text/css">
<link rel="stylesheet" href="css/base.css"> 

body{
	background-image: url("images/pattern.gif");
}

</style>

</head>
<body>

<div class="loginform">
 <form method="post" action="main.php">
	<h2>Select a Block</h2>
<input type="text" name="selection" >
</select>
<br><br>
<br><br>
<h2>Enter a Date</h2>
<input type="date" name="date" >
<br><br>
<input type="submit" value="Submit">
</form>

</div>

</body>
</html>
