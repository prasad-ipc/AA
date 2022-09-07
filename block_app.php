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
    width: 200px;
}

form input{
    width: 200px;
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
    
<form method="post" action="app_statement.php">
	<P style="color:blue;text-align :left;font-size:24px">Select a Block</p>

<?php
$db = mysql_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure our recently created database is the active one
mysql_select_db('NPS', $db) or die(mysql_error($db));

$query =  "SELECT * FROM blockco";

$result=mysql_query($query, $db) or die(mysql_error($db)); 

echo '<select name="selection">';
echo '<option value="ALL DIST">ALL Blocks</option>';
while ($row = mysql_fetch_array($result)) {
extract($row);
echo '<option value=' . $bc_id . '>'. $block . '</option>';
}
echo '</select>';
?>
<br><br>
<br><br>
<P style="color:blue;text-align :left;font-size:24px">Enter a Date. </P>
<P style="color:blue;text-align :left;font-size:22px">(YYYY-MM-DD)</P>
<input type="date" name="date" >
<br><br>
<input type="submit" value="Submit">
</form>

</div>

</body>
</html>
