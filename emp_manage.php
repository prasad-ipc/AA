<html>
<head>

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
 <form method="post" action="employees.php">
	<h2>Select a Block</h2>
<input type="text" name="selection" >
</select>
<br><br>
<br><br>
<input type="submit" value="Submit">
</form>

</div>

</body>
</html>
