<html>
<head>
<style type="text/css">

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
    height: 40px;
margin-left: 150px;
}
</style>

</head>
<body>
<?php include 'header.php'; ?>
<?php include 'menu.php';?>
<div class="loginform">
    <h2>Select a District Code</h2>
<form method="post" action="main.php">
<select name="selection">
<option value="NULL"></option>
<option value="WG">WG</option>
<option value="EG">EG</option>
<option value="VSK">VSK</option>
<option value="KRI">KRI</option>
</select>
<br><br>
<br><br>
<input type="submit" value="Submit">
</form>

</div>

</body>
</html>
