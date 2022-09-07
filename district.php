<html>
<head>
 <link rel="stylesheet" href="css/base.css">
<style type="text/css">
body{
	background-image: url("images/pattern.gif");
}
form{
    width: 300px;
     margin-left: 150px;
     color: blue;
}
form select{
    color: blue;

}
form option{
    width: 200px;

}

form input{
    width: 100px;
color: blue;
font-weight: bold;
}

h2{
    height: 80px;
   margin-bottom: 10px;
   margin-top: -2px;
}
</style>

</head>
<body>
<?php include 'header.php'; ?>
<?php include 'menu.php';?>
<div class="loginform">
    
<form method="post" action="main.php">
	<h2>Select a District Code</h2>
<select name="selection">

<option value="ALL DIST">ALL DIST</option>
<option value="WG">WG</option>
<option value="EG">EG</option>
<option value="VSK">VSK</option>
<option value="KRI">KRI</option>
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
